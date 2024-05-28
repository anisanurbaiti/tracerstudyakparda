<?php 
session_start();
include "db/koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TRACER STUDY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
  <body>
  <!-- Navigation -->
   <?php include 'header.php';?>
    <!-- Page Content -->
    <main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
<div class="container">
<h2>Berita Dan Informasi</h2>
    </div>
    </div><!-- End Breadcrumbs -->
    <!-- Page Content -->
    <div class="container" data-aos="fade-up">
    <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
        <?php
$pid=intval($_GET['id_berita']);
$query=mysqli_query($con,"select * from tb_berita where id_berita='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>
          <div class="card mb-4">
            <img class="card-img-top" src="images/<?php echo htmlentities($row['photo']);?>" alt="<?php echo htmlentities($row['judul_berita']);?>">    
            <div class="card-body">
              <h2 class="card-title"><?php echo $row ['judul_berita']; ?></h2>
              <p class="fs-5 mb-4"><p><?php echo $row['isi_berita'];?></p></h2>       
              <a href="news.php" class="btn btn-primary"> Kembali </a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo date('d F Y', strtotime($row["tanggal"]));?>          
            </div>
          </div>
<?php } ?>   
</div>
  <!-- Sidebar Widgets Column -->  <?php include('includes/sidebar.php');?>     
</div>
</div>
</main>
 <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
           AKPARDA Yogyakarta <strong></strong>. 2023
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">AKPARDA Yogyakarta</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
</body>
</html>
