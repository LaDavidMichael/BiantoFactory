<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:index.php');
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/ico" />

    <title> Halaman Admin </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;" style="padding: 25px;">
              <center>
                &nbsp; <a href="dashboard.php" style="margin-left: 10px;"><img src="../assets/images/produkbiantofix3.png" height="40" width="40" alt=""><span>
                    <font size="4" color="white" face="arial"> Halaman Admin</font>
                  </span></a>
              </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->

            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">

                  <li class="">
                    <a href="dashboard.php?">
                      <i class="fa fa-home" aria-hidden="true"></i> Beranda
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                  <li class="">
                    <a href="dashboard.php?page=tampilartikel">
                      <i class="fa fa-newspaper-o" aria-hidden="true"></i> Artikel
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>


                  <li class="">
                    <a href="dashboard.php?page=tampilvisi">
                      <i class="fa fa-file-o" aria-hidden="true"></i>Visi
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>


                  <li class="">
                    <a href="dashboard.php?page=tampilmisi">
                      <i class="fa fa-file-o" aria-hidden="true"></i> Misi
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                  <li class="">
                    <a href="dashboard.php?page=tampilprofil">
                      <i class="fa fa-id-card-o" aria-hidden="true"></i> Profil
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                  <li class="">
                    <a href="dashboard.php?page=tampiltim">
                      <i class="fa fa-users" aria-hidden="true"></i> Tim
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                  <li class="">
                    <a href="dashboard.php?page=tampilkontak">
                      <i class="fa fa-info-circle" aria-hidden="true"></i> Kontak
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                  <li class="">
                    <a href="dashboard.php?page=tampiltesti">
                      <i class="fa fa-comments-o"></i> Testimoni
                      <span class="fa fa-chevron"></span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open">
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/logo.png" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="includes/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
          <?php
          $queries = array();
          parse_str($_SERVER['QUERY_STRING'], $queries);
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          switch ($queries['page']) {

              // CRUD-Artikel
            case 'tampilartikel':
              include 'crutartikel/tampil.php';
              break;
            case 'tambahartikel':
              include 'crutartikel/tambah.php';
              break;
            case 'editartikel':
              include 'crutartikel/edit.php';
              break;

              // CRUD-Visi
            case 'tampilvisi':
              include 'CRUD-Visi/tampil.php';
              break;
            case 'tambahvisi':
              include 'CRUD-Visi/tambah.php';
              break;
            case 'editvisi':
              include 'CRUD-Visi/edit.php';
              break;

              // CRUD-Misi
            case 'tampilmisi':
              include 'CRUD-Misi/tampil.php';
              break;
            case 'tambahmisi':
              include 'CRUD-Misi/tambah.php';
              break;
            case 'editmisi':
              include 'CRUD-Misi/edit.php';
              break;

              // CRUD-Profil
            case 'tampilprofil':
              include 'CRUD-Profil/tampil.php';
              break;
            case 'tambahprofil':
              include 'CRUD-Profil/tambah.php';
              break;
            case 'editprofil':
              include 'CRUD-Profil/edit.php';
              break;

              // CRUD-Tim
            case 'tampiltim':
              include 'CRUD-Tim/tampil.php';
              break;
            case 'tambahtim':
              include 'CRUD-Tim/tambah.php';
              break;
            case 'edittim':
              include 'CRUD-Tim/edit.php';
              break;

              // CRUD-Kontak
            case 'tampilkontak':
              include 'CRUD-Kontak/tampil.php';
              break;
            case 'tambahkontak':
              include 'CRUD-Kontak/tambah.php';
              break;
            case 'editkontak':
              include 'CRUD-Kontak/edit.php';
              break;

              // CRUD-Testimoni
            case 'tampiltesti':
              include 'cruttesti/tampil.php';
              break;
            case 'tambahtesti':
              include 'cruttesti/tambah.php';
              break;
            case 'edittesti':
              include 'cruttesti/edit.php';
              break;

            default:
              include 'home.php';
              break;
          }
          ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2020 CV Bianto Factory
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>

  </html>



<?php } ?>