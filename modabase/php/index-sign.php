<?php 
    echo "<script> alert('haha'); </script>";
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
<nav class="navbar nav-form" style="height: auto">
		<h2 class="weight-500 pb-2" ><a href="#">Modabase</a></h2>	
</nav>

	<div class="container mt-5">
		<div class="row justify-content-center">
		<div class="col-6 formcard" >
			<div class="row">
					<div class="col-md-6 text-center pt-4 pb-4 daftarDiv" id="daftar">
						<h4 class="weight-600">Daftar</h4>
					</div>
					<div class="col-md-6 text-center pt-4 pb-4" id="masuk">
							<h4 class="weight-600">Masuk</h4>
					</div>
			</div>
			<div class="col-md-12 p-5">
			<div id="daftarForm">
				<h2 class="mt-2 weight-300">Buat akun modabase anda</h2>
					<p class="pb-4">Belajar Pemodelan Basis Data bersama Modabase, raih prestasimu dengan nilai tertinggi dikelas!
					</p>
			<form method="POST" action="registrasi.php">
                <?php 
                    if (!empty($_SESSION['i'])) {
							echo "<div class='alert alert-danger'> Registrasi Gagal</div>";
						}
                ?>
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" name="fname" id="firstName" placeholder="Nama depan" required>
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" name="lname" id="lastName" placeholder="Nama belakang" required>
					</div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" id="daftarEmail" placeholder="Alamat Surel" required> 
				</div>
				<div class="form-row">
						<div class="form-group col-md-6">
							<input type="password" class="form-control" name="pass" id="pass" placeholder="Kata Sandi" required>
						</div>
						<div class="form-group col-md-6">
							<input type="password" class="form-control" name="cpass" id="checkPass" placeholder="Cocokan Kata Sandi" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary w-100 p-3">Daftar</button>
				</form>
			</div>
			<div id="masukForm" style="display: none">
					<h2 class="mt-2 weight-300">Masuk ke akun modabase anda</h2>
					<p class="pb-4">Belajar Pemodelan Basis Data bersama Modabase, raih prestasimu dengan nilai tertinggi dikelas!
				<form method="POST" action="login.php">
                    <?php 
                        if (!empty($_SESSION['j'])) {
							echo "<div class='alert alert-danger'> email atau password anda salah</div>";
						}
                    ?>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Alamat Surel" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="pass" id="inputPass" placeholder="Kata Sandi" required>
						</div>
						<button type="submit" class="btn btn-primary w-100 p-3">Masuk</button>
							
				</form>
			</div>
			</div>
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
		$(function() {
		
		 $('#masuk').click(function(e) {
			$('#daftarForm').find("input[type=text], input[type=password] , input[type=email] ").val("");
			$("#masukForm").show();
			$('#inputEmail').focus();
			$("#daftarForm").hide();
			$('#daftar').removeClass('daftarDiv');
			$(this).addClass('masukDiv');
			e.preventDefault();
		 });
		
		$('#daftar').click(function(e) {
			$('#masukForm').find("input[type=email], input[type=password] ").val("");
			$("#daftarForm").show();
			$('#firstName').focus();
			$("#masukForm").hide();
			$('#masuk').removeClass('masukDiv');
			$(this).addClass('daftarDiv');
			e.preventDefault();
		});
		
		});
</script>

</body>

<!-- Mirrored from mintone.xyz/index-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 03:14:08 GMT -->
</html>
