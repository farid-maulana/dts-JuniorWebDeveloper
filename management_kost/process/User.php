<?php
class User {

    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    function insert($username, $password, $full_name, $role) {
        mysqli_query($this->connect, "insert into users(full_name, username, password, role) values('$full_name','$username','$password','$role')");
    }

    function getLastId() {
        $data = mysqli_query($this->connect, "select id from users order by id desc limit 1");
        $result = "";
        while($row = mysqli_fetch_array($data)){
            $result = $row['id'];
		}
		return $result;
    }

    function getIdByUsername($username) {
        $data = mysqli_query($this->connect, "select id from users where username='$username'");
        $result = "";
        while($row = mysqli_fetch_array($data)){
            $result = $row['id'];
		}
		return $result;
    }

    function informasiUser($username) {
        $data = mysqli_query($this->connect, 
            "SELECT penyewa.*, rooms.*, room_type.* FROM users INNER JOIN penyewa ON users.id = penyewa.user_id INNER JOIN rooms ON penyewa.room_id = rooms.id INNER JOIN room_type ON rooms.type_id = room_type.id WHERE users.username = '$username'");
        while($row = mysqli_fetch_array($data)){
            $result[] = $row;
		}
		return $result;
    }
}
?>