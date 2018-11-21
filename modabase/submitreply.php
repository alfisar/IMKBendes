<?php 
	session_start();
    include "koneksi.php";
    $email = $_SESSION['email'];  
    $idc = $_SESSION['idcomment'];
    $idnotif = $_SESSION['idnotif'];  
    $comment = $_POST['comment1'];
    $id = $_POST['idcomment'];
    $uid=$_GET['uid'];
    $uidd = $_GET['uidd'];
    $query = mysqli_query($conn,"SELECT * FROM `notif`");
    $hitung =mysqli_num_rows($query);

    // echo "<script>alert('$hitung')</script>";

    $_SESSION['idnotif'] = $hitung;
    $idnotif=$_SESSION['idnotif']+1;
    if($uid!=null){
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`) VALUES ('$idnotif','$email','','$uid','','atribut','')");
    }
    else if ($uidd!=null){
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`) VALUES ('$idnotif','$email','','','$uidd','atribut','')");
    }
    else{
        $sql = mysqli_query($conn,"INSERT INTO `notif`(`idnotif`, `email`,`iduser`, `idsuka`, `idtidak`, `materi`, `balasan`,`idreply`) VALUES ('$idnotif','$email','$id','','','atribut','$comment','u$idc')");
        $sql = mysqli_query($conn,"INSERT INTO `comment`(`email`, `materi`, `iduser`, `isicomment`) VALUES ('$email','atribut','u$idc','')");
    }
    header("Location: diskusi.php");

?>
