<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRACER STUDY AKPARDA</title>
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
     <section class="section">
  <?php 
include '../db/koneksi.php';
if(!isset($_SESSION['id_alumni'])){
  header('location:../login.php');
}
$VarEmail      =$_SESSION["id_alumni"];
//menampilkan data user yang sedang login
$user=$_SESSION["id_alumni"];
$sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rows=mysqli_fetch_array($sql2);
//tampilkan email alumni
$email=$rows['email'];
?>


 
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">  
               <h5 class="card-title">Hallo : <?php echo $rows['nama_lengkap'] ?></h5>
              <h5 class="card-title">***Selamat Datang di Sistem Informasi Tracer Study Alumni D3 Perhotelan AKPARDA Yogyakarta***</h5>
                <span>Alamat : Jalan Bintaran Kidul No.12 Wirogunan, Mergangsan, Kota Yogyakarta. Telepon (0274) 376830. </span><br>
                <h5>Tanggal : <?php echo date('d-F-y'); ?></h5><br>
         </form>     
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section dashboard">
      <div class="row">
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card sales-card">
                <div class="filter">         
                </div>
              <?php       
                  include "../db/koneksi.php";
                  $user=$_SESSION["id_alumni"];
                  //tampilkan email alumni
                //menampilkan data riwayat pelamar berdasarkan email alumni
                  $email=$rows['email'];
                  $query = "SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_alumni.email='$email'";
                  $data =mysqli_query($con, $query);
                  $result=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Riwayat Lamaran</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                   
                    <div class="ps-3">             
                        <h6>   <?php echo '<p>'.$result.' Data </p>'?></h6>
                        <span class="text-success large pt-1 fw-bold"><a href="riwayat_lamaran.php">Lihat Data</a></span>                 
                    </div>
                  </div>

                </div>
              </div>

            
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card revenue-card">
                <div class="filter">
                </div>
                 <?php       
                  include "../db/koneksi.php";
                  $user=$_SESSION["id_alumni"];
                  //tampilkan email alumni
                //menampilkan data riwayat pelamar berdasarkan email alumni
                  $email=$rows['email'];
                  $query = "SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_alumni.email='$email'";
                  $data =mysqli_query($con, $query);
                  $result=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Pengumuman Lamaran Kerja</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h6>   <?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="pengumuman.php">Lihat Data</a></span> 
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- End Revenue Card -->
              <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card revenue-card">
                <div class="filter">
                </div>
                
                <div class="card-body">
                  <h5 class="card-title">Tata Cara Melamar Kerja</span></h5>
                  <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">1.</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Pilih Menu Info Lowongan Kerja kemudian Lihat Lowongan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2. </div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Klik Lihat Lowongan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">3.</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                   Lamar Sekarang
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4.</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                   Unggah Berkas dan dokumen lamaran
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">5.</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                   Menunggu status lamaran
                  </div>
                </div><!-- End activity item-->
                 <div class="activity-item d-flex">
                  <div class="activite-label">6.</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Lihat Pengumuman Berkas Di Terima
                  </div>
                </div><!-- End activity item-->
                </div>
                </div>
              </div>


            </div><!-- End Revenue Card -->
              <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card revenue-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Tata Cara Mengisi Kuesioner</span></h5>
                  <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">1.</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Pilih Menu Formulir Kuesioner
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2. </div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Isi Kuesioner Sesuai Status Alumni
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">3.</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                   Klik Simpan
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4.</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                   Kuesioner Berhasil Di Isi
                  </div>
                </div><!-- End activity item-->
                </div>
              </div>
            </div><!-- End Revenue Card -->
            
                  </div>
                </div>
              </div> 
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
include 'footer.php';
?>

 