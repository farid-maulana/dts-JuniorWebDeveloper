<?php 
include 'TipeKamar.php';
include 'Kamar.php';
include 'Penyewa.php';
include 'User.php';
include 'Message.php';
include 'Aturan.php';
$tipekamar = new TipeKamar();
$kamar = new Kamar();
$penyewa = new Penyewa();
$user = new User();
$message = new Message();
$aturan = new Aturan();

$aksi = $_GET['aksi'];
switch ($aksi) {

    // Process untuk kamar
    case "tambah_tipe_kamar":
        $tipekamar->insert($_POST['type_name'],$_POST['harga'],$_POST['fasilitas']);
        header("location:../layouts/master.php?menu=kamar");
    break;
    case "tambah_kamar":
        $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['img']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, '../assets/images/kamar/'.$nama);
                $kamar->insert($_POST['name'], $_POST['tipe'], $nama);
                if($query){
                    echo 'FILE BERHASIL DI UPLOAD';
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
        header("location:../layouts/master.php?menu=kamar");
    break;
    case "hapus_kamar":
        $cek = $kamar->cekStatus($_GET['id']);
        if ($cek == true) {
            header("location:../layouts/master.php?menu=kamar");
        } else {
            $kamar->delete($_GET['id']);
            header("location:../layouts/master.php?menu=kamar");
        }
    break;

    // Process untuk transaksi
    case "tambah_penyewa":
        $user->insert($_POST['username'], $_POST['password'], $_POST['full_name'], 'penyewa');
        $user_id = $user->getLastId();
        $penyewa->insert(
            $_POST['no_ktp'], 
            $_POST['full_name'], 
            $_POST['alamat'], 
            $_POST['tempat_lahir'], 
            $_POST['tanggal_lahir'], 
            $_POST['jenis_kelamin'],
            $_POST['no_telp'],
            $_POST['kendaraan'],
            $_POST['kamar'],
            $user_id
        );
        $kamar->updateStatus($_POST['kamar']);
        header("location:../layouts/master.php?menu=transaksi");
    break;
    case "tambah_user":
        $user->insert($_POST['username'], $_POST['password'], $_POST['full_name'], 'admin');
        header("location:../index.php");
    break;

    // Process untuk pesan
    case "tambah_message":
        $data = $penyewa->tampilPenyewaByUsername($_POST['username']);
        $date = date('d/m/y h:i:s');
        foreach($data as $dt) {
            $message->insert($_POST['type_message'], $_POST['message_content'], $dt['no_ktp'], $dt['room_id'], $date);
        }
        header("location:../layouts/master.php?menu=dashboard");
    break;

    // Process untuk aturan
    case "aturan":
        $count = $aturan->countAturan();
        if($count == 0) {
            $aturan->insert($_POST['rule']);
        } else {
            $aturan->update($_POST['rule'], $_POST['user_id']);
        }
        header("location:../layouts/master.php?menu=aturan");
    break;

    // Process untuk pembayaran
    case "pembayaran_penyewa":
        $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['img']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, '../assets/images/bukti_pembayaran/'.$nama);
                $kamar->insert($_POST['name'], $_POST['tipe'], $nama);
                if($query){
                    echo 'FILE BERHASIL DI UPLOAD';
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
        header("location:../layouts/master.php?menu=pembayaran_penyewa");
    break;
}
?>