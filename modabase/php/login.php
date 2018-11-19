<?php
include "koneksi.php";
	if ($conn) {
		$query = mysqli_query($conn,"SELECT * FROM `akun` WHERE `email` = '".$_POST['email']."' and `password` = '".$_POST['pass']."'");
		$data = mysqli_fetch_array($query);
		if ($data['email']==$_POST['email'] && $data['password']==$_POST['pass'] && $_POST['email']!=""){
			// 	session_start();
			// $_SESSION['nama'] = $_POST['uname'];
			header("Location: index-dashboard.html");
		}
		else{
			session_start();
			$_SESSION['j'] = 1;
			header("Location: index-sign.php");
		}
		
	}
?>