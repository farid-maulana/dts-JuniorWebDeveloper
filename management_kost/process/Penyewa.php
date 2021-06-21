<?php
class Penyewa {

    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    function tampilPenyewaByUsername($username) {
        $data = mysqli_query($this->connect, 
            "SELECT penyewa.* FROM users INNER JOIN penyewa ON users.id = penyewa.user_id WHERE users.username = '$username'");
        while($row = mysqli_fetch_array($data)){
            $result[] = $row;
		}
		return $result;
    }

    function insert($no_ktp, $full_name, $alamat, $tempat_lahir, $tgl_lahir, $jk, $no_telp, $kendaraan, $room_id, $user_id) {
        mysqli_query($this->connect, "insert into penyewa
            (no_ktp, full_name, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, no_telp, kendaraan, room_id, user_id) values
            ('$no_ktp','$full_name','$alamat','$tempat_lahir','$tgl_lahir','$jk','$no_telp','$kendaraan','$room_id','$user_id')");
    }
}
?>