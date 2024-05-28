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
$VarData=mysqli_fetch_array($sql);
//session induk
$email_perusahaan=$_SESSION["useridd"];

//tampilkan email perusahaan
$email=$VarData['email_perusahaan'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
      <h1>Data History Berkas Di Terima</h1>
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
                                <h5 class="card-title">Data History Berkas Di Terima</h5>
                                <div class="table-responsive">
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="150%">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tanggal Apply</th>
                                            <th>Status Berkas</th>
                                            <th>Metode Interview</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal Interview</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                include "../db/koneksi.php";
                $xx=1; 
                //query tampil tb_history pelamar diterima
                $email=$VarData['email_perusahaan'];
                $query = mysqli_query($con,"SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_perusahaan.email_perusahaan='$email'");
                  while($row = mysqli_fetch_array($query)){
    
                ?>
                                        <tr>
                                            <td><?php  echo $row['id_history_lamar']; ?></td>
                                            <td><?php  echo $row['nama_lengkap']; ?></td>
                                           <td><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></td>
                                            <td><?php
                                            if ($row['status_berkas']=="Di Terima") {
echo '<div class ="badge bg-success" > <i class="bi bi-check-circle me-1"></i> Di Terima </div>';

}

else if ($row['status_berkas']=="Di Tolak") {
echo '<div class ="badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i> Di Tolak </div>';
}
?></td>
                                            <td><?php
                                            if ($row['metode_interview']=="ONLINE") {
echo '<div class ="badge bg-primary" > <i class="bi bi-star me-1"></i>ONLINE </div>';

}

else if ($row['metode_interview']=="OFFLINE") {
echo '<div class ="badge bg-secondary"> <i class="bi bi-collection me-1"></i> OFFLINE </div>';
}
?></td>
                  <td><?php  echo $row['keterangan']; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($row["tanggal_interview"]));?></td>
                  <td><a href="data_history_delete.php?id_history_lamar=<?php echo $row['id_history_lamar']; ?>"  class="btn btn-danger" onClick= "javascript:return confirm('Yakin Ingin Menghapus Data ?');">Hapus</a>
                  <input type="button" name="view" value="View" data-id="<?php echo $row["id_history_lamar"]; ?>" class="btn btn-primary btn-xs view_data">
                  </td>
                  </tr>
                </tbody>
                   <?php
                     }
                  ?> 
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
  <div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail Pelamar DiTerima</h4>  
              </div>  
              <div class="modal-body" id="detail_user">  
              </div>  
              <div class="modal-footer">  
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div>  
         </div>  
    </div>  
</div> 

<script>
$(document).ready(function(){
  $('.view_data').click(function(){
    var data_id = $(this).data("id")
    $.ajax({
      url: "pelamar_diterima_view.php",
      method: "POST",
      data: {data_id: data_id},
      success: function(data){
        $("#detail_user").html(data)
        $("#dataModal").modal('show')
      }
    })
  })
})
</script>

</body>

</html>
<?php include'footer.php';  ?>
