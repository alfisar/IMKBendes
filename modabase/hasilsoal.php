<?php
    session_start();
      include 'koneksi.php';  
      include 'dataprofil.php';
      if (!isset($_POST['email']) && !isset($_SESSION['email'])) {
      header("Location: index-sign.php");
      }
    unset($_SESSION['hasil']); 
    unset($_SESSION['index']); 
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
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body class="fix-header fix-sidebar card-no-border" style="background-color: #f6f7fb">
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
				<a class="navbar-brand w-100" href="index-dashboard.php">
						<!-- Logo icon -->
						<h2 class="weight-500">Modabase</h2>
						<!--End Logo icon -->
								<!-- Logo text -->
				</a> 
</nav>
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-10">
			    <div class="card text-center">
				  <div class="card-header" style="background-color: #3fc6bd ">
						<div class="row">
							<div class="col"><a href="your link here"> <i class="fas fa-times" style="float: left; color: white;"></i></a></div>
                            <?php 
                                $latihan = $_SESSION['latihan'];
                                if($latihan==1){
                            ?>
                            <div class="col text-center"><h2 style="color: white">Materi Atribut dan Kardinalitas</h></div>
                            <?php 
                                }
                                else {
                            ?>
                            <div class="col text-center"><h2 style="color: white">Materi Entitas</h></div>
                            <?php 
                                }
                            ?>
							<div class="col"></div>
						</div>
				  </div>
				  <div class="card-body">
						<div class="row justify-content-center">
							<div class="col-md-6 mb-2">    
								<h2 class="mb-2 weight-500">Nilai</h2>
								<div class="pt-3 pb-3 no-block">
										<div class="align-self-center">
											<input data-plugin="knob" class="dial"  data-width="90" data-height="90"  data-linecap="round" data-fgColor="#66cc66" data-thickness=".2" value="0" />
											</div>
								</div>
								<h4 id="kalimat" class=" mb-4"></h4>
								<div class="row justify-content-center">
									<div class="col-md-6">
										<a href = "latihansoal.php?latihan=<?php echo $latihan?>"><button class="btn btn-outline-danger w-100 p-3">Coba lagi</button></a>
									</div>
									<div class="col-md-6">
										<a href="index-dashboard.php"><button class="btn btn-outline-success w-100 p-3">Kembali ke menu</button></a>
									</div>
								</div>
							</div>
					</div>
				  </div>
				</div>
			</div>
			<!-- <div class="col-lg-4 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="d-flex pt-3 pb-2 no-block">
								<div class="align-self-center mr-3 knob-icon">
									<input data-plugin="knob" class="dial"  data-width="70" data-height="70"  data-linecap="round" data-fgColor="#f95476" data-thickness=".2" value="85" />
									<i class="flaticon-tool text-pink"></i> </div>
								<div class="align-slef-center mr-auto">
									<h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Storage</h2>
									<h6 class="text-light m-b-0">Used <strong>315 Gb</strong> / Free <strong>25 Gb</strong></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
		</div>
	</div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="plugins/vendors/bootstrap/js/popper.min.js"></script>
<script src="plugins/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/wow.js"></script>

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
<!--Sparkline JavaScript -->
<script src="plugins/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Morris JavaScript -->
<script src="plugins/vendors/raphael/raphael-min.js"></script>
<script src="plugins/vendors/morrisjs/morris.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
 <!-- Chart JS -->
 <script src="plugins/vendors/Chart.js/Chart.min.js"></script>

<!-- page JS -->
<script src="assets/js/charts-page.js"></script>
<script>
    
    $(".dial").knob();
		var less50 = "Jangan menyerah, ayo coba lagi!";
		var less80 = "Kerja bagus!";
		var less100 = "Ayo semangat, sedikit lagi menuju sempurna!"; 
		var hundred = "Hore, Pertahankan nilaimu!";

		var score = <?php echo $_SESSION['hasilfix'];?>;
		console.log(score);
    $({animatedVal: 0}).animate({animatedVal: score}, {
       duration: 2000,
       easing: "swing", 
       step: function() { 
           $(".dial").val(Math.ceil(this.animatedVal)).trigger("change"); 
       }
    }); 
    <?php 
        if($_SESSION['hasilfix'] < 50){
    ?>
            $("#kalimat").text(less50);
    <?php
        }
        else if($_SESSION['hasilfix'] < 80){
    ?>
        
            $("#kalimat").text(less80);
    <?php
        }
        else if ($_SESSION['hasilfix'] < 100){
    ?>
            $("#kalimat").text(less100);
    <?php
        }
        else if($_SESSION['hasilfix'] == 100){
    ?>
            $("#kalimat").text(hundred);
    <?php
        }
    ?>
</script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</div>
</body>

<!-- Mirrored from mintone.xyz/ui-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 03:15:12 GMT -->
</html>
