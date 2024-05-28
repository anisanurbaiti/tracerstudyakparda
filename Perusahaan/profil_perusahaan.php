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
$rows=mysqli_fetch_array($sql);
// //session induk
// $email_perusahaan=$_SESSION["useridd"];
?>        
   <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profil Perusahaan</h1>
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
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Perusahaan</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['id_perusahaan']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['nama_perusahaan']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Bidang Usaha</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['bidang_usaha']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Deskripsi Usaha</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['deskripsi_bidang']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['alamat']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email Perusahaan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['email_perusahaan']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telepone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['telepon']; ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Website</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['website']; ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['username']; ?></div>
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"><?php
if ($rows['status']=="Aktif") {
echo '<div class ="badge bg-success" > <i class="bi bi-check-circle me-1"></i>Aktif </div>';

}
else if ($rows['status']=="Pending") {
echo '<div class ="badge bg-danger"> <i class="bi bi-exclamation-octagon me-1"></i>Pending</div>';
}
?></div>
                  </div>
                   <div class="text-center">
                      <a href="profil_perusahaan_update.php?id_perusahaan=<?php echo $rows['id_perusahaan']; ?>"  class="btn btn-warning">Ubah</a>
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
 