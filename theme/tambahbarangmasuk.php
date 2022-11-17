<?php
//including the database connection file
include_once("config.php");

session_start();
$nama = $_SESSION['uplink'];
$id = $_SESSION['id'];
$level = $_SESSION['level'];
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Arasi Fashion</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatable-extension.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">

              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="logout.php"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
              <h6 class="mt-3 f-14 f-w-600">Gudang Arasi Fashion</h6></a>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="index.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                    <h6>Data Barang</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="databarangmasuk.php"><i data-feather="package"></i><span>Data Barang Masuk</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="databarangkeluar.php"><i data-feather="package"></i><span>Data Barang Keluar</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="datainventory.php"><i data-feather="package"></i><span>Data Inventory</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="datasupplier.php"><i data-feather="package"></i><span>Data Supplier</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <?php
                        if($level == 'admin'){
                            ?> 
                            <h6>Admin</h6>
                            </div>
                          </li>
                          <li class="dropdown"><a class="nav-link menu-title link-nav" href="dataadmin.php"><i data-feather="users"></i><span>Data Admin</span></a></li>
                          <li class="dropdown"><a class="nav-link menu-title link-nav" href="tambahdataadmin.php"><i data-feather="users"></i><span>Tambah Admin</span></a></li>
                      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                          <?php
                        }
                        ?>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Tambah Barang Masuk</h5>
                      </div>
                      <div class="card-body">
                        <form action="tambahbarangmasuk().php" method="POST">
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="kdbrg">Kode Barang</label>
                            <input class="form-control" name="kdbrg" type="text" placeholder="Masukkan Kode Barang">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="nama">Nama Barang</label>
                            <input class="form-control" name="nama" type="text" placeholder="Masukkan Nama Barang">
                          </div>
                          <div class="mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                              <input class="form-control digits" name="tanggalmasuk" type="date" value="2022-01-19T18:45:00">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="lokasi">Lokasi Penyimpanan</label>
                            <input class="form-control" name="lokasi" type="lokasi" placeholder="Masukkan Lokasi Penyimpanan">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="pass">Jumlah</label>
                            <input class="form-control" name="jumlah" type="jumlah" placeholder="Masukkan Jumlah (Yard)">
                          </div>
                          <div class="mb-3">
                              <label class="col-form-label pt-0" for="nama">Kode Supplier</label>
                              <select class="form-select digits" id="kdsupp" name="kdsupp">
                                <?php
                                    $result = mysqli_query($mysqli, "SELECT kdsupp FROM datasupplier");
                                    $i = 0;
                                    while($res = mysqli_fetch_array($result)) {	
                                        echo "<option>".$res['kdsupp']."</option>";
                                    }
                                ?>
                             </select>
                            </div>
                          <button class="btn btn-primary" name="submit">Submit</button>
                          <button class="btn btn-secondary" name="reset">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>