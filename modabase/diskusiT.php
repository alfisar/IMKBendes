<?php 
    session_start();
    $_SESSION['materi'] = $_GET['materi'];
    header("Location: diskusi.php");
?>