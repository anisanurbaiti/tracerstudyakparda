<?php
include 'header.php';
?>
<?php
include '../db/koneksi.php';
if (!isset($_SESSION['useridd'])) {
  //cek di luar file
  header('location:../login.php');
}
$user = $_SESSION['useridd'];
$sql = mysqli_query($con, "SELECT * FROM tb_perusahaan where email_perusahaan='$_SESSION[useridd]'");
$VarData = mysqli_fetch_array($sql);
//session induk
$email_perusahaan = $_SESSION["useridd"];
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
  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aturan Posting Lowongan Kerja</span></h5>
            <p class="mb-0">1. Upload Gambar Lowongan untuk 1 Posisi Yang Dibutuhkan.</p>
            <p class="mb-0">2. Upload Gambar dengan informasi yang Jelas dan Lengkap atau boleh dengan logo perusahaan.</p>
            <p class="mb-0">3. Perusahaan dilarang memposting lowongan lebih dari satu dengan posisi yang sama.</p>
            <p class="mb-0">4. Jika Informasi Lowongan tidak /kurang jelas dan tidak mentaati peraturan, Maka Pihak Admin berhak menghapus lowongan Saudara.</p>
            <p class="mb-0">5. Lowongan Kerja Hanya untuk Lulusan Jenjang D3 Perhotelan AKPARDA Yogyakarta.</p>
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="card-body">
              <h5 class="card-title">Tambah Lowongan Kerja</h5>
              <form action="lowongan_kerja_save.php" method="post" enctype="multipart/form-data" class="row g-3">
                <?php
                include '../db/koneksi.php';
                $user = $_SESSION["useridd"];
                $sql2 = mysqli_query($con, "SELECT * FROM tb_perusahaan where email_perusahaan='$_SESSION[useridd]'");
                $result = mysqli_fetch_array($sql2);
                ?>
                <input type="text" name="id_perusahaan" class="form-control" value="<?php echo $result['id_perusahaan']; ?>" hidden>
                <div class="col-md-12">
                  <label for="inputPassword5" class="form-label">Judul Lowongan</label>
                  <input type="text" class="form-control" name="judul" id="inputPassword5">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Posisi yang Di Butuhkan</label>
                  <select id="inputState" class="form-select" name="posisi">
                    <option selected>Pilih...</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Resepsionis">Resepsionis</option>
                    <option value="General Manager">General Manager</option>
                    <option value="Head Office">Head Office</option>
                    <option value="Front Desk Agent">Front Desk Agent</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Finance Manager">Finance Manager</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Trainer Hospital">Trainer Hospital</option>
                    <option value="Housekeeping Hotel">Housekeeping Hotel</option>
                    <option value="Chef Food And Beverages">Chef Food And Beverages</option>
                    <option value="Manager Restoran">Manager Restoran</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Benefit</label>
                  <select id="inputState" class="form-select" name="benefit">
                    <option selected>Pilih...</option>
                    <option value="Kompetitif">Kompetitif</option>
                    <option value=" 1.000.000 > 3.000.000"> 1.000.000 > 3.000.000</option>
                    <option value="3.000.000 > 5.000.000">3.000.000 > 5.000.000</option>
                    <option value=" 7.000.000 > 10.000.000"> 7.000.000 > 10.000.000</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Tanggal Buat</label>
                  <input type="date" name="tanggal_buat" class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Tanggal Berakhir</label>
                  <input type="date" name="tanggal_berakhir" class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                </div>
                <div class="form-group">
                  <label for="inputZip" class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="editor" rows="60"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">Lokasi atau Penempatan</label>
                  <input type="text" class="form-control" name="lokasi" id="inputPassword5">
                </div>
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">Gambar Lowongan</label>
                  <input type="file" class="form-control" name="photos" id="inputPassword5">
                </div>
                <div class="col-md-6">
                  <input type="text" name="status_lowker" value="Aktif" class="form-control" hidden>
                </div>
                <br>
                <div class="text-center">
                  <input type="submit" name="save" class="btn btn-primary" value="Simpan">
                  <input type="submit" name="batal" class="btn btn-danger" value="Batal">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
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
<script src="assets/vendor/php-email_perusahaan-form/validate.js"></script>
<?php include 'footer.php';  ?>