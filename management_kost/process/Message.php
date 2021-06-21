<?php
class Message {

    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    function tampilMessage() {
        $data = mysqli_query($this->connect,"select message.*, penyewa.*, rooms.* from message inner join penyewa on message.no_ktp = penyewa.no_ktp inner join rooms on message.room_id = rooms.id");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function getMessageByKtpAndKamar($no_ktp, $room_id) {
        $data = mysqli_query($this->connect,"select message.* from message where no_ktp = '$no_ktp' and room_id = $room_id");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function insert($type, $content, $ktp, $room, $date) {
        mysqli_query($this->connect, "insert into message(no_ktp, room_id, tanggal, message_type, message_content) values('$ktp','$room','$date','$type','$content')");
    }
}
?>