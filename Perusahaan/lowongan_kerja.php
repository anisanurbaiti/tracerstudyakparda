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
      <h1>Data Lowongan Kerja</h1>
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
                                <h5 class="card-title">Data Lowongan Kerja</h5>
                                <div class="table-responsive">
                                   <a class="btn btn-primary" href="lowongan_kerja_add.php">Tambah</a>
                                     <br>
                                      <br>
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="150%">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Judul Lowongan</th>
                                            <th>Posisi</th>
                                            <th>Batas Lamaran</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>Konfirmasi</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                  <tbody>
                                  <?php 
                                  include "../db/koneksi.php";
                                  $xx=1; 
                                  $id=$_SESSION['useridd'];
                                  $query = mysqli_query($con,"SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan where tb_perusahaan.email_perusahaan='$id'");
                                  while($result = mysqli_fetch_array($query)){
                                  ?>
          <tr>
          <td><?php  echo $xx++ ?></td>
          <td><?php  echo $result['judul'] ?></td>
          <td><?php  echo $result['posisi'] ?></td>
          <td><?php echo date('d-m-Y', strtotime($result["tanggal_berakhir"]));?></td>
          <td><?="<img src='../images/".$result['photos']."'style='width:120px; height:120px;'>"?></td>
          <td><?php
if ($result['status_lowker']=="Aktif") {
echo '<div class ="badge bg-success" > <i class="bi bi-check-circle me-1"></i> Aktif </div>';

}
elseif ($result['status_lowker']=="Expired") {
echo '<div class ="badge bg-danger"> <i class=""bi bi-exclamation-octagon me-1"></i> Expired </div>';
}
?></td>
<td> <a href="ver_active_lowongan.php?id_lowongan=<?php echo $result['id_lowongan'] ?>" class="btn btn-success" onClick= "javascript:return confirm('Aktifkan Lowongan?');">Aktifkan</a>      
            <a href="ver_deactivate_lowongan.php?id_lowongan=<?php echo $result['id_lowongan'] ?>" class="btn btn-danger" onClick= "javascript:return confirm('Tutup Lowongan ?');">Tutup</a>
                     <!--   // form modal update batas lwoongan kerja// -->
            <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal<?php echo $result['id_lowongan']?>"><span class="glyphicon glyphicon-edit"></span>Perpanjang</button></td>
            <?php
            include 'update_user.php';       
            ?> 
          <td> 
          <input type="button" name="view" value="View" data-id="<?php echo $result["id_lowongan"]; ?>" class="btn btn-primary btn-xs view_data">
          <a href="lowongan_kerja_edit.php?id_lowongan=<?php echo $result['id_lowongan']; ?>"  class="btn btn-warning">Ubah</a>
            <a href="lowongan_kerja_delete.php?id_lowongan=<?php echo $result['id_lowongan']; ?>"  class="btn btn-danger" onClick= "javascript:return confirm('Yakin Ingin Menghapus Data ?');">Hapus</a></td>
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
  <div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail Lowongan</h4>  
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
    var id_lowongan = $(this).data("id")
    $.ajax({
      url: "lowongan_kerja_view.php",
      method: "POST",
      data: {id_lowongan: id_lowongan},
      success: function(data){
        $("#detail_user").html(data)
        $("#dataModal").modal('show')
      }
    })
  })
})
</script>
<?php include'footer.php';  ?>
