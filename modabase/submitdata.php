<?php 
    session_start();
    include "koneksi.php"; 
	$email=$_POST['email']; 
    $lokasi=$_POST['lokasi']; 
    $tentang=$_POST['tentang']; 
    $sql=mysqli_query($conn,"UPDATE `akun` SET `email`='$email',`lokasi`='$lokasi',`tentang`='$tentang' WHERE `email` ='".$_SESSION['email']."'"); 
    header("Location: index-profil.php");
    
?>