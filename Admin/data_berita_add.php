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
      <h1>Data Berita</h1>
       <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
     
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Berita</h5> 
                <form action="data_berita_save.php" method="post" enctype="multipart/form-data" class="row g-3">
      <div class="form-group">
        <label>Judul Berita</label>
        <input type="text" class="form-control" name="judul_berita">
      </div>
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" name="isi_berita" id="editor"  rows="10"></textarea>
      </div>
       <div class="col-md-6">
            <label for="inputCity" class="form-label">Photo</label>
              <input class="form-control" type="file" id="formFile" name="photo">
              </div>
              <div class="col-md-3">
              <label for="inputCity" class="form-label">Tanggal Buat</label>
                <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                </div>
                 <div class="form-group">
                <?php
                //menampilkan user yang sedang login
    include "../db/koneksi.php";
    $tampil    =mysqli_query($con, "SELECT * FROM tb_admin WHERE username='$_SESSION[username]'");
    $rows   =mysqli_fetch_array($tampil);
    ?>     
                  <input class="form-control" type="text" id="kd_desa" name="id_admin" value="<?php echo $rows['id_admin']; ?>" hidden>
                    </div>
      <br>
       <div class="col-sm-10">
        <input type="submit" name="save" class="btn btn-primary" value="Simpan">
        <input type="submit" name="batal" class="btn btn-danger" value="Batal">
      </div>
    </form>
    <hr>
   <hr>
  </div>
  </div>
  </div> 
  </section>
  </main><!-- End #main -->
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/ckeditor.js"></script>
  <script src="assets/js/script.js"></script>

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
<?php include 'footer.php';  ?>