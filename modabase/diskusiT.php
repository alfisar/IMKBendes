<?php 
    session_start();
    $_SESSION['materi'] = $_GET['materi'];
    // $materi=$_SESSION['materi'];
    // echo "<script>alert'hahahah';</script>";
    // echo $_SESSION['materi'];
    header("Location: diskusi.php");
?>