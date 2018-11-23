<?php 
    include "koneksi.php";
    session_start();
    if(!isset ($_SESSION['index'])){
        $_SESSION['index'] = 1;
    }
    else{
        $_SESSION['index'] = $_SESSION['index'] + 1;
        $hasil23 = $_SESSION['index'];
        // echo"<script>alert('$hasil23');</script>";
    }
    if(isset ($_GET['jawaban'])){
        $jawaban = $_GET['jawaban'];
        if($jawaban != ""){
            if(!isset ($_SESSION['hasil'])){
            $_SESSION['hasil'] = 1;
            }
            else{
            $_SESSION['hasil'] = $_SESSION['hasil'] + 1;
            }
        }   
        
    }
        $latihan = $_SESSION['latihan'];;
        $hasil = $_SESSION['hasil'];
        $index = $_SESSION['index'];
        $email = $_SESSION['email']; 
        if(($latihan == 1)&&($index > 10)){
            $hasil2 = ($hasil/10)*100;
            $_SESSION['hasilfix']=$hasil2;
            // echo"<script>alert('$hasil2');</script>";
            $query = mysqli_query($conn,"SELECT * FROM `score` WHERE `email` = '$email' AND `latihansoal` = '$latihan'");
            $hasil = mysqli_num_rows($query);
            if($hasil == 0){
                $sql=mysqli_query($conn,"INSERT INTO `score`(`email`, `latihansoal`, `hasil`) VALUES ('$email','$latihan','$hasil2')");
                header("Location: hasilsoal.php");
            }
            else{
                $sql=mysqli_query($conn,"UPDATE `score` SET `email`='$email',`latihansoal`='$latihan',`hasil`='$hasil2' WHERE `email` ='$email' AND `latihansoal` = '$latihan'"); 
                header("Location: hasilsoal.php");
            }
        }
        else if(($latihan == 2)&&($index > 5)){
            $hasil2 = ($hasil/5)*100;
            $_SESSION['hasilfix']=$hasil2;
            // echo"<script>alert('$hasil2');</script>";
            $query = mysqli_query($conn,"SELECT * FROM `score` WHERE `email` = '$email' AND `latihansoal` = '$latihan'");
            $hasil = mysqli_num_rows($query);
            if($hasil == 0){
                $sql=mysqli_query($conn,"INSERT INTO `score`(`email`, `latihansoal`, `hasil`) VALUES ('$email','$latihan','$hasil2')");
                header("Location: hasilsoal.php");
            }
            else{
                $sql=mysqli_query($conn,"UPDATE `score` SET `email`='$email',`latihansoal`='$latihan',`hasil`='$hasil2' WHERE `email` ='$email' AND `latihansoal` = '$latihan'"); 
                header("Location: hasilsoal.php");
            }
        }
        else{
            header("Location: latihansoal.php");
        }
?>