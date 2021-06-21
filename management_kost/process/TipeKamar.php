<?php
class TipeKamar {

    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }
    
    public function insert($name, $harga, $fasilitas) {
        $fas = implode(", ", $fasilitas);
        $insert = mysqli_query($this->connect, "insert into room_type(type_name, harga, fasilitas) values('$name','$harga','$fas')");
    }
}
?>