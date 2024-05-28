<?php
include 'header.php';
?>
<?php 
include '../db/koneksi.php';
if(!isset($_SESSION['useridd'])){
  //cek di luar file
  header('location:../login.php');
}
$user=$_SESSION['useridd'];
// $id_perusahaan=$id_per['email_perusahaan'];
$sql=mysqli_query($con, "SELECT * FROM tb_perusahaan where email_perusahaan='$_SESSION[useridd]'");
$VarData=mysqli_fetch_array($sql);
//session induk
$email_perusahaan       =$_SESSION["useridd"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PERUSAHAAN</title>
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
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

   <main id="main" class="main">
   
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Selamat Datang : <?php echo $VarData['nama_perusahaan']; ?></h5>
               <p class="mb-0">Alamat : <?php echo $VarData['alamat']; ?></p>
              <p class="mb-0">Email: <?php echo $VarData['email_perusahaan']; ?></p>
              <p class="mb-0">No Telepon : <?php echo $VarData['telepon']; ?></p> <br> 
              <?php echo $VarData['deskripsi_bidang']; ?><br>
              <br>
               <h5>Tanggal : <?php echo date('d F Y'); ?></h5><br>
            </div>
          </div>
          <div class="row">
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                 <?php       
                   include "../db/koneksi.php";
                   $user=$_SESSION['useridd'];
                   //menampilkan data tb_berkas_pelamar setiap perusahaan 
                   $id_perusahaan=$VarData['email_perusahaan'];
                   $query = "SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_perusahaan.email_perusahaan='$id_perusahaan'";
                    $data =mysqli_query($con, $query);
                    $result=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Data Pelamar</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>   <?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="data_pelamar.php">Lihat Data</a></span>  
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                 <?php       
                   include "../db/koneksi.php";
                   $user=$_SESSION['useridd'];
                   $id_perusahaan=$VarData['email_perusahaan'];
                   $query = "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan where tb_perusahaan.email_perusahaan='$id_perusahaan'";
                    $data =mysqli_query($con, $query);
                    $result=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Data Lowongan Kerja</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>   <?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="lowongan_kerja.php">Lihat Data</a></span>  
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->


        
        
          </div>
        </div><!-- End Left side columns -->
            </div>
          </div><!-- End Budget Report -->
        </div><!-- End Right side columns -->
      </div>
    </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email_perusahaan-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
include 'footer.php';
?>
 