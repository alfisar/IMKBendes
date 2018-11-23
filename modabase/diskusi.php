<?php    
    session_start();
      include 'dataprofil.php';
      include "koneksi.php";
      // echo "<script>alert('".$_SESSION['materi']."')</script>";
      $materi = $_SESSION['materi'];
    //   echo "<script>alert('$materi')</script>";
      if (!isset($_POST['email']) && !isset($_SESSION['email'])) {
      header("Location: index-sign.php");
    }
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
  <title>Admin Mintone - Bootstrap 4 Admin Template</title>
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
  <link href="assets/css/responsive.css" rel="stylesheet">
  <link href="plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-header fix-sidebar card-no-border">
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
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Container1140px -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
  <header class="topbar">
    <div class="container">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header"> 
            <a class="navbar-brand" href="index-dashboard.php">
                <!-- Logo icon -->
                <div><h3>M<span>odabase</h3></span></div>
                <!--End Logo icon -->
                    <!-- Logo text -->
            </a> 
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="top-bar-main">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <div class="float-left">
            <ul class="navbar-nav">
              <li class="nav-item "><a class="nav-link navbar-toggler navbar-top-on sidebartoggler waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item hidden-xs-down app-search">
                <input type="text" class="form-control float-left" placeholder="Type for search...">
              </li> -->
              <li class="nav-item hidden-xs-down"> <a class="nav-link navbar-toggler sidebartoggler hidden-xs-down waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> </li>
            </ul>
          </div>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <div class="float-right pr-3">
            <ul class="navbar-nav my-lg-0 float-right">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark note" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell"></i>
                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                  <ul>
                    <li>
                      <?php 
                        $email = $_SESSION['email'];
                        $sql = mysqli_query($conn,"SELECT * FROM `notif` where kepada = '$email' AND idtidak = '' ORDER BY idnotif DESC");
                        $hasil =mysqli_num_rows($sql);
                        if($hasil == 0){
                      ?>
                            <div class="drop-title text-secondary text-center pt-3 pb-3">Tidak ada Notifikasi</div>
                      <?php 
                        }
                        else if ($hasil <= 3 ){
                      ?>
                      <div class="drop-title">Anda punya <span class="highlighted"><?php echo $hasil; ?> notifikasi</span> baru</div>
                      <?php 
                        }
                        else{
                      ?>
                      <div class="drop-title">Anda punya <span class="highlighted">3 notifikasi</span> baru</div>
                        <?php }?>
                    </li>
                    <li>
                      <div class="message-center">
                        <!-- Message -->
                        <?php 
                          $i = 1;
                          while (($data2 = mysqli_fetch_array($sql)) && ($i <=3)){
                            $email1 = $data2['email'];
                            // $materi1 = $data2['materi'];
                            $sql2 = mysqli_query($conn,"SELECT * FROM `akun` where email = '$email1'");
                            $data1 = mysqli_fetch_array($sql2);     
                        ?>
                        <a href="diskusi.php">
                          <div class="row">
                              <div class="col-9">
                                  <?php if($data2['iduser'] != ""){  ?>
                                  <div class="mail-content"><?php echo $data1['namad']; ?> berkomentar pada Diskusi: <?php echo $data2['materi'];?></div> 
                                  <?php 
                                      }
                                      else if ($data2['idsuka'] != ""){
                                  ?>
                                  <div class="mail-content"><?php echo $data1['namad']; ?> menyukai komentar anda</div>
                                  <?php }?>
                              </div>
                              <div class="col-3">
                                  <span class="float-right text-light">11.08.2018</span>
                              </div>
                          </div>
                        </a>
                        <?php       
                              $i = $i +1;
                            }
                        ?>
                          
                          <!-- <a href="#">
                              <div class="row">
                                  <div class="col-9">
                                      <div class="mail-content">Alisha menyukai komentar anda</div>
                                  </div>
                                  <div class="col-3">
                                      <span class="float-right text-light">11.08.2018</span>
                                  </div>
                              </div>
                            </a> -->
                        
                     
                      </div>
                    </li>
                    <li> <a class="nav-link text-center" href="index-notif.php">Lihat semua notifikasi </a> </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Profile -->
              <!-- ============================================================== -->
              <?php 
                  if($data['foto'] != ""){
              ?>
              <li class="nav-item dropdown u-pro"> <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/imgs/users/<?php echo $data['foto']?>" alt="user" class="" /></a>
              <?php 
                  }
                  else { 
              ?> 
              <li class="nav-item dropdown u-pro"> <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/imgs/users/no-pic.jpg" alt="user" class="" /></a> 
              <?php 
                  }
              ?>  
              
                <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                  <ul class="dropdown-user">
                    <li class="text-center">
                      <div class="dw-user-box">
                      
                      <?php 
                        if($data['foto'] != ""){
                      ?>
                      <div class="u-img"><img src="assets/imgs/users/<?php echo $data['foto']?>" alt="user"></div>
                      <?php 
                          }
                          else { 
                      ?>
                      <div class="u-img"><img src="assets/imgs/users/no-pic.jpg" alt="user"></div>
                      <?php 
                          }
                      ?>

                        <div class="clearfix"></div>
                        <div class="u-text p-0 pt-3">
                          <h4><?php echo $data['namad']?></h4>
                        </div>
                      </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="index-profil.php"><i class="fas fa-cog mr-1"></i>Pengaturan</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="Logout.php"><i class="fas fa-sign-in-alt mr-1"></i> Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </nav>
    </div>
  </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="container">
      <aside class="left-sidebar">
        <!-- <ul class="nav-bar navbar-inverse">
        <li class="nav-item"> <a class="nav-link navbar-toggler sidebartoggler hidden-sm-down waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> </li>
      </ul> -->
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="clearfix"></li>
              <li> <a class="waves-effect waves-dark" href="index-dashboard.php" aria-expanded="false"><i class="flaticon-desktop-computer-screen-with-rising-graph"></i><span
                    class="hide-menu">Dashboard</span></a>
              </li>
              <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-forms"></i><span
                    class="hide-menu">Materi</span></a>
                <ul aria-expanded="false" class="collapse">
                  <li><a href="index-materi.php#pengenalan">1.Pengenalan</a></li>
                  <li><a href="index-materi.php#atribut">2.Atribut</a></li>
                  <li><a href="index-materi.php#kardinalitas">3.Kardinalitas</a></li>
                  <li><a href="index-materi.php#entitas">4.Entitas</a></li>
                </ul>
              </li>
              <li><a href="index-soal.php"><i class="flaticon-pencil-edit-button"></i><span class="hide-menu">Soal</span></a></li>
              <li><a href="#" class="active"><i class="flaticon-speech"></i><span class="hide-menu">Diskusi</span></a></li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper" id="pengenalan">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row">
            <!-- Column -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-10">
                      <h2 class="weight-500 mt-2" id="atribut">Forum diskusi : Atribut</h2>
                      <h4 class="mb-4">Silahkan berdiskusi mengenai atribut </h4>
                        <div class="form-group">
                          <div class="form-group">
                            <form method="POST" action="submitcomment.php">
                            <input type="text" class="form-control" placeholder="Type your comments . . ." name="comment">
                            <button type="submit" style="float: right; margin-top: 20px; margin-bottom: 20px" class="btn btn-primary">Kirim</button>
                            </form>
                          </div>

                          <?php
                                // echo "<script>alert('$materi')</script>";
                            $querysemua = mysqli_query($conn,"SELECT * FROM `comment` where materi = '$materi'");
                            $hasilsemua =mysqli_num_rows($querysemua);
                          ?>

                          <h3 style="margin-top: 50px; margin-bottom: 20px;"><?php echo $hasilsemua ?> Diskusi</h3> 
                          
                          <!-- menampilkan diskusi dari DB -->
                          <?php 
                            $materi = $_SESSION['materi'];
                            $query = mysqli_query($conn,"SELECT * FROM `comment` where isicomment != ''AND materi = '$materi'");
                            $hasil =mysqli_num_rows($query);
                            if ($hasil == 0) {
                                $_SESSION['idcomment'] = 1;
                            }
                            if ($hasil != 0) {
                              $_SESSION['idcomment'] = 1;
                              while ($data1 = mysqli_fetch_array($query)){
                                  $query2 = mysqli_query($conn,"SELECT * FROM `akun` WHERE `email` = '$data1[email]'");
                                  $data2 = mysqli_fetch_array($query2);
                          ?>

                          
                          <div id="comment">
                            <div class="mainComment mt-5">
                                <div class="float-right">
                                  <a href="submitreply.php?uid=<?php echo $data1['iduser'];?>&emailT=<?php echo $data1['email']; ?>"><i class="far fa-thumbs-up"></i></a>
                                    <span>
                                       +
                                        <!-- menghitung banyaknya like pada tabel notif dengan id yang sesuai -->
                                        <?php 
                                            $user = $data1['iduser'];
                                            $queryreply3 = mysqli_query($conn,"SELECT * FROM `notif` where idsuka = '$user' AND materi = '$materi'");
                                            $hasilreply3 =mysqli_num_rows($queryreply3);
                                            echo $hasilreply3;
                                        ?>
                                        <!-- akhir menghitung banyaknya like pada tabel notif dengan id yang sesuai -->
                                    </span>
                                  <a href="submitreply.php?uidd=<?php echo $data1['iduser'];?>&emailT=<?php echo $data1['email']; ?>"><i style="margin-left: 20px" class="far fa-thumbs-down"></i></a>
                                  <span>
                                        <?php 
                                            $user = $data1['iduser'];
                                            $queryreply3 = mysqli_query($conn,"SELECT * FROM `notif` where idtidak= '$user' AND materi = '$materi'");
                                            $hasilreply3 =mysqli_num_rows($queryreply3);
                                            echo $hasilreply3;
                                        ?>
                                  </span>
                                </div>
                                <div class="d-flex profile">
                                <?php
                                  if($data2['foto'] != ""){
                                ?>
                                    <img id="profileImage" src="assets/imgs/users/<?php echo $data2['foto'] ?>" class="rounded-circle mr-3" width="auto" height="50vh">
                                <?php
                                  }
                                  else{
                                ?>
                                    <img id="profileImage" src="assets/imgs/users/no-pic.jpg" class="rounded-circle mr-3" width="auto" height="50vh">
                                <?php 
                                    } 
                                ?>
                                  <div class="profile-identity">
                                    <h6 id="userImage" class="font-weight-bold mb-0"><?php echo $data2['namad'] ?></h6>
                                    <p id="dateComment" class="font-14">September, 30th 2018</p>
                                  </div>
                                </div>
                                <p class="pt-3 pb-0" id="commentText"><?php echo $data1['isicomment'];?></p>
                                <!-- <a href="#" class="float-right">Balas</a> -->
                                <a onclick="openReply(<?php echo  $_SESSION['idcomment']; ?>)"><button class="btn btn-primary" >Balas</button></a>
                                <div class="row mt-3" id="reply<?php echo  $_SESSION['idcomment']; ?>" style="display:none">
                                  <div class="col-md-12">
                                      <form method="POST" action="submitreply.php">
                                          <input type="hidden" value="<?php echo $data1['iduser']; ?>" name="idcomment"></input>
                                          <input type="hidden" value="<?php echo $data1['email']; ?>" name="email"></input>
                                          <textarea class="form-control" style="resize: vertical" id="comment1" name="comment1" placeholder="Tulis Komentar" ></textarea>
                                          <button class="btn btn-primary mt-2 float-right" onclick="replySubmit()">Kirim</button>
                                      </form>     
                                   </div>  
                                </div>
                              </div>

                             <?php        
                                  $dataa=$data1['iduser'];
                                  $queryreply = mysqli_query($conn,"SELECT * FROM `notif` where iduser = '$dataa' AND materi = '$materi'");
                                  $hasilreply =mysqli_num_rows($queryreply);
                                  if ($hasilreply != 0){
                                    while ($datareply = mysqli_fetch_array($queryreply)){
                                    $queryreply2 = mysqli_query($conn,"SELECT * FROM `akun` WHERE `email` = '$datareply[email]'");
                                    $datareply2 = mysqli_fetch_array($queryreply2);
                              ?>
                              
                              <div class="row justify-content-end">
                                  <div class="col-md-10 mt-5">
                                    <div id="commentReply">
                                      <div class="float-right">
                                        <a href="submitreply.php?uid=<?php echo $datareply['idreply']?>&emailT=<?php echo $datareply['email'];?>"><i class="far fa-thumbs-up"></i></a>
                                        <span>
                                            +
                                            <!-- menghitung banyaknya like pada tabel notif dengan id yang sesuai -->
                                            <?php 
                                                $reply = $datareply['idreply'];
                                                $queryreply3 = mysqli_query($conn,"SELECT * FROM `notif` where idsuka = '$reply'AND materi = '$materi'");
                                                $hasilreply3 =mysqli_num_rows($queryreply3);
                                                echo $hasilreply3;
                                            ?>
                                            <!-- akhir menghitung banyaknya like pada tabel notif dengan id yang sesuai -->
                                        </span>
                                        <a href="submitreply.php?uidd=<?php echo $datareply['idreply']?>&emailT=<?php echo $datareply['email']?>"><i style="margin-left: 20px" class="far fa-thumbs-down"></i></a>
                                        <span>
                                            <?php 
                                                $reply = $datareply['idreply'];
                                                $queryreply3 = mysqli_query($conn,"SELECT * FROM `notif` where idtidak = '$reply' AND materi = '$materi'");
                                                $hasilreply3 =mysqli_num_rows($queryreply3);
                                                echo $hasilreply3;
                                            ?>
                                        </span>
                                      </div>
                                      <div class="d-flex profile">
                                        <?php
                                            if($datareply2['foto'] != ""){
                                        ?>
                                            <img id="profileImage" src="assets/imgs/users/<?php echo $datareply2['foto'] ?>" class="rounded-circle mr-3" width="auto" height="50vh">
                                        <?php
                                            }
                                            else{
                                        ?>
                                            <img id="profileImage" src="assets/imgs/users/no-pic.jpg" class="rounded-circle mr-3" width="auto" height="50vh">
                                        <?php 
                                            } 
                                        ?>
                                        <div class="profile-identity">
                                          <h6 id="userImage" class="font-weight-bold mb-0"><?php echo $datareply2['namad']; ?></h6>
                                          <p id="dateComment" class="font-14">October, 2nd 2018</p>
                                        </div>
                                      </div>
                                      <p class="pt-3 pb-0" id="commentText"><?php echo $datareply['balasan']; ?></p>
                                      <button class="btn btn-primary" onclick="">Balas</button>
                                      <div class="row">
                                        <div class="col-md-12">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <?php 
                                                $_SESSION['idcomment'] =  $_SESSION['idcomment'] + 1;   
                                            }
                                        }
                                        $_SESSION['idcomment'] =  $_SESSION['idcomment'] + 1;
                                    }
                                }
                             
                            ?>
                              <!-- akhir menampilkan diskusi dari DB -->
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
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
  <script>console.log</script>
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
    //Toggling untuk balas komentar user lain
    function openReply(iCom){
      // console.log("reply" + iCom);
      $("#reply"+iCom).toggle();
      $("#comment"+iCom).focus();   
    }
  </script>
  <!-- <script>
var d = new Date();
document.getElementById("demo").innerHTML = d.getDate()+'/'+ (d.getMonth()+1) +'/'+d.getFullYear()
</script> -->
</body>

<!-- Mirrored from mintone.xyz/index-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 03:14:08 GMT -->

</html>
