<?php 
    include "koneksi.php";
    session_start();
	
    $fnama=$_POST['fname'];
	$lnama=$_POST['lname'];  
	$email=$_POST['email']; 
    $password=$_POST['pass']; 
    $pass=$_POST['cpass']; 
    if($password == $pass){
        $sql=mysqli_query($conn,"INSERT INTO `akun`(`email`, `password`, `namad`, `namab`, `umur`, `gender`, `alamat`) VALUES ('$email','$pass','$fnama','$lnama',0,'','')"); 
        if($sql){
            $_SESSION['h'] = 1;
        }
        else{
			$_SESSION['j'] = 1;
			
        }
        header("Location: index-sign.php");
        
    }
?>