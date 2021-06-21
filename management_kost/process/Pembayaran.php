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
}
?>