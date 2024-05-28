<?php
include "header.php";
?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Riwayat Berkas Lamaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section profile">
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
?>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">                  
                  <h5 class="card-title">Detail Riwayat Berkas Lamaran</h5>
<?php 
include "../db/koneksi.php";
$id=$_GET["id_berkas"];
$query = mysqli_query($con," SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan WHERE id_berkas='$id'");
    while($row = mysqli_fetch_array($query)){
    $ktp         =$row['ktp'];
    $ijazah      =$row['ijazah'];
    $transkip    =$row['transkip'];
    $cv          =$row['CV'];
    $surat       =$row['surat_OJT'];
    $resume      =$row['resume'];
                ?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">ID Berkas</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['id_berkas'] ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nim</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nim']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Pelamar</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nama_lengkap']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email Pelamar</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['email']; ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Melamar</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nama_perusahaan'] ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Bidang Usaha</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['bidang_usaha'] ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Posisi Pekerjaan</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['posisi']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Lokasi / Penempatan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['lokasi']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Batas Lamaran</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['tanggal_berakhir']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Berkas</div>
                    <div class="col-lg-9 col-md-8"><?php
if ($row['status_berkas']=="Menunggu") {
echo '<div class ="badge bg-warning text-dark" > <i class="bi bi-exclamation-triangle me-1"></i> <b>Menunggu</b> </div>';

}
else if ($row['status_berkas']=="Di Terima") {
echo '<div class ="badge bg-success"> <i class="bi bi-check-circle me-1"></i> <b>Di Terima</b> </div>';
}
else if ($row['status_berkas']=="Di Tolak") {
echo '<div class ="badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i> <b>Di Tolak</b> </div>';
}
?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Keterangan</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['keterangan']; ?></div>
                  </div>

                  <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Dokumen dan Lampiran</h5>
                   <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">KTP</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/jpg.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <br>
                   <center><span><?php echo $row['ktp']; ?></span></center>
              </div>
            </div>
          <div class="text-center">
          <a href="../berkas/<?php echo $ktp; ?>" value="<?php echo $ktp; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
        </div>  
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">IJAZAH</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/pdf.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                 <br>
                   <center><span><?php echo $row['ijazah']; ?></span></center>
              </div>
            </div>
             <div class="text-center">
           <a href="../berkas/<?php echo $ijazah; ?>" value="<?php echo $ijazah; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TRANSKIP</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/pdf.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                 <br>
                   <center><span><?php echo $row['transkip']; ?></span></center>
              </div>
            </div>
             <div class="text-center">
           <a href="../berkas/<?php echo $transkip; ?>" value="<?php echo $transkip; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CV</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/pdf.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                 <br>
                   <center><span><?php echo $row['CV']; ?></span></center>
              </div>
            </div>
             <div class="text-center">
           <a href="../berkas/<?php echo $cv; ?>" value="<?php echo $cv; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SURAT ON THE JOB TRAINING</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/pdf.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                 <br>
                   <center><span><?php echo $row['surat_OJT']; ?></span></center>
              </div>
            </div>
             <div class="text-center">
          <a href="../berkas/<?php echo $surat; ?>" value="<?php echo $surat; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">RESUME</h5>
              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/pdf.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                 <br>
                   <center><span><?php echo $row['resume']; ?></span></center>
              </div>
            </div>
             <div class="text-center">
           <a href="../berkas/<?php echo $resume; ?>" value="<?php echo $resume; ?>" class="btn btn-primary">Lihat Berkas</a>
          </div>
          <br>
          </div>
        </div>
         <?php
//batas layout berkas terakhir
        ?>
                   <div class="text-center">
                     <?php  
                    if($row ['status_berkas']=="Di Terima")  
                        echo 
"<a href=#=".$row ['id_berkas']." class='btn btn-secondary' >Update Berkas Di Tutup</a>"; 
else if ($row['status_berkas']=="Di Tolak") 
echo "<a href=#=".$row ['id_berkas']." class='btn btn-secondary' >Update Berkas Di Tutup</a>";
                    else 
                        echo 
"<a href=riwayat_lamaran_update.php?id_berkas=".$row['id_berkas']." class='btn btn-warning' onClick='javascript:return confirm('Update Data Riwayat ?)'>Update Riwayat</a>"; 
                    ?>
                      <!--  <a href="riwayat_lamaran_update.php?id_berkas=<?php //echo $row['id_berkas']; ?>" class="btn btn-warning">Update Riwayat</a> -->
                    </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>
 <?php
}
?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
include 'footer.php';
?>

