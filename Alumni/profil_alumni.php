<?php
include "header.php";
?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profil Alumni</h1>
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
                  
                  <h5 class="card-title">Profil Alumni</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nim</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['nim']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['nama_lengkap']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['tempat_lahir']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($rows["tanggal_lahir"]));?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['jenis_kelamin']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Agama</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['agama']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Orangtua</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['nama_orangtua']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat Orangtua</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['alamat_orangtua']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat Mahasiswa</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['alamat_mahasiswa']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telepon</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['no_telepon']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['email']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Judul Tugas Akhir</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['judul_TA']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dosen Pembimbing 1</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['dosen_pembimbing_1']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dosen Pembimbing 2</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['dosen_pembimbing_2']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Total SKS</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['total_sks']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Wisuda</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($rows["tanggal_wisuda"]));?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">IPK</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['ipk']; ?></div>
                  </div>
                   <div class="text-center">
                       <a href="profil_alumni_update.php?nim=<?php echo $rows['nim']; ?>"  class="btn btn-warning">Ubah</a>
                    </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
include 'footer.php';
?>

