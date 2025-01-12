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
<h2>Berita DAN INFORMASI</h2>
    </div>
    </div><!-- End Breadcrumbs -->
    <!-- Page Content -->
    <div class="container" data-aos="fade-up">    
      <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <!-- Blog Post -->
<?php 
        if($_POST['searchtitle']!=''){
$st=$_SESSION['searchtitle']=$_POST['searchtitle'];
}
$st;            
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM tb_berita order by id_berita desc";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
$query=mysqli_query($con,"SELECT * FROM tb_berita where judul_berita like '%$st%' LIMIT $offset, $no_of_records_per_page");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {
?>
          <div class="card mb-4">
            <img class="card-img-top" src="images/<?php echo htmlentities($row['photo']);?>" alt="<?php echo htmlentities($row['judul_berita']);?>">      
            <div class="card-body"> 
               <h2 class="card-title"><?php echo $row ['judul_berita']; ?></h2>
              <p class="fs-5 mb-4"><p><?php echo $row['isi_berita'];?></p></h2>     
              <a href="news-details.php?id_berita=<?php echo htmlentities($row['id_berita'])?>" class="btn btn-primary">Selengkapnya &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo date('d F Y', strtotime($row["tanggal"]));?>          
            </div>
          </div>
<?php } ?>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
</head>
</body>
</html>
