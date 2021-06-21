<?php
include 'koneksi.php';

$aksi = $_GET['aksi'];
switch ($aksi) {
    case 'add_barang':
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        mysqli_query($connect, "INSERT INTO barang VALUES('$kode_barang', '$nama_barang', '$harga_barang')");
        header('location:layouts/master.php?menu=barang');
        break;
    case 'delete_barang':
        mysqli_query($connect, "DELETE FROM barang WHERE KodeBarang=".$_GET['id']);
        header('location:layouts/master.php?menu=barang');
        break;
    case 'update_barang':
        $kode_barang = $_GET['id'];
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        mysqli_query($connect, "UPDATE barang SET Namabarang='$nama_barang', Hargabarang='$harga_barang' WHERE Kodebarang='$kode_barang'");
        header('location:layouts/master.php?menu=barang');
        break;
    case 'add_pelanggan':
        $no_pelanggan = $_POST['no_pelanggan'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        mysqli_query($connect, "INSERT INTO pelanggan VALUES('$no_pelanggan', '$nama_pelanggan', '$alamat')");
        header('location:layouts/master.php?menu=pelanggan');
        break;
    case 'delete_pelanggan':
        mysqli_query($connect, "DELETE FROM pelanggan WHERE Nopelanggan=".$_GET['id']);
        header('location:layouts/master.php?menu=pelanggan');
        break;
    case 'update_pelanggan':
        $no_pelanggan = $_GET['id'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        mysqli_query($connect, "UPDATE pelanggan SET Namapelanggan='$nama_pelanggan', Alamat='$alamat' WHERE Nopelanggan='$no_pelanggan'");
        header('location:layouts/master.php?menu=pelanggan');
        break;
    case 'add_penjualan':
        $faktur = $_POST['faktur'];
        $no_pelanggan = $_POST['no_pelanggan'];
        $tanggal_penjualan = $_POST['tanggal_penjualan'];
        mysqli_query($connect, "INSERT INTO penjualan VALUES('$faktur', '$no_pelanggan', '$tanggal_penjualan')");
        header('location:layouts/master.php?menu=penjualan');
        break;
    case 'delete_penjualan':
        mysqli_query($connect, "DELETE FROM penjualan WHERE Faktur=".$_GET['id']);
        header('location:layouts/master.php?menu=penjualan');
        break;
    case 'update_penjualan':
        $faktur = $_GET['id'];
        $no_pelanggan = $_POST['no_pelanggan'];
        $tanggal_penjualan = $_POST['tanggal_penjualan'];
        mysqli_query($connect, "UPDATE penjualan SET Nopelanggan='$no_pelanggan', Tanggalpenjualan='$tanggal_penjualan' WHERE Faktur='$faktur'");
        header('location:layouts/master.php?menu=penjualan');
        break;
}
?>