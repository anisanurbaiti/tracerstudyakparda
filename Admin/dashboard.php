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
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">  
              <?php 
              include "../db/koneksi.php";
              if(!isset($_SESSION['username'])){
              header('location:index.php');
              }
              $VarUsername=$_SESSION["username"];
              ?>
               <h5 class="card-title"><b>Hallo Selamat Datang :</b> <?php echo $VarUsername; ?></h5>
              <h5 class="card-title">***Selamat Datang di Sistem Informasi Tracer Study Alumni D3 Perhotelan AKPARDA Yogyakarta***</h5>
                <span>Alamat : Jalan Bintaran Kidul No.12 Wirogunan, Mergangsan, Kota Yogyakarta. Telepon (0274) 376830. </span><br>
                <h5>Tanggal :<?php echo date('d-F-y'); ?></h5><br>
         </form>     
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <section class="section">
      <div class="row">
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Laporan Kuesioner Tracer Study</h5>
                <thead>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah</th>
                  </tr>
                </thead>
                  <?php 
     include "../db/koneksi.php";  
     //menampilkan total alumni yg sudah mengisi
    $query1 = mysqli_query($con,"SELECT id_tracer, COUNT(*) AS Total_isi FROM tb_tracerstudy order by id_tracer");
    while($VarData = mysqli_fetch_array($query1)){
      ?>

       <?php 
     include "../db/koneksi.php";  
     //menampilkan total alumni yg belum mengisi
    $query1 = mysqli_query($con,"SELECT t1.nim,t1.nama_lengkap,t1.tanggal_wisuda, COUNT(*) AS Totalnya FROM tb_alumni t1 LEFT JOIN tb_tracerstudy t2 ON t1.nim=t2.nim WHERE t2.nim IS NULL");
    while($VarData2 = mysqli_fetch_array($query1)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Data Alumni Yang Sudah Mengisi</td> 
                  <td><?php echo $VarData['Total_isi']; ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td>Data Alumni Yang Belum Mengisi</td> 
                  <td><?php echo $VarData2['Totalnya']; ?> </td>
                </tr> 
                
<?php
}
?> 
<?php
}
?> 
              </tbody>
               <?php 
     include "../db/koneksi.php";  
     //menampilkan total alumni yg belum mengisi
    $total = mysqli_query($con,"SELECT nim, count(*) as Total from tb_alumni order by nim");
    while($totalnya = mysqli_fetch_array($total)){
      ?>
              <tr>
                <th colspan="1"> Total Alumni</th>
                <th></th>
                 <th><?php echo $totalnya['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table> 
            </thead>
            </div>                     
          </div>   
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Laporan Kuesioner Tracer Study</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Data Alumni Yang Sudah Mengisi', 
                      'Data Alumni Yang Belum Mengisi'], 
                      datasets: [{
                        label: '',
                        data: [
  <?php 
     include "../db/koneksi.php";  
     //menampilkan total alumni yg sudah mengisi
    $queryy = mysqli_query($con,"SELECT id_tracer, COUNT(*) AS Totalisi FROM tb_tracerstudy order by id_tracer");
    while($VarDataa = mysqli_fetch_array($queryy)){
      ?> <?php echo $VarDataa['Totalisi']; ?>,
 <?php 
     include "../db/koneksi.php";  
     //menampilkan total alumni yg sudah mengisi
    $queryy1 = mysqli_query($con,"SELECT t1.nim,t1.nama_lengkap,t1.tanggal_wisuda, COUNT(*) AS Totalnya FROM tb_alumni t1 LEFT JOIN tb_tracerstudy t2 ON t1.nim=t2.nim WHERE t2.nim IS NULL");
    while($VarDataa2 = mysqli_fetch_array($queryy1)){
      ?> <?php echo $VarDataa2['Totalnya']; ?>],

                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(75, 192, 192)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>
        <?php
}
?>
 <?php
}
?>
      </div>
    </section>
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
      

            <div class="col-xxl-6 col-md-12">
              <div class="card info-card sales-card">
                <div class="filter">         
                </div>
                 <?php       
                   include "../db/koneksi.php";
                    $query = "SELECT * FROM tb_alumni";
                  $data =mysqli_query($con, $query);
                  $result=mysqli_num_rows($data);
                ?>
                <div class="card-body">
                  <h5 class="card-title">Data Alumni</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h6><?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="data_alumni.php">Lihat Data</a></span> 
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
                    $query = "SELECT * FROM tb_berita";
                  $data =mysqli_query($con, $query);
                  $result=mysqli_num_rows($data);
                ?>
                <div class="card-body">
                  <h5 class="card-title">Data Berita</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h6><?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="data_berita.php">Lihat Data</a></span> 
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card customers-card">
                <div class="filter">
                </div>
                  <?php       
                   include "../db/koneksi.php";
                    $query = "SELECT * FROM tb_tracerstudy";
                    $data =mysqli_query($con, $query);
                    $result=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Data Hasil Kuesioner</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                     <div class="ps-3">
                       <h6><?php echo '<p>'.$result.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="hasil_kuesioner.php">Lihat Data</a></span> 
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
                 <?php       
                   include "../db/koneksi.php"; 
                    $query = "SELECT * FROM tb_perusahaan";
                    $data =mysqli_query($con, $query);
                    $resultt=mysqli_num_rows($data);
                ?>
                <div class="card-body">
                  <h5 class="card-title">Data Perusahaan</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h6> <?php echo '<p>'.$resultt.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="data_perusahaan.php">Lihat Data</a></span> 
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
                 <?php       
                    include "../db/koneksi.php";
                    $query = "SELECT * FROM tb_lowongan";
                    $data =mysqli_query($con, $query);
                    $resultt=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Data Lowongan Kerja</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                       <h6> <?php echo '<p>'.$resultt.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="data_lowker.php">Lihat Data</a></span> 
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
                 <?php       
                    include "../db/koneksi.php";
                    $query = "SELECT * FROM tb_history_lamar";
                    $data =mysqli_query($con, $query);
                    $resultt=mysqli_num_rows($data);
                  ?>
                <div class="card-body">
                  <h5 class="card-title">Data Pelamar Kerja</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                     <div class="ps-3">
                       <h6><?php echo '<p>'.$resultt.' Data </p>'?></h6>
                      <span class="text-success large pt-1 fw-bold"><a href="laporan_pelamar.php">Lihat Data</a></span> 
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
<?php
include 'footer.php';
?>
 