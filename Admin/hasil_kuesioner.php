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
      <h1>Data Hasil Pengisian Kuesioner</h1>
       <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Berdasarkan </h5>
              <!-- General Form Elements -->
              <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Dari Tanggal</label>
                  <div class="col-sm-4">
                   <input type="date" name="tgl_awal" id="tgl_mulai" class="form-control" value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Sampai Tanggal</label>
                  <div class="col-sm-4">
                     <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
                  </div>
                </div>
                <script type="text/javascript">
            $(function(){
                $(".datepicker").datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: false,
                });
                $("#tgl_mulai").on('changeDate', function(selected) {
                    var startDate = new Date(selected.date.valueOf());
                    $("#tgl_akhir").datepicker('setStartDate', startDate);
                    if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                        $("#tgl_akhir").val($("#tgl_mulai").val());
                    }
                });
            });
        </script>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Cari</button>
                <a href="export_hasilkuesioner.php"  class="btn btn-success" onClick= "javascript:return confirm('Yakin Ingin Mengekspor Data ?');">Excel</a>
                <br>
                <br>
                  </div>
                </div>


                 <h5 class="card-title">Data Hasil Survey Kuesioner</h5>
                 <span>Alumni yang sudah mengisi kuesioner</span>

              <!-- Default Table -->
              <table class="table table-striped" id="DataTable" class="scroll">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Isi </th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                     <th scope="col">Tanggal Wisuda</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                   <?php

           include "../db/koneksi.php";
        if (isset($_POST['tgl_awal'])&& isset($_POST['tgl_akhir'])) {
            $tgl_awal=date('d-m-Y', strtotime($_POST["tgl_awal"]));
            $tgl_akhir=date('d-m-Y', strtotime($_POST["tgl_akhir"]));
            $sql="SELECT * from tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim where tanggal between '".$tgl_awal."' and '".$tgl_akhir."'";

        }else {
            $sql="SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim ORDER BY tanggal DESC";
        }
        $hasil=mysqli_query($con,$sql);
        $xx=1; 
        while ($data = mysqli_fetch_array($hasil)) {
            ?>                  
                    <tr>
                    <th scope="row"><?php  echo $xx++ ?></th>
                    <td><?php echo date('d-m-Y', strtotime($data["tanggal"]));?></td>
                    <td><?php  echo $data['nim'] ?></td> 
                    <td><?php  echo $data['nama_lengkap'] ?></td> 
                    <td><?php  echo $data['email'] ?></td> 
                   <td><?php echo date('d-m-Y', strtotime($data["tanggal_wisuda"]));?></td> 
                    <td>
                  <a href="view_kuesioner.php?id_tracer=<?php echo $data['id_tracer']; ?>" class="btn btn-warning">Lihat Kuesioner</a>

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
              </form>
            </div>
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
  

</body>

</html>
<?php include'footer.php';  ?>




