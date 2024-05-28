<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ALUMNI</title>
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
<?php
session_start();
include '../db/koneksi.php';
if (!isset($_SESSION['id_alumni'])) {
  header('location:../login.php');
}
$VarEmail      = $_SESSION["id_alumni"];
// $VarNim        =$_SESSION["nomor_nim"];
// $VarUsername  =$_SESSION["nama"];
// $Tempatlahir  =$_SESSION["tempat_lahir"];
// $Tanggallahir =$_SESSION["tanggal_lahir"];
// $Jenkel       =$_SESSION["jenis_kelamin"];
// $Agama        =$_SESSION["agama"];
// $Namaortu     =$_SESSION["nama_orangtua"];
// $Alamatortu   =$_SESSION["alamat_orangtua"];
// $Alamatmhs    =$_SESSION["alamat_mahasiswa"];
// $Notelp       =$_SESSION["no_telepon"];
// $JudulTA      =$_SESSION["judul_TA"];
// $Dospem1      =$_SESSION["dosen_pembimbing_1"];
// $Dospem2      =$_SESSION["dosen_pembimbing_1"];
// $TotalSKS     =$_SESSION["total_sks"];
// $TanggalWisuda=$_SESSION["tanggal_wisuda"];
// $Ipk          =$_SESSION["ipk"];

//menampilkan data user yang sedang login
$user = $_SESSION["id_alumni"];
$sql2 = mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rows = mysqli_fetch_array($sql2);
?>

<body>
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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $rows['email']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $rows['nama_lengkap']; ?></h6>
              <span><?php echo $rows['nim']; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profil_alumni.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="ubah_password.php?nim=<?php echo $rows['nim']; ?>">
                <i class="bi bi-person"></i>
                <span>Ganti Password</span>
              </a>
            </li>
            <hr class="dropdown-divider">
        </li>
        <li>
          <?php
          if (isset($_SESSION['id_alumni'])) {
            $kode_cs = $_SESSION['id_alumni'];
            $cek = mysqli_query($con, "SELECT email from tb_alumni where email= '$kode_cs' ");
            $value = mysqli_num_rows($cek);
          ?>
          <?php
          } else {
            echo "
            ";
          }
          if (!isset($_SESSION['id_alumni'])) {
          ?>
          <?php
          } else {
          ?>

            <a class="dropdown-item d-flex align-items-center" href="keluar.php" onclick="return confirm('Yakin ingin Logout ?')">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->
    <?php
          }
    ?>
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
        <a class="nav-link collapsed" href="profil_alumni.php">
          <i class="bi bi-person"></i>
          <span>Profil Alumni</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="lowongan_kerja.php">
          <i class="bi bi-journal-text"></i>
          <span>Info Lowongan Kerja</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="form_kuesioner.php">
          <i class="bi bi-journal-text"></i>
          <span>Formulir Kuesioner</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-heading">Lamaran Pekerjaan</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="riwayat_lamaran.php">
          <i class="bi bi-journal-text"></i>
          <span>Riwayat Berkas Lamaran</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengumuman.php">
          <i class="bi bi-journal-text"></i>
          <span>Pengumuman</span>
        </a>
      </li><!-- End Blank Page Nav -->
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