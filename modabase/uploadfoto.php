<?php
    include 'koneksi.php';
    session_start();
    $info = pathinfo($_FILES['userFile']['name']);
    $ext = $info['extension']; // get the extension of the file
    $newname = $_FILES['userFile']['name']; 
    $sql=mysqli_query($conn,"UPDATE `akun` SET `foto`='$newname' WHERE `email` ='".$_SESSION['email']."'"); 
    if($sql){
        $target = 'assets/imgs/users/'.$newname;
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
    }
    header("Location: index-profil.php");
?>