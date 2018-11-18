<?php 
    session_start();
    session_destroy();
	header("Location: index-sign.php");
?>