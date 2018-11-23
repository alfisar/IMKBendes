<?php 
    include 'koneksi.php';
    $query = mysqli_query($conn,"SELECT * FROM `akun` WHERE `email` = '".$_SESSION['email']."'");
    $data = mysqli_fetch_array($query);

?>