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
      <h1>Data Pengumuman Wawancara</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <section class="section profile">
      <div class="row">   
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">
<?php
include '../db/koneksi.php';
$query = mysqli_query($con, "SELECT max(id_history_lamar) as kodeTerbesar FROM tb_history_lamar");
$data = mysqli_fetch_array($query);
$kode = $data['kodeTerbesar'];
$urutan = (int) substr($kode, 3, 3);
$urutan++;
$huruf = "HIS";
$kode = $huruf . sprintf("%03s", $urutan);
?>
 <form action="buat_pengumuman_save.php" method="post" class="row g-3">
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
    $id          = $row['id_berkas'];
    $ktp         = $row['ktp'];
    $ijazah      = $row['ijazah'];
    $transkip    = $row['transkip'];
    $cv          = $row['CV'];
    $surat       = $row['surat_OJT'];
    $resume      = $row['resume'];
    $status      = $row['status_berkas'];
    $keterangan  = $row['keterangan'];
    ?>
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Data Pelamar</h5>
                  <hr>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nim pelamar</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nim'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Pelamar</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nama_lengkap'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['alamat_mahasiswa'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telepon</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['no_telepon'] ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['nama_perusahaan'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Posisi / Jabatan</div>
                    <div class="col-lg-9 col-md-8"><?php  echo $row['posisi'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Melamar</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_apply"]));?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Batas Lamaran</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($row["tanggal_berakhir"]));?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Berkas</div>
                    
                    <div class="col-lg-9 col-md-8"> <?php
                                            if ($row['status_berkas']=="Di Terima") {
echo '<div class ="badge bg-success" > <i class="bi bi-check-circle me-1"></i> <b>Di Terima</b> </div>';

}

else if ($row['status_berkas']=="Di Tolak") {
echo '<div class =""badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i> <b>Di Tolak</b> </div>';
# code…
}
?></div>
                  </div>
                </div>
                 <hr>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Proses Pengumuman Wawancara</h5>
                   <hr>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ID Pengumuman</label>
                      <div class="col-md-3 col-lg-3">
                      <input type="text" name="id_history_lamar" class="form-control" value="<?php echo $kode ?>" readonly>
                      </div>
                    </div>
                     <input type="text" name="id_berkas" class="form-control" value="<?php  echo $row['id_berkas'] ?>" hidden>
                    <input type="text" name="nim" class="form-control" value="<?php  echo $row['nim'] ?>" hidden>
                    <input type="text" class="form-control" name="id_perusahaan" id="inputPassword5" value="<?php echo $row['id_perusahaan']; ?>" hidden>
                     <input type="text" class="form-control" name="id_lowongan" id="inputPassword5" value="<?php  echo $row['id_lowongan'] ?>" hidden>
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Metode Interview</label>
                      <div class="col-md-3 col-lg-3">
                        <select id="inputState" class="form-select" name="metode_interview" required>
                    <option selected>Pilih...</option>
                            <option value="ONLINE">ONLINE</option>
                            <option value ="OFFLINE">OFFLINE</option>
                     </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tanggal Interview</label>
                      <div class="col-md-3 col-lg-3">
                        <input type="date" name="tanggal_interview" class="form-control" value="<?php echo date('Y-m-d');?>"/ required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Keterangan Interview *(Silahkan Masukkan Link Zoom, Gmeet untuk metode Interview Online, Jika Offline Masukkan Lokasi / Alamat Kantor)*</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea class="form-control" name="ket_interview" id="editor"  rows="10" required></textarea>
                      </div>
                    </div>
                   <div class="text-center">
        <input type="submit" name="save" class="btn btn-primary" value="Simpan Pengumuman">
      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main><!-- End #main -->
<?php include 'footer.php';  ?>