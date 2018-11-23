<?php 
    session_start();
    include "koneksi.php"; 
	$email=$_POST['email']; 
    $lokasi=$_POST['lokasi']; 
    $tentang=$_POST['tentang']; 
    $namad = $_POST['namad'];
    $namab = $_POST['namab'];
    $sql=mysqli_query($conn,"UPDATE `akun` SET `email`='$email',`namad`='$namad',`namab`='$namab',`lokasi`='$lokasi',`tentang`='$tentang' WHERE `email` ='".$_SESSION['email']."'"); 
    header("Location: index-profil.php");
    
?>