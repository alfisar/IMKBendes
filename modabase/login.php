<?php
	include "koneksi.php";
	session_start();
	if ($conn) {
		$query = mysqli_query($conn,"SELECT * FROM `akun` WHERE `email` = '".$_POST['email']."' and `password` = '".$_POST['pass']."'");
		$data = mysqli_fetch_array($query);
		if ($data['email']==$_POST['email'] && $data['password']==$_POST['pass'] && $_POST['email']!=""){
			$_SESSION['email'] = $data['email'];
			header("Location: index-dashboard.php");
		}
		else{
			$_SESSION['j'] = 1;
			header("Location: index.php");
		}
		
	}
?>
