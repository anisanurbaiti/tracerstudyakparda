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
<body>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Alumni</h1>
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
                                <h5 class="card-title">Data Alumni</h5>
                                <div class="table-responsive">
                                    <!--  <a class="btn btn-primary" href="data_alumni_add.php">Tambah</a> -->
               <a href="cetak_alumni.php" class="btn btn-warning" onClick= "javascript:return confirm('Yakin Ingin Mencetak Data ?');">Print</a>
                <a href="export_alumni.php" class="btn btn-success" onClick= "javascript:return confirm('Yakin Ingin Mengekspor Data ?');">Excel</a>
                <br>
                <br>
                                    <table id="zero_config" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nim</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tanggal Wisuda</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        include "../db/koneksi.php";
                                        $xx=1; 
                                        $query = mysqli_query($con,"SELECT * from tb_alumni ORDER BY tanggal_wisuda DESC");
                                          while($row = mysqli_fetch_array($query)){
                                          ?>
                                            <tr>
                  <td><?php  echo $xx++ ?></td>
                  <td><?php  echo $row['nim'] ?></td>
                  <td><?php  echo $row['nama_lengkap'] ?></td>
                  <td><?php echo date('d-m-Y', strtotime($row["tanggal_wisuda"]));?></td>
                  <td><?php  echo $row['email'] ?></td>
                  <td><!--  <a href="data_alumni_edit.php?nim=<?php //echo $row['nim']; ?>"  class="btn btn-warning">Edit</a> -->
                  <input type="button" name="view" value="View" data-id="<?php echo $row["nim"]; ?>" class="btn btn-primary btn-xs view_data">
                <a href="delete_alumni.php?nim=<?php echo $row['nim']; ?>"  class="btn btn-danger" onClick= "javascript:return confirm('Yakin Ingin Menghapus Data ?');">Hapus</a></td>
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
<script>
$(document).ready(function(){// menampilkan detail data alumni
  $('.view_data').click(function(){
    var data_id = $(this).data("id")//id detail_user
    $.ajax({
      url: "proses_view_alumni.php",//mengarahkan ke file proses.php
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
