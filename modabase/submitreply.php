<?php 
	session_start();
    include "koneksi.php";
    $emailT = $_POST['email'];
    $emailT1 = $_GET['emailT'];
    $email = $_SESSION['email'];  
    $idc = $_SESSION['idcomment'];
    $idnotif = $_SESSION['idnotif'];
    $materi = $_SESSION['materi'];  
    $comment = $_POST['comment1'];
    $id = $_POST['idcomment'];
    $uid=$_GET['uid'];
    $uidd = $_GET['uidd'];
    $query = mysqli_query($conn,"SELECT * FROM `notif`");
    $hitung =mysqli_num_rows($query);

    // echo "<script>alert('$emailT1')</script>";

    $_SESSION['idnotif'] = $hitung;
    $idnotif=$_SESSION['idnotif']+1;
    if($uid!=null){
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`,`idreply`,`kepada`) VALUES ('$idnotif','$email','','$uid','','$materi','','','$emailT1')");
    }
    else if ($uidd!=null){
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`,`idreply`,`kepada`) VALUES ('$idnotif','$email','','','$uidd','$materi','','','$emailT1')");
    }
    else{
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`,`idreply`,`kepada`) VALUES ('$idnotif','$email','$id','','','$materi','$comment','u$idc','$emailT')");
        $sql = mysqli_query($conn,"INSERT INTO `comment`(`email`, `materi`, `iduser`, `isicomment`) VALUES ('$email','$materi','u$idc','')");
    }
    header("Location: diskusi.php");

?>
