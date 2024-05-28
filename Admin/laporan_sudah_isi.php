
                         <h5 class="card-title">Laporan Data Sudah Mengisi Tracer Study</h5>
                                 <span>Note : *Data Alumni Yang Sudah Mengisi Secara Keseluruhan*</span><br>
 
                          <div class="table-responsive">
               <a href=""  class="btn btn-warning" onClick= "javascript:return confirm('Yakin Ingin Mencetak Data ?');">Print</a>
                <br>
                      <br>
                                    <table id="zero_config" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Isi</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Periode Lulusan</th>
                                                <th>Aksi</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                 <?php       
                   include "../db/koneksi.php";     
                  $query = "SELECT t1.nim,t1.nama_lengkap,t1.email,t1.tanggal_wisuda,t2.tanggal,t2.id_tracer FROM tb_alumni t1 LEFT JOIN tb_tracerstudy t2 ON t1.nim=t2.nim WHERE t2.nim";
                  $result = mysqli_query($con, $query);
                  if(!$result) {
                   die("Data tidak ada");
                   }
                  $rows = mysqli_num_rows($result);
                  if ($rows > 0) {
                    $xx=1; 
                  while ($row = mysqli_fetch_array($result)) { 
                 ?>
        <tr>
        <td><?php  echo $xx++ ?></td>
        <td><?php echo date('d-m-Y', strtotime($row["tanggal"]));?></td>
        <td><?php echo $row['nim'];?></td>
        <td><?php echo $row['nama_lengkap'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo date('d-m-Y', strtotime($row["tanggal_wisuda"]));?></td>
       <td>
                  <input type="button" name="view" value="View" data-id="<?php echo $row["id_tracer"]; ?>" class="btn btn-primary btn-xs view_data">

                    </td>
        </tr>
                    <?php
                     }
                  ?> 
                 
                                         </tbody>
                                       </table>
                                     </div>


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
     <script src="assets/js/main.js"></script>
  <div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail Alumni</h4>  
              </div>  
              <div class="modal-body" id="detail_user">  
              </div>  
              <div class="modal-footer">  
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div>  
         </div>  
    </div>  
</div> 
      <!-- Template Main JS File -->
      <script>
$(document).ready(function(){// menampilkan detail data alumni
  $('.view_data').click(function(){
    var data_id = $(this).data("id")//id detail_user
    $.ajax({
      url: "view_sudah_isi.php",//mengarahkan ke file proses.php
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
<?php
}
?> 
