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
?>
<?php
    include "../db/koneksi.php"; 
    if(isset($_GET['id_lowongan'])){
        $id_loker    =$_GET['id_lowongan'];
    }
    else {
        die ("Tidak ada data!");    
    } 
    $query            =mysqli_query($con, "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan WHERE tb_lowongan.id_lowongan='$id_loker'");
    $rows           =  mysqli_fetch_array($query);
    $id_berita        = $rows['id_lowongan'];
    $idLok            = $rows['id_perusahaan'];
    $NamaLoker        = $rows['judul'];
    $Posisi           = array('Administrasi','Marketing','Resepsionis','General Manager','Head Office','Front Desk Agent','Front Office','Finance Manager','Customer Service','Trainer Hospital','Housekeeping Hotel','Chef Food And Beverages','Manager Restoran');
    $Benefit    = array('1.000.000 > 3.000.000','3.000.000 > 5.000.000','7.000.000 > 10.000.000');
    $TgLBuat          = $rows['tanggal_buat'];
    $TglBerakhir      = $rows['tanggal_berakhir'];
    $Desk             = $rows['deskripsi'];
    $Lokasi           = $rows['lokasi'];
    $Foto             = $rows['photos'];
    $Status           = $rows['status_lowker'];
?>
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
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">  
            <div class="card-body">
              <h5 class="card-title">Ubah Lowongan Kerja</h5>

              <!-- Multi Columns Form -->
              <form action="lowongan_kerjaedit_save.php" method="post" enctype="multipart/form-data" class="row g-3">
                  <input type="text" name="id_lowongan" class="form-control" value="<?php  echo $rows['id_lowongan'] ?>" hidden>
                  <input type="text" class="form-control" name="id_perusahaan" id="inputEmail5" value="<?php  echo $rows['id_perusahaan'] ?>" hidden>
                <div class="col-md-12">
                  <label for="inputPassword5" class="form-label">Judul Lowongan</label>
                  <input type="text" class="form-control" name="judul" id="inputPassword5" value="<?php  echo $rows['judul'] ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Posisi yang Di Butuhkan</label>
                   <select class="form-select" aria-label="Default select example" name="posisi">
                     <?php
                               foreach ($Posisi as $jL){
                                echo "<option value='$jL' ";
                                echo $rows['posisi']==$jL?'selected="selected"':'';
                                echo ">$jL</option>";
                            }
                             ?>
                  </select>
                </div>
                 <div class="col-md-6">
                  <label for="inputState" class="form-label">Benefit</label>
                  <select class="form-select" aria-label="Default select example" name="benefit">
                     <?php
                               foreach ($Benefit as $jk){
                                echo "<option value='$jk' ";
                                echo $rows['benefit']==$jk?'selected="selected"':'';
                                echo ">$jk</option>";
                            }
                             ?>
                  </select>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Tanggal Buat</label>
                  <input type="date" name="tanggal_buat" class="form-control" value="<?php  echo $rows['tanggal_buat'] ?>">
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Tanggal Berakhir</label>
                  <input type="date" name="tanggal_berakhir" class="form-control"  value="<?php  echo $rows['tanggal_berakhir'] ?>">
                </div>
                <div class="form-group">
                <label for="inputZip" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="editor" rows="60"><?=$rows['deskripsi']?></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">Lokasi atau Penempatan</label>
                   <input type="text" class="form-control" name="lokasi" id="inputPassword5" value="<?php  echo $rows['lokasi'] ?>">
                </div>
                  <div class="col-md-6">
                  <label for="inputZip" class="form-label">Gambar Lowongan</label>
                   <input class="form-control" type="file" id="photos" name="photos" value="<?php echo $rows['photos']; ?>">  <br>
               <img src="../images/<?php echo $rows['photos']; ?>" style="width: 250px;float: left;margin-bottom: 5px;"> <br>
              <br> <br>
                </div>
                    <input type="text" name="status_lowker" value="<?php  echo $rows['status_lowker'] ?>" class="form-control" hidden>
                <div class="text-center">
        <input type="submit" name="save" class="btn btn-primary" value="Simpan Perubahan">
        <input type="submit" name="batal" class="btn btn-danger" value="Batal">
      </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/ckeditor.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
<?php include 'footer.php';  ?>