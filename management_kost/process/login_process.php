<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($connect,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['role']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		$_SESSION['name'] = $data['full_name'];
		header("location:../layouts/master.php");
 
	}else if($data['role']=="penyewa"){
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "penyewa";
		header("location:../layouts/master.php");
	}else{
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
 
?>