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
      <h1>Update Riwayat Lamaran Kerja</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
 <section class="section profile">
      <?php
    if(isset($_GET['id_berkas'])){
        $id_berkas    =$_GET['id_berkas'];
    }
    else {
        die ("Tidak ada data!");    
    }
 include "../db/koneksi.php";  
    $query =mysqli_query($con, "SELECT * from tb_berkas_pelamar
            LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
            LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
            LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan WHERE tb_berkas_pelamar.id_berkas='$id_berkas'");
    $row         =mysqli_fetch_array($query);
    // $_SESSION['id_lowongan'] = $row['id_lowongan'];
    // $_SESSION['id_perusahaan'] = $row['id_perusahaan'];
    $ktp         =$row['ktp'];
    $ijazah      =$row['ijazah'];
    $transkip    =$row['transkip'];
    $cv          =$row['CV'];
    $surat       =$row['surat_OJT'];
    $resume      =$row['resume'];
?>    
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">          
              <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detail Lamaran</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tanggal Melamar</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nama_perusahaan']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Bidang Usaha</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['bidang_usaha']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Posisi Pekerjaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['posisi']; ?></div>
                  </div>
                </div>
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
              <h5 class="card-title">Update Riwayat dan Lampiran Anda</h5>
              <span><i>*Silahkan Upload Berkas dan Lampiran Anda*</i></span>
      <form action="update_berkas_save.php" method="post" enctype="multipart/form-data" class="row g-3">
      <input type="text" name="id_berkas" class="form-control" value="" hidden>
      <input type="text" name="nim" class="form-control" value="<?php echo $rows['nim']; ?>" class="form-control" hidden>
      <input type="text" name="id_lowongan" class="form-control" value="<?php echo $row['id_lowongan']; ?>" hidden>
      <input type="text" name="id_perusahaan" class="form-control" value="<?php echo $row['id_perusahaan']; ?>" hidden>
      <div class="col-md-12">
                            <label>Tanggal Apply</label>
                            <input type="date" name="tanggal_apply" class="form-control" value="<?php echo date('Y-m-d');?>" required>
                          </div>
                          <div class="col-md-12">
                            <label>KTP<i>*Format Jpg, Png*</i></label>
                            <input type="file" name="ktp" class="form-control" value="<?php echo $row['ktp']; ?>">
                          </div>  
                           <div class="mt-4">
          <input type="text" value="<?php echo $row['ktp']; ?>">
          </div> 
                          <div class="col-md-12">
                            <label>IJAZAH<i>*Format PDF*</i></label>
                            <input type="file" name="ijazah" class="form-control" value="<?php echo $row['ijazah']; ?>">
                          </div>
                          <div class="col-md-12">
                            <label>TRANSKIP<i>*Format PDF*</i></label>
                            <input type="file" name="transkip" class="form-control" value="<?php echo $row['transkip']; ?>">
                          </div>
                          <div class="col-md-12">
                            <label>CV<i>*Format PDF*</i></label>
                            <input type="file" name="CV" class="form-control" value="<?php echo $row['CV']; ?>">
                          </div>
                          <div class="col-md-12">
                            <label>Surat Lamaran atau Resume<i>*Format PDF*</i></label>
                            <input type="file" name="resume" class="form-control" value="<?php echo $row['resume']; ?>">
                          </div>
                          <div class="col-md-12">
                            <label>Surat Pengalaman Kerja atau OJT<i>*Format PDF*</i></label>
                            <input type="file" name="surat_OJT" class="form-control" value="<?php echo $row['surat_OJT']; ?>">
                          </div>
                            <input type="text" name="status_berkas" value="<?php echo $row['status_berkas']; ?>" class="form-control" hidden>
                          <div class="text-center">
                          <input type="submit" name="update" class="btn btn-primary" value="Simpan Perubahan">
                          </div>
     
   </form>
 </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>
