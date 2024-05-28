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
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Pelamar Kerja</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">
                 <form action="data_pelamar_proses.php" class="row g-3" method="post" enctype="multipart/form-data">
                  <?php
                  include "../db/koneksi.php";
    if(isset($_GET['id_berkas'])){
        $id   =$_GET['id_berkas'];
    }
    else {
        die ("Tidak ada data!");    
    }
    include "../db/koneksi.php"; 
    $query          =mysqli_query($con, "SELECT * from tb_berkas_pelamar
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan WHERE id_berkas='$id'");
    $row         =mysqli_fetch_array($query);
    $ktp         =$row['ktp'];
    $ijazah      =$row['ijazah'];
    $transkip    =$row['transkip'];
    $cv          =$row['CV'];
    $surat       =$row['surat_OJT'];
    $resume      =$row['resume'];
    ?>
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Data Pelamar Kerja</h5>
                    <hr>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID Berkas Pelamar</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['id_berkas']; ?></div>
                  </div>
                  <input type="text" class="form-control" id="inputName5" name="id_berkas" value="<?php  echo $row['id_berkas'] ?>" hidden>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nama_perusahaan']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Posisi / Jabatan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['posisi']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tanggal Melamar</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></div>
                  </div>
                  <hr>

                  <h5 class="card-title">Identitas Pelamar</h5>
                     <hr>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nama_lengkap']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nim</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nim']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['tempat_lahir']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_lahir"]));?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat Mahasiswa</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['alamat_mahasiswa']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat Orangtua</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['alamat_orangtua']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['jenis_kelamin']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Agama</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['agama']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telepon</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['no_telepon']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Wisuda</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_wisuda"]));?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">IPK</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['ipk']; ?></div>
                  </div>
                   <hr>
                  <h5 class="card-title">Dokumen dan Berkas</h5>
                   <hr>
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
              <h5 class="card-title">CURRICULUM VITAE</h5>
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
  </div>
<hr>

                  <h5 class="card-title">Proses Pemberkasan</h5>
                    <hr>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Proses Status</div>
                    <div class="col-lg-3 col-md-3"><select id="inputState" class="form-select" name="status_berkas">
                    <option selected>Pilih...</option>
                    <option value="Di Terima">Terima</option>
                    <option value ="Di Tolak">Tolak</option>
                    <option value ="Menunggu">Menunggu</option>
                  </select>
                   </div>
                  </div>              
                  <input type="text" class="form-control" name="tanggal_apply" id="inputName5" value="<?php echo $row['tanggal_apply']; ?>" hidden>
                  <input type="text" class="form-control" id="inputName5" name="id_lowongan" value="<?php echo $row['id_lowongan']; ?>" hidden> 
                  <input type="text" class="form-control" name="id_perusahaan" id="inputName5" value="<?php echo $row['id_perusahaan']; ?>" hidden>
                  <input type="text" class="form-control" name="nim" id="inputName5" value="<?php echo $row['nim']; ?>" hidden>         
                  <input type="text" class="form-control" name="ktp" id="inputEmail5" value="<?php echo $row['ktp']; ?>" hidden>  
                  <input type="text" class="form-control" name="ijazah" id="inputEmail5" value="<?php echo $row['ijazah']; ?>" hidden> 
                  <input type="text" class="form-control" name="transkip" id="inputEmail5" value="<?php echo $row['transkip']; ?>" hidden> 
                  <input type="text" class="form-control" name="CV" id="inputEmail5" value="<?php echo $row['CV']; ?>" hidden> 
                  <input type="text" class="form-control" name="surat_OJT" id="inputEmail5" value="<?php echo $row['surat_OJT']; ?>" hidden>  
                  <input type="text" class="form-control" name="resume" id="inputEmail5" value="<?php echo $row['resume']; ?>" hidden> 
                  <input type="text" class="form-control" name="status" id="inputEmail5" value="<?php echo $row['status']; ?>" hidden> 
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Keterangan</div>
                    <div class="col-lg-9 col-md-8"><input type="text" class="form-control" name="keterangan" id="inputEmail5" value="<?php echo $row['keterangan']; ?>"></div>
                  </div>
                </div>
                 <div class="text-center">
                  <input type="submit" name="proses" class="btn btn-success" value="Proses Berkas">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
<?php
include 'footer.php';
?>
