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
      <h1>Profil Perusahaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
     <section class="section">
      <?php
 //mengambil data id_perusahaan
    if(isset($_GET['id_perusahaan'])){
        $id_perusahaan    =$_GET['id_perusahaan'];
    }
    else {
        die ("Tidak ada data!");    
    }
    include "../db/koneksi.php"; 
    $user=$_SESSION["id_perusahaan"];
    $query          =mysqli_query($con, "SELECT * FROM tb_perusahaan WHERE id_perusahaan='$id_perusahaan'");
    $rows           =mysqli_fetch_array($query);
    $id_perusahaan  = $rows['id_perusahaan'];
    $TglDaftar      = $rows['tanggal_daftar'];
    $Name           = $rows['nama_perusahaan'];
    $Tempat_lahir   = $rows['bidang_usaha'];
    $Tanggal_lahir  = $rows['deskripsi_bidang'];
    $jenis_kelamin  = $rows['alamat'];
    $agama          = $rows['email_perusahaan'];
    $Namaortu       = $rows['telepon'];
    $Alamatortu     = $rows['website'];
    $Alamatmhas     = $rows['username'];
    $no_telpon      = $rows['status'];
    $BidangUsaha    = array('Perhotelan','Restaurant','Transportasi','Pembiayaan','Keuangan','Pariwisata','Industri Tekstil','Teknologi Informasi');
    $pass           = $rows['password'];
    ?>    
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">  
            <div class="card-body">
              <h5 class="card-title">Ubah Profil Perusahaan</h5>
              <!-- Multi Columns Form -->
              <form action="profil_perusahaan_update_save.php" method="post" class="row g-3">

               <!--  <div class="col-md-6">
                  <label for="inputName5" class="form-label">ID Perusahaan</label> -->
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $rows['id_perusahaan']; ?>" name="id_perusahaan" hidden>
                   <input type="text" class="form-control" id="inputName5" value="<?php echo $rows['tanggal_daftar']; ?>" name="tanggal_daftar" hidden>
               <!--  </div> -->
                 <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="inputEmail5" value="<?php echo $rows['nama_perusahaan']; ?>" name="nama_perusahaan">
                </div>
                 <div class="col-md-6">
                  <label for="inputState" class="form-label">Bidang Usaha</label>
                 <select class="form-select" aria-label="Default select example" name="bidang_usaha">
                     <?php
                               foreach ($BidangUsaha as $jk){
                                echo "<option value='$jk' ";
                                echo $rows['bidang_usaha']==$jk?'selected="selected"':'';
                                echo ">$jk</option>";
                            }
                             ?>
                  </select>
                </div>
                 <div class="col-6">
                  <label for="inputAddress5" class="form-label">Deskripsi Bidang</label>
                 <textarea class="form-control" name="deskripsi_bidang" rows="4" value="<?php echo $rows['deskripsi_bidang']; ?>" ><?php echo $rows['deskripsi_bidang']; ?></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4" value="<?php echo $rows['alamat']; ?>" ><?php echo $rows['alamat']; ?></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Email</label>
                   <input type="text" name="email" class="form-control" value="<?php echo $rows['email_perusahaan']; ?>" >
                </div>
                <div class="col-6">
                  <label for="inputCity" class="form-label">Telepon</label>
                 <input type="text" name="telepon" id="inputEmail5" class="form-control" value="<?php echo $rows['telepon']; ?>" >
                </div>
                <div class="col-6">
              <label for="inputCity" class="form-label">Website</label>
            <input type="text" name="website" id="inputEmail5" class="form-control" value="<?php echo $rows['website']; ?>" >
            </div>
              <div class="col-6">
              <label for="inputCity" class="form-label">Username</label>
           <input type="text" name="username" id="inputEmail5" class="form-control" value="<?php echo $rows['username']; ?>" >
            </div>
               <div class="text-center">
        <input type="submit" name="update" class="btn btn-primary" value="Simpan Perubahan">
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
<?php
include 'footer.php';
?>
 