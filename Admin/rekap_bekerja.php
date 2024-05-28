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
   <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<script type="text/javascript">
  $(document).ready(function() {
var table = $('#zero_config').DataTable( {
scrollY: "300px",
scrollX: true,
scrollCollapse: true

} );
} );
</script>
<body>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Rekapitulasi Kuesioner Tracer Study</h1>
       <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 <section class="section">
 <div class="container-fluid">
                <div class="row">
                    <div class="col-12"> 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Alumni Yang Bekerja </h5>
                                <div class="table-responsive">
               <a href="cetak_alumniyangsudahkerja.php"  class="btn btn-warning" onClick= "javascript:return confirm('Yakin Ingin Mencetak Data ?');">Print</a>
                <a href="export_rekapbekerja.php"  class="btn btn-success" onClick= "javascript:return confirm('Yakin Ingin Mengekspor Data ?');">Excel</a>
                <br>
                  <br>
                        <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="400%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nim</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tanggal Wisuda</th>
                                                <th>Tempat Kerja</th>
                                                <th>Posisi Pekerjaan</th>
                                                <th>Tanggal Bekerja</th>
                                                <th>Informasi Mendapat Pekerjaan</th>
                                                <th>P6</th>
                                                <th>P7</th>
                                                <th>P8</th>
                                                <th>P9</th>
                                                <th>P10</th>
                                                <th>P11</th>
                                                <th>Jarak Waktu Kelulusan Hingga Mendapat Pekerjaan Pertama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php 
    include "../db/koneksi.php";
    $no = 1;
    $data = mysqli_query($con,"SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE P1='Bekerja'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo date('d-m-Y', strtotime($d["tanggal_wisuda"]));?></td>
        <td><?php echo $d['P2']; ?></td>
        <td><?php echo $d['P3']; ?></td>
        <td><?php echo date('d-m-Y', strtotime($d["P4"]));?></td>
        <td><?php echo $d['P5']; ?></td>
        <td><?php echo $d['P6']; ?></td>
        <td><?php echo $d['P7']; ?></td>
        <td><?php echo date('d-m-Y', strtotime($d["P8"]));?></td>
        <td><?php echo date('d-m-Y', strtotime($d["P9"]));?></td>
        <td><?php echo $d['P10']; ?></td>
        <td><?php echo $d['P11']; ?></td>
        <td> <?php
                  //MENGHITUNG JARAK HARI TGL WISUDA HINGGA MENDAPAT PEKERJAAN PERTAMA
                   $date1 = strtotime($d["tanggal_wisuda"]);
                   $date2 = strtotime($d["P4"]);
                   $diff = $date2 - $date1;
                   $days = floor($diff / (60 * 60 * 24));
                   echo $days;
                  ?> <label><b>Hari</b></label></td>
        </tr>
                    <?php
                     }
                  ?> 
                 
                                           </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
   <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
      <!-- Template Main JS File -->
</body>
</html>
<?php include'footer.php';  ?>
