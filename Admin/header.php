<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRACER STUDY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<?php 
session_start();
include '../db/koneksi.php';
if(!isset($_SESSION['username'])){
header('location:index.php');
}
//menampilkan data user yang sedang login
 $VarUsername=$_SESSION["username"];
 $sql2=mysqli_query($con, "SELECT * FROM tb_admin where username='$_SESSION[username]'");
 $rows=mysqli_fetch_array($sql2);
 $id_admin=$rows['id_admin'];
 $email=$rows['email'];
 $nama=$rows['nama_lengkap'];
?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
         <h1 class="logo me-auto"><img src="../images/iconlog.png" alt="" class="img-fluid" width="250px;" height="80px;"></h1>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $VarUsername; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $VarUsername; ?></h6>
              <span><?php echo $rows['email']; ?></span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="data_admin.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="ubah_password.php?id_admin=<?php echo$rows['id_admin']; ?>">
                <i class="bi bi-person"></i>
                <span>Ganti Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
                <?php  if (isset($_SESSION["username"])):?>
              <a class="dropdown-item d-flex align-items-center" href="logout.php" onclick="return confirm('Yakin ingin Logout ?')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
            <?php else: ?>
                <li><a href="index.php">Login</a></li>
            <?php endif ?>
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Master Data</li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="data_berita.php">
          <i class="bi bi-journal-text"></i>
          <span>Data Berita</span>
        </a>
      </li><!-- End Blank Page Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="data_alumni.php">
          <i class="bi bi-person"></i>
          <span>Data Alumni </span>
        </a>
      </li><!-- End Blank Page Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="data_perusahaan.php">
          <i class="bi bi-journal-text"></i>
          <span>Data Perusahaan</span>
        </a>
      </li><!-- End Blank Page Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="data_lowker.php">
          <i class="bi bi-journal-text"></i>
          <span>Data Lowongan</span>
        </a>
      </li><!-- End Blank Page Nav -->
     <li class="nav-heading">Kuesioner Tracer Study</li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="hasil_kuesioner.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Hasil Kuesioner</span>
        </a>
      </li><!-- End Profile Page Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Rekap Data Kuesioner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="rekap_bekerja.php">
              <i class="bi bi-circle"></i><span>Rekapitulasi Bekerja</span>
            </a>
          </li>
          <li>
            <a href="rekap_kuliah.php">
              <i class="bi bi-circle"></i><span>Rekapitulasi Lanjut Kuliah</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <li class="nav-heading">Laporan Tracer Study</li>
      </li><!-- End Profile Page Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="laporan_tracer.php">
          <i class="bi bi-journal-text"></i>
          <span>Data Laporan Tracer Study</span>
        </a>
      </li><!-- End Profile Page Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="laporan_new.php">
          <i class="bi bi-bar-chart"></i>
          <span>Laporan Grafik</span>
        </a>

      </li><!-- End Profile Page Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="laporan_pelamar.php">
          <i class="bi bi-bar-chart"></i>
          <span>Laporan Data Pelamar</span>
        </a>

      </li><!-- End Profile Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>