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
$sql=mysqli_query($con, "SELECT * FROM tb_perusahaan where email_perusahaan='$_SESSION[useridd]'");
$result=mysqli_fetch_array($sql);
//session induk
$email_perusahaan=$_SESSION["useridd"];

//tampilkan email perusahaan
$email=$result['email_perusahaan'];
?>
   <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
var table = $('#zero_config').DataTable( {
scrollY: "300px",
scrollX: true,
scrollCollapse: true

} );
} );
</script>

 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Pelamar Kerja</h1>
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
                                <h5 class="card-title">Data Pelamar Kerja</h5>
                                <div class="table-responsive">
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="150%">
                                        <thead>
                                            <tr>
                                            <th>ID Berkas </th>
                                            <th>Nama Pelamar</th>
                                            <th>Posisi Lowongan</th>
                                            <th>Tanggal Lamar</th>
                                            <th>Status Berkas</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                <?php 
                include "../db/koneksi.php";
                $xx=1;
                $id=$_SESSION['useridd']; 
                //tampilkan email perusahaan
                $email=$result['email_perusahaan'];
                $query = mysqli_query($con,"SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_perusahaan.email_perusahaan='$email'");
                  while($row = mysqli_fetch_array($query)){
                $ktp         =$row['ktp'];
                $ijazah      =$row['ijazah'];
                $transkip    =$row['transkip'];
                $cv          =$row['CV'];
                $surat       =$row['surat_OJT'];
                $resume      =$row['resume'];
              ?>
                <tr>
                <td><?php  echo $row['id_berkas']; ?></td>
                <td><?php  echo $row['nama_lengkap']; ?></td>
                <td><?php  echo $row['posisi']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></td>
                <td><?php
if ($row['status_berkas']=="Menunggu") {
echo '<div class ="badge bg-warning text-dark" > <i class="bi bi-exclamation-triangle me-1"></i> Menunggu </div>';

}
else if ($row['status_berkas']=="Di Terima") {
echo '<div class ="badge bg-success"> <i class="bi bi-check-circle me-1"></i>Di Terima </div>';
}
else if ($row['status_berkas']=="Di Tolak") {
echo '<div class ="badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i>Di Tolak</div>';
}
?>
</td>
                <td>
                <a href="data_pelamar_delete.php?id_berkas=<?php echo $row['id_berkas']; ?>"  class="btn btn-danger" onClick= "javascript:return confirm('Yakin Ingin Menghapus Data ?');">Hapus</a>
                 <?php  
                 if($row ['status_berkas']=="Menunggu")  
                        echo 
"<a href=#=".$row ['id_berkas']." class='btn btn-secondary'>Disable</a>";
                    else if($row ['status_berkas']=="Menunggu")  
                        echo 
"<a href=#=".$row ['id_berkas']." class='btn btn-secondary'>Disable</a>"; 
else if ($row['status_berkas']=="Di Tolak") 
echo "<a href=#=".$row ['id_berkas']." class='btn btn-secondary'>Disable</a>";
                    else 
                        echo 
"<a href=buat_pengumuman.php?id_berkas=".$row['id_berkas']." class='btn btn-primary'>Buat Pengumuman</a>"; 
                    ?>
                <a href="data_pelamar_view.php?id_berkas=<?php echo $row['id_berkas']; ?>" class="btn btn-success">Lihat dan Proses</a>
                  </td>
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
  <script src="assets/vendor/php-email_perusahaan-form/validate.js"></script>

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
  <script src="assets/vendor/php-email_perusahaan-form/validate.js"></script>

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
<?php include'footer.php';  ?>
