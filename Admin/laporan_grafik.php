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
      <h1>Laporan Tracer Study AKPARDA Yogyakarta</h1>
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
          <div class="row">

            <div class="col-xxl-6 col-md-12">
              <div class="card info-card sales-card">
                <div class="filter">         
                </div>
                
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <b><h5 class="card-title">Laporan status aktivitas alumni</h5></b> <h6> <a class="btn btn-primary" href="laporan_aktivitasalumni.php">Lihat Grafik Data</a>  </h6>
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
                
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Rata-rata Pendapatan Alumni Per bulan (take home pay)</span></h5> <h6> <a class="btn btn-primary" href="laporan_rataratapendapatan.php">Lihat Grafik Data</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                 
                <div class="card-body">

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Jabatan/Posisi Alumni Dalam Pekerjaan</span></h5> <h6> <a class="btn btn-primary" href="laporan_jabatanalumni.php">Lihat Grafik Data</a>  </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
            <!-- Customers Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Alumni Mendapatkan Informasi Mengenai Adanya Pekerjaan</span></h5> <h6> <a class="btn btn-primary" href="laporan_informasipekerjaan.php">Lihat Grafik Data</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Pertimbangan Utama Alumni Dalam Memilih Pekerjaan Terakhir/sekarang</span></h5> <h6> <a class="btn btn-primary" href="laporan_pertimbanganalumni.php">Lihat Grafik Data</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Jenjang Pendidikan Alumni Yang Melanjutkan Kuliah</span></h5> <h6> <a class="btn btn-primary" href="laporan_jenjangalumni.php">Lihat Grafik Data</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Penilaian Kompetensi Tracer Study</span></h5> <h6> <a class="btn btn-primary" href="laporan_kompetensialumni.php">Lihat Grafik Data</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
             <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h5 class="card-title">Laporan Alasan Utama Alumni Melanjutkan Kuliah</span></h5> <h6> <a class="btn btn-primary" href="laporan_alasanalumni.php">Lihat Grafik Data</a></h6>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script> 
</body>
</html>
<?php include'footer.php';  ?>
