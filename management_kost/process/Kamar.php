<?php
class Kamar {

    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }
    
    function tipeKamar() {
        $data = mysqli_query($this->connect,"select * from room_type");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function tampilKamar() {
        $data = mysqli_query($this->connect,"select * from rooms left join penyewa on rooms.id = penyewa.room_id");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function tampilKamarKosong() {
        $data = mysqli_query($this->connect,"select * from rooms where status=0");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function countKamar() {
        $data = mysqli_query($this->connect, "select count(id) as total from rooms");
        $hasil = "";
        while($row = mysqli_fetch_array($data)){
			$hasil = $row['total'];
        }
		return $hasil;
    }

    function countKamarKosong() {
        $data = mysqli_query($this->connect, "select count(id) as kosong from rooms where status = 0");
        $hasil = "";
        while($row = mysqli_fetch_array($data)){
			$hasil = $row['kosong'];
        }
		return $hasil;
    }

    function countKamarTerpakai() {
        $data = mysqli_query($this->connect, "select count(id) as terpakai from rooms where status = 1");
        $hasil = "";
        while($row = mysqli_fetch_array($data)){
			$hasil = $row['terpakai'];
        }
		return $hasil;
    }

    function cekStatus($id) {
        $data = mysqli_query($this->connect, "select status from rooms where id = $id");
        $hasil = "";
        while($row = mysqli_fetch_array($data)){
			$hasil = $row['status'];
        }
        if ($hasil == 1) {
            return true;
        } else {
            return false;
        }
    }

    function insert($name, $tipe, $img) {
        mysqli_query($this->connect, "insert into rooms(room_name, room_img, type_id) values('$name','$img','$tipe')");
    }

    function updateStatus($id) {
        mysqli_query($this->connect, "update rooms set status = 1 where id = $id");
    }

    function delete($id) {
        mysqli_query($this->connect, "delete from rooms where id='$id'");
    }
}
?>