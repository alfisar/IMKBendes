<?php 
    include "koneksi.php";
    session_start();
	
    $fnama=$_POST['fname'];
	$lnama=$_POST['lname'];  
	$email=$_POST['email']; 
    $password=$_POST['pass']; 
    $pass=$_POST['cpass']; 
    if($password == $pass){
        $sql=mysqli_query($conn,"INSERT INTO `akun`(`email`, `password`, `namad`,`namab`, `lokasi`, `tentang`, `foto`) VALUES ('$email','$pass','$fnama','$lnama','','','')"); 
        if($sql){
            $_SESSION['h'] = 1;
            unset($_SESSION['i']);
        }
        else{
			$_SESSION['i'] = 1;
			
        }
        header("Location: index-sign.php");
        
    }
?>