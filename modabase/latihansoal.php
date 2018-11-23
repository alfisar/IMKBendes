<?php 
    session_start();
      include 'koneksi.php';  
      include 'dataprofil.php';
      if (!isset($_POST['email']) && !isset($_SESSION['email'])) {
      header("Location: index-sign.php");
      }
      if(!isset ($_SESSION['index'])){
            $_SESSION['index'] = 1;
      }
    if(!isset ($_SESSION['latihan'])){
        $_SESSION['latihan'] = $_GET['latihan'];
    }
    $hasil2 = $_SESSION['latihan'];
    // echo"<script>alert('$hasil2');</script>";
    // unset($_SESSION['hasil']); 
    //         unset($_SESSION['index']);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mintone.xyz/index-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 03:13:52 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Modabase">
<meta name="author" content="Modabase">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon.png">
<title>Modabase - E-Learning Pemodelan Basis data</title>
<!-- Bootstrap Core CSS -->
<link href="plugins/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<!-- This page CSS -->
<!-- chartist CSS -->
<link href="plugins/vendors/morrisjs/morris.css" rel="stylesheet">
<!--c3 CSS -->
<link href="plugins/vendors/c3-master/c3.min.css" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="plugins/vendors/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- page css -->
<link href="assets/css/pages/tab-page.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/sign2.css">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/animateme.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body class="fix-header fix-sidebar card-no-border" style="background-color: #f6f7fb;position: relative;z-index: -1">
<div id="checkoutLayer">
</div>
<div id="checkoutCard">
	<div class="row justify-content-center mt-5">
		<div class="col-md-6 mt-5">
			<!-- Card -->
			<div class="card mt-5" id="cardAnimate">
				<div class="card-body p-b-0 text-center">
					<h3 class="pt-3 mb-0">Anda belum selesai mengerjakan soal</h3>
					<h3 class="pt-0 mt-0">lanjut keluar?</h3>
					<div class="row p-5">
						<div class="col-md-6">
							<button class="btn btn-outline-success w-75 pt-3 pb-3" id="hideExit">Batal</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-outline-danger w-75 pt-3 pb-3 " id="yesExit">Kembali ke menu</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Card -->
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label">Modabase</p>
  </div>
</div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar nav-form text-center" style="height: auto">
				<a class="navbar-brand w-100" href="#" onclick="checkOut()">
						<!-- Logo icon -->
						<h2 class="weight-500">Modabase</h2>
						<!--End Logo icon -->
								<!-- Logo text -->
				</a> 
</nav>
	<!--
	<div class="container mt-5">
		<div class="row">
            <!-- Column 
            <div class="col-md-12">
              <div class="card text-center">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        <h3 class="weight-500 m-b-25" id="atribut">Latihan Soal 1</h3>
                        <p class="font-16 m-b-30">Latihan soal berisikan materi tentang : <b>Attibut</b>, <b>Kardinalitas</b> , <b>Entitas</b></p>
                        <button class="btn btn-primary bbtn-primary rounded pr-4 pl-4">Mulai</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
            <!-- Column 
          </div>
	</div>
	!-->
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			    <div class="card text-center">
				  <div class="card-header" style="background-color: #3fc6bd ">
				  	<!-- <a href="your link here"> <i class="fas fa-times" style="float: left; color: white;"></i></a>
				    <h6 style="color: white">Materi Atribut</h6>
						<h6 style="float: right; color: white">1/5</h6> -->
						<div class="row">
							<div class="col"><a href="#" onclick="checkOut()"> <i class="fas fa-times" style="float: left; color: white;"></i></a></div>
                            <?php 
                                if($_SESSION['latihan']==1){
                            ?>
                                <div class="col text-center"><h6 style="color: white">Materi Atribut dan Kardinalitas</h6></div>
							    <div class="col"><h6 style="float: right; color: white"><?php echo $_SESSION['index']; ?>/10</h6> </div>
                            <?php 
                                }
                                else {
                            ?>
                                <div class="col text-center"><h6 style="color: white">Materi Entitas</h6></div>
                                <div class="col"><h6 style="float: right; color: white"><?php echo $_SESSION['index']; ?>/5</h6> </div>
                            <?php 
                                }
                            ?>
                        </div>
				  </div>
                <?php
                    // $hasil2 = $_SESSION['index'];
                    // echo"<script>alert('$hasil2');</script>";
                    if(($_SESSION['latihan']==1)&&($_SESSION['index']==1)){
                ?>
				<div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Apa yg dimaksud dengan atribut?</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. karakteristik dari entitas atau relationship, yang menyediakan penjelasan detail tentang entitas atau relationship.</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. profesional sistem untuk berkomunikasi dengan pemakai eksekutif tingkat tinggi dalam perusahaan atau organisasi yang tidak tertarik pada pelaksanaan operasi sistem sehari-hari</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Partisipasi entitas pada suatu relasi</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Penunjuk untuk menentukan jumlah entitas</button></a>
					</div>
                 </div>
                </div>
                <!--</div>-->
                <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==2)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Berdasarkan karakteristik atau sifatnya, atribut dapat dibagi menjadi beberapa bagian, yaitu </p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A.Simple attribute dan composite attribute. </button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Single valued attribute dan multi valued attribute.</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Mandatory attribute</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Semua benar</button></a>
					</div>
				</div>
                <!--</div>-->
                <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==3)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Pilih pernyataan yg benar </p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Derived Attribute atau Atribut Turunan adalah atribut dapat diturunkan dari atribut atau tabel lain yang berhubungan.</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Derived Atribut merupakan atribut yg tidak dapat diturunkan</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Derived atribut merupakan kunci utama karena sering dijadikan acuan untuk mencari informasi</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Derived atribut merupakan bagian dari single atribut</button></a>
					</div>
				</div>
                <!--</div>-->
                <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==4)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Atribut dapat diidentifikasi berdasarkan dua jenis yaitu </p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. dentifier dan Descriptor </button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Identifier dan Valuable aspect</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Descriptor dan Cardinality</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Semua salah</button></a>
					</div>
				</div>
                <!--</div>-->
                <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==5)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Pada transformasi ER ke skema relasional terdapat atribut yg dapat memengaruhi proses tersebut, mana atribut yg dimaksud oleh pernyataan diatas </p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Atribut komposit</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Atribut multivalues</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. a dan b benar</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. semua salah</button></a>
					</div>
				</div>
                </div>
                 <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==6)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Menentukan jumlah entity yang bersesuaian dengan entity yang lain</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Multivalue Atribut</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Relationship</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Participant Constraint</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Mapping Cardinality</button></a>
					</div>
				</div>
                </div>
                 <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==7)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Berikut jenis jenis mapping cardinality</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A.One – to – One</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. One – to – Many</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Many – to – Many</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Semua benar</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==8)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
                    <p class="card-text mb-5" style="font-size: 18pt">Pada transformasi ER ke skema relasi, terdapat pengaruh kardinalitas untuk relasi biner. Susun langkah umum transformasi relasi biner berikut dengan benar: </p>
                    <ol class="text-left">
                        <li>Set entitas sebagai child</li>
                        <li>Set satu entitas sebagai parent</li>
                        <li>Tambahkan PK parent ke child sebagai PK</li>
                        <li>Atribut yg berada pada relasi tambahkan ke tabel child</li>
                    </ol>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. 2-1-3-4</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. 1-2-3-4</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. 3-4-1-2</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. 1-3-2-4</button></a>
					</div>
				</div>
                </div>
                 <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==9)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Apa yang dimaksud dengan kardinalitas?</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Menunjukan jumlah maksimum entitas yang dapat berelasi dengan entitas pada himpunan entitas yang lain</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Derajat dari sebuah relasi data</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. A dan b benar</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Semua salah</button></a>
					</div>
				</div>
                </div>
                 <?php
                    }
                    else if(($_SESSION['latihan']==1)&&($_SESSION['index']==10)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Entitas dengan kardinalitas 1 diidentifikasi sebagai</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Parent</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Child</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Succesor</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Identifier</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==2)&&($_SESSION['index']==1)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Suatu kumpulan object atau sesuatu yang dapat dibedakan atau dapat diidentifikasikan secara unik</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Entitas</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Atribut</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Indicator</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Cardinality</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==2)&&($_SESSION['index']==2)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Entity set yang dependent terhadap strong entity set digambarkan dengan :</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Box</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Persegi panjang bertumpuk</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Lingkaran</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Bujur sangkar</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==2)&&($_SESSION['index']==3)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Weak entity digambarkan dengan...</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Persegi panjang bertumpuk</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Garis</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Persegi panjang</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Lingkaran</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==2)&&($_SESSION['index']==4)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Manakah yang bukan merupakan pengaruh entitas pada transformasi ER ke skema relasional?</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Entitas asosiatif</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Entitas disosiatif</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Entitas kasus generalisasi dan spesialisasi</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Entitas agregasi</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                    else if(($_SESSION['latihan']==2)&&($_SESSION['index']==5)){
                ?>
                <div class="card-body">
					<h2 class="card-title mt-3">Pilihan Ganda</h2>
					<p class="card-text mb-5" style="font-size: 18pt">Pada skema relasional atribut disebut sebagai</p>
					<div class="mt-5 mb-4">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">A. Tabel</button></a>
						<a href="hitung.php?jawaban=benar"><button class="btn btn-outline-primary w-25 ml-3 p-3">B. Kolom</button></a>
					</div>
					<div class="mt-4 mb-5">
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 mr-3 p-3">C. Cell</button></a>
						<a href="hitung.php"><button class="btn btn-outline-primary w-25 ml-3 p-3">D. Value</button></a>
					</div>
				</div>
                </div>
                <?php
                    }
                ?>
			</div>
		</div>
	</div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="plugins/vendors/bootstrap/js/popper.min.js"></script>
<script src="plugins/vendors/bootstrap/js/bootstrap.min.js"></script>
<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.card-link')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="plugins/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="plugins/vendors/d3/d3.min.js"></script>
<script src="plugins/vendors/c3-master/c3.min.js"></script>
<!--jquery knob -->
<script src="plugins/vendors/knob/jquery.knob.js"></script>
<!--Morris JavaScript -->
<script src="plugins/vendors/raphael/raphael-min.js"></script>
<script src="plugins/vendors/morrisjs/morris.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
<!-- Dashboard JS -->
<script src="assets/js/dashboard-projects.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
<script src="plugins/vendors/datatables/jquery.dataTables.min.js"></script>
<script>
$('#slimtest1, #slimtest2, #slimtest3, #slimtest4').perfectScrollbar();
</script>

<script>

	function checkOut(){
		$('#checkoutLayer').fadeIn();
		$('#checkoutCard').fadeIn();
		$('#cardAnimate').addClass("animated shake");
	}

		$(function() {
		
		 $('#hideExit').click(function(e){
			$('#checkoutLayer').fadeOut();
			$('#checkoutCard').fadeOut();
			e.preventDefault();	
		});

		$('#yesExit').click(function(e){
			$('#checkoutLayer').fadeOut();
			$('#checkoutCard').fadeOut();
			window.location.href="index-dashboard.php";
			e.preventDefault();	
		});
		
		});
</script>

</body>

<!-- Mirrored from mintone.xyz/index-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 03:14:08 GMT -->
</html>
