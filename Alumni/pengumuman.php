<?php
include 'header.php';
?>
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
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Pengumuman Lamaran Kerja</h1>
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
                                <h5 class="card-title">Pengumuman Lamaran Kerja</h5>
                                <div class="table-responsive">
                                      <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" width="110%">
                                        <thead>
                                            <tr>
                                            <th>ID History</th>
                                            <th>ID Berkas</th>
                                            <th>Nama Pelamar</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Metode Interview</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                            include '../db/koneksi.php';
                             $idd=$_SESSION['id_alumni'];
                //tampilkan email alumni
                //menampilkan data berkas riwayat pelamar berdasarkan email alumni
                $email=$rows['email'];
                            $result = mysqli_query($con, "SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_alumni.email='$email'");
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                            <tr>
                            <td><?php echo $row['id_history_lamar'];?></td>
                            <td><?php echo $row['id_berkas'];?></td>
                            <td><?php echo $row['nama_lengkap'];?></td>
                            <td><?php echo $row['nama_perusahaan'];?></td>
                            <td><?php
                            if ($row['metode_interview']=="ONLINE") {
echo '<div class ="badge bg-primary" > <i class="bi bi-star me-1"></i>ONLINE </div>';
}
else if ($row['metode_interview']=="OFFLINE") {
echo '<div class ="badge bg-secondary"> <i class="bi bi-collection me-1"></i> OFFLINE </div>';
}
?></td>
                            <td> 
                                  <input type="button" name="view" value="Lihat" data-id="<?php echo $row["id_history_lamar"]; ?>" class="btn btn-primary btn-xs view_data"></td>
                            </tr>
                            </tr>    
                            <?php }?>
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
  <div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail Pengumuman</h4>  
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
    var id_history_lamar = $(this).data("id")
    $.ajax({
      url: "pengumuman_view.php",
      method: "POST",
      data: {id_history_lamar: id_history_lamar},
      success: function(data){
        $("#detail_user").html(data)
        $("#dataModal").modal('show')
      }
    })
  })
})
</script>

<?php include'footer.php';  ?>