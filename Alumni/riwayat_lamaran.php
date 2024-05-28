<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
      <h1>Riwayat Berkas Lamaran</h1>
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
 <div class="container-fluid">
                <div class="row">
                    <div class="col-12"> 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Riwayat Berkas Lamaran</h5>
                              <div class="table-responsive">
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="110%">
                                        <thead>
                                            <tr>
                                            <th>ID Berkas</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Tanggal Apply</th>
                                            <th>Posisi</th>
                                            <th>Status Berkas</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           <?php 
                include "../db/koneksi.php";
                $idd=$_SESSION['id_alumni'];
                //tampilkan email alumni
                //menampilkan data riwayat pelamar berdasarkan email alumni
                $email=$rows['email'];
                $result = mysqli_query($con,"SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_alumni.email='$email'");
                  while($row = mysqli_fetch_array($result)){
                ?>
                                         <tr>
                                            <td><?php  echo $row['id_berkas'] ?></td>
                                            <td><?php  echo $row['nama_perusahaan'] ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></td>
                                            <td><?php  echo $row['posisi'] ?></td>
                                            <td><?php
if ($row['status_berkas']=="Menunggu") {
echo '<div class ="badge bg-warning text-dark" > <i class="bi bi-exclamation-triangle me-1"></i>Menunggu</div>';

}
else if ($row['status_berkas']=="Di Terima") {
echo '<div class ="badge bg-success"> <i class="bi bi-check-circle me-1"></i>Di Terima </div>';
}
else if ($row['status_berkas']=="Di Tolak") {
echo '<div class ="badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i>Di Tolak</div>';
}
?></td>
                                            <td>
                                            <a href="riwayat_lamaran_view.php?id_berkas=<?php echo $row['id_berkas']; ?>"  class="btn btn-primary">Detail</a>
                                            <a href="datapelamar_delete.php?id_berkas=<?php echo $row['id_berkas']; ?>"  class="btn btn-danger" onClick= "javascript:return confirm('Yakin Ingin Menghapus Data ?');">Hapus</a>
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
