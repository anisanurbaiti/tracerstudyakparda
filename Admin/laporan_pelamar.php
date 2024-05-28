<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>  
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
      <h1>Laporan Data Pelamar Kerja</h1>
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
                                <h5 class="card-title">Laporan Data Pelamar Kerja</h5>
                 <a href="cetak_pelamar.php"  class="btn btn-warning" onClick= "javascript:return confirm('Yakin Ingin Mencetak Data ?');">Print</a>
                <a href="export_pelamar.php"  class="btn btn-success" onClick= "javascript:return confirm('Yakin Ingin Mengekspor Data ?');">Excel</a>
                <br>
                <br>
                              <div class="table-responsive">
                                  <br>
                                      <br>
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="180%">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tanggal Wisuda</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Posisi Lowongan</th>
                                            <th>Tanggal Lamar</th>
                                            <th>Status Berkas Lamaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                include "../db/koneksi.php";
                $xx=1; 
                $query = mysqli_query($con,"SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan");
                  while($row = mysqli_fetch_array($query)){
                ?>
                                         <tr>
                                            <td><?php  echo $xx++; ?></td>
                                            <td><?php  echo $row['nim']; ?></td>
                                            <td><?php  echo $row['nama_lengkap']; ?></td>
                                              <td><?php echo date('d-m-Y', strtotime($row["tanggal_wisuda"]));?></td>
                                            <td><?php  echo $row['nama_perusahaan']; ?></td>
                                            <td><?php  echo $row['posisi']; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></td>
                                            <td><?php  echo $row['status_berkas']; ?></td>
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
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>         
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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
  <script src="assets/js/main.js"></script>
</body>

</html>
<?php include'footer.php';  ?>
