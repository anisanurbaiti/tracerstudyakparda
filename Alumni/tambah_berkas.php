<?php
include 'header.php';
?>
<?php 
include '../db/koneksi.php';
if(!isset($_SESSION['id_alumni'])){
  header('location:../login.php');
}
 $VarEmail     =$_SESSION["id_alumni"];
 $user=$_SESSION["id_alumni"];
 $sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
 $rows=mysqli_fetch_array($sql2);
?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Lamaran Kerja</h1>
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
             <h5 class="card-title">Detail Lamaran Kerja</h5>
<?php
    if(isset($_GET['id_lowongan'])){
        $id_loker    =$_GET['id_lowongan'];
    }
    else {
        die ("Tidak ada data!");    
    }
    include "../db/koneksi.php";  
    $result=mysqli_query($con, "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan WHERE tb_lowongan.id_lowongan='$id_loker'");
    $row =mysqli_fetch_array($result);
?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "><b>Nama Perusahaan</b></div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nama_perusahaan']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><b>Posisi / Jabatan</b></div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['posisi']; ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label"><b>Lokasi / Penempatan</b></div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['lokasi']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><b>Batas Lamaran</b></div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d F Y', strtotime($row["tanggal_berakhir"]));?></div>
                  </div>
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
              <h5 class="card-title">Upload Berkas dan Lampiran</h5>
              <span><i>*Silahkan Upload Berkas dan Lampiran Anda*</i></span>
<?php
//ID OTOMATIS id_berkas
include '../db/koneksi.php';
$query = mysqli_query($con, "SELECT max(id_berkas) as kodeTerbesar FROM tb_berkas_pelamar");
$data = mysqli_fetch_array($query);
$kode = $data['kodeTerbesar'];
$urutan = (int) substr($kode, 3, 3);
$urutan++;
$huruf = "BKS";
$kode = $huruf . sprintf("%03s", $urutan);
?>
      <form action="tambah_berkas_save.php" method="post" enctype="multipart/form-data" class="row g-3">
      <input type="text" name="id_berkas" class="form-control" value="<?php echo $kode ?>" hidden>
         <input type="text" name="nim" class="form-control" value="<?php echo $rows['nim']; ?>" class="form-control" hidden>
        <input type="text" name="id_lowongan" class="form-control" value="<?php echo $row['id_lowongan']; ?>" hidden>
<input type="text" name="id_perusahaan" class="form-control" value="<?php echo $row['id_perusahaan']; ?>" hidden>
         <div class="col-md-12">
                            <label><b>Tanggal Melamar</b></label>
                            <input type="date" name="tanggal_apply" class="form-control" value="<?php echo date('Y-m-d');?>" required>
                          </div>
                          <div class="col-md-12">
                            <label><b>KTP<i>*Format Jpg, Png*</i></b></label>
                            <input type="file" name="ktp" class="form-control" id="file" onchange="return validasiEkstensi()" required/>
                          </div>  
                          <div id="preview"></div>
                          <div class="col-md-12">
                            <label><b>IJAZAH<i>*Format PDF*</i></b></label>
                            <input type="file" name="ijazah" class="form-control" id="fileijazah" onchange="checkIjazah(this)" required/>
                          </div>
                           <div id="errorIjazah" style="color: red;"></div>
                          <div class="col-md-12">
                            <label><b>TRANSKIP<i>*Format PDF*</i></b></label>
                            <input type="file" name="transkip" class="form-control" id="filetranskip" onchange="checkTranskip(this)" required/>
                          </div>
                            <div id="errorTranskip" style="color: red;"></div>
                          <div class="col-md-12">
                            <label><b>CV<i>*Format PDF*</i></b></label>
                            <input type="file" name="CV" class="form-control" id="fileInput" onchange="checkFileSize(this)" required/>
                          </div>
                          <div id="errorMessage" style="color: red;"></div>
                          <div class="col-md-12">
                            <label><b>Surat Lamaran atau Resume<i>*Format PDF*</i></b></label>
                            <input type="file" name="resume" class="form-control" id="fileresume" onchange="checkResume(this)" required/>
                          </div>
                            <div id="error" style="color: red;"></div>
                          <div class="col-md-12">
                            <label><b>Surat Pengalaman Kerja atau OJT<i>*Format PDF*</i></b></label>
                            <input type="file" name="surat_OJT" class="form-control" id="fileOJT" onchange="checkSuratOJT(this)" required/>
                          </div>
                           <div id="errorSurat" style="color: red;"></div>
                            <input type="text" name="status_berkas" value="Menunggu" class="form-control" hidden>
                          <div class="text-center">
                          <input type="submit" name="save" class="btn btn-success" value="Upload Lampiran">
                          </div>
     
   </form>
 </div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
  //validasi file gambar ktp
  function validasiEkstensi(){
    var inputFile = document.getElementById('file');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang dengan ekstensi .jpeg/.jpg/.png');
        inputFile.value = '';
        return false;
    }else{
        // Preview gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').innerHTML = '<img src="'+e.target.result+'" style="height:300px"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}
//batas
//VALIDASI UKURAN FILE IJAZAH MAX 1 MB
function checkIjazah(input) {
    var file = input.files[0];
    var maxSize = 2048 * 2048; // 2MB 

    if (file.size > maxSize) {
        document.getElementById('errorIjazah').innerText = 'Maaf. File Terlalu Besar !. Maksimum 2MB diizinkan.';
        input.value = ''; 
    } else {
        document.getElementById('errorIjazah').innerText = '';
    }
}
//batas
//VALIDASI UKURAN FILE TRANSKIP MAX 1 MB
function checkTranskip(input) {
    var file = input.files[0];
    var maxSize = 2048 * 2048; // 2MB 

    if (file.size > maxSize) {
        document.getElementById('errorTranskip').innerText = 'Maaf. File Terlalu Besar !. Maksimum 2MB diizinkan.';
        input.value = ''; 
    } else {
        document.getElementById('errorTranskip').innerText = '';
    }
}
//batas
//VALIDASI UKURAN FILE CV MAX 2 MB
function checkFileSize(input) {
    var file = input.files[0];
    var maxSize = 2048 * 2048; // 2MB 

    if (file.size > maxSize) {
        document.getElementById('errorMessage').innerText = 'Maaf. File Terlalu Besar !. Maksimum 2MB diizinkan.';
        input.value = ''; 
    } else {
        document.getElementById('errorMessage').innerText = '';
    }
}
//batas
//VALIDASI UKURAN FILE resume MAX 1 MB
function checkResume(input) {
    var file = input.files[0];
    var maxSize = 2048 * 2048; // 2MB 

    if (file.size > maxSize) {
        document.getElementById('error').innerText = 'Maaf. File Terlalu Besar !. Maksimum 2MB diizinkan.';
        input.value = ''; 
    } else {
        document.getElementById('error').innerText = '';
    }
}
//VALIDASI UKURAN FILE SURAT OJT MAX 1 MB
function checkSuratOJT(input) {
    var file = input.files[0];
    var maxSize = 2048 * 2048; // 2MB 

    if (file.size > maxSize) {
        document.getElementById('errorSurat').innerText = 'Maaf. File Terlalu Besar !. Maksimum 2MB diizinkan.';
        input.value = ''; 
    } else {
        document.getElementById('errorSurat').innerText = '';
    }
}

</script>
<?php
include 'footer.php';
?>
