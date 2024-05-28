<?php
include 'header.php';
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
 <section class="section">
  <?php 
include '../db/koneksi.php';
if(!isset($_SESSION['id_alumni'])){
  header('location:../login.php');
}
$VarEmail      =$_SESSION["id_alumni"];
//menampilkan data user yang sedang login
//$user=$_SESSION["email"];
$sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rowss=mysqli_fetch_array($sql2);
?>
 <?php
 //mengambil data nim
    if(isset($_GET['nim'])){
        $Nim    =$_GET['nim'];
    }
    else {
        die ("Tidak ada data!");    
    }
    include "../db/koneksi.php"; 
    $user=$_SESSION["id_alumni"];
    $query          =mysqli_query($con, "SELECT * FROM tb_alumni WHERE nim='$Nim'");
    $row         =mysqli_fetch_array($query);
    $Nim            = $row['nim'];
    $Name           = $row['nama_lengkap'];
    $Tempat_lahir   = $row['tempat_lahir'];
    $Tanggal_lahir  = $row['tanggal_lahir'];
    $jenis_kelamin  = $row['jenis_kelamin'];
    $agama          = $row['agama'];
    $Namaortu       = $row['nama_orangtua'];
    $Alamatortu     = $row['alamat_orangtua'];
    $Alamatmhas     = $row['alamat_mahasiswa'];
    $no_telpon      = $row['no_telepon'];
    $Email          = $row['email'];
    $JudulTA        = $row['judul_TA'];
    $Dospem1        = array('I Ketut Suardana, S.ST. M.Sc','Nina Noviastuti, SP, M.Sc','Neneng Nurhayati, S. Sos, M.Si','Aditya Yuwana Nawing, S.T, M.Sc','Winda Rosita Dewi, S.S., M.A','Drs. H Kukuh Setyoadmodjo','Humaera Silvia Maristy, S.Pd, M.Pd');
    $Dospem2        = array('I Ketut Suardana, S.ST. M.Sc','Nina Noviastuti, SP, M.Sc','Neneng Nurhayati, S. Sos, M.Si','Aditya Yuwana Nawing, S.T, M.Sc','Winda Rosita Dewi, S.S., M.A','Drs. H Kukuh Setyoadmodjo','Humaera Silvia Maristy, S.Pd, M.Pd');
    $Totalsks       = $row['total_sks'];
    $tanggal_wisuda = $row['tanggal_wisuda'];
    $ipk            = $row['ipk'];
    $pass           = $row['password'];
    ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">  
            <div class="card-body">
              <h5 class="card-title">Ubah Profil Alumni</h5>
              <form action="profil_update_save.php" method="post" class="row g-3">
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Nim</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $row['nim']; ?>" name="nim">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputEmail5" value="<?php echo $row['nama_lengkap']; ?>" name="nama_lengkap">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="inputPassword5" value="<?php echo $row['tempat_lahir']; ?>" name="tempat_lahir">
                </div>
                 <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="inputPassword5" value="<?php echo $row['tanggal_lahir']; ?>" name="tanggal_lahir">
                </div>
                 <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Jenis Kelamin</label><br>
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios3" value="Laki-Laki" <?php if($jenis_kelamin =='Laki-Laki'){echo "checked";}?>>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                      </label><br>
                       <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios4"  value="Perempuan" <?php if($jenis_kelamin =='Perempuan'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios2">
                       Perempuan
                      </label>
                </div>
                 <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Agama</label><br>
                  <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value="Islam" <?php if($agama =='Islam'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios1">
                       Islam
                      </label><br>
                       <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value="Kristen" <?php if($agama =='Kristen'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios2">
                       Kristen
                      </label><br>
                       <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value=" Katholik" <?php if($agama =='Katholik'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios2">
                      Katholik
                      </label><br>
                       <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value=" Hindu" <?php if($agama =='Hindu'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios2">
                      Hindu
                      </label><br>
                       <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value="Budha" <?php if($agama =='Budha'){echo "checked";}?> >
                      <label class="form-check-label" for="gridRadios2">
                      Budha
                      </label>
                </div>
                 <div class="col-6">
                  <label for="inputAddress5" class="form-label">Nama Orangtua</label>
                   <input type="text" name="nama_orangtua" class="form-control" value="<?php echo $row['nama_orangtua']; ?>" >
                </div>
                 <div class="col-6">
                  <label for="inputAddress5" class="form-label">Alamat Orangtua</label>
                   <textarea class="form-control" id="alamat_orangtua" name="alamat_orangtua" style="height: 100px"><?=$row['alamat_orangtua']?>
               </textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Alamat Mahasiswa</label>
                  <textarea class="form-control" id="alamat_mahasiswa" name="alamat_mahasiswa" style="height: 100px"><?=$row['alamat_mahasiswa']?></textarea>
                </div>
                 <div class="col-6">
                  <label for="inputCity" class="form-label">Telepon</label>
                 <input type="text" name="no_telepon" id="inputEmail5" class="form-control" value="<?php echo $row['no_telepon']; ?>" >
                </div>
                 <div class="col-6">
                  <label for="inputAddress2" class="form-label">Email</label>
                   <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" >
                </div>
                <div class="col-6">
              <label for="inputCity" class="form-label">Judul Tugas Akhir</label>
           <input type="text" name="judul_TA" id="inputEmail5" class="form-control" value="<?php echo $row['judul_TA']; ?>" >
            </div>
             <div class="col-md-6">
                  <label for="inputState" class="form-label">Dosen Pembimbing 1</label>
                 <select class="form-select" aria-label="Default select example" name="dosen_pembimbing_1">
                     <?php
                               foreach ($Dospem1 as $jk){
                                echo "<option value='$jk' ";
                                echo $row['dosen_pembimbing_1']==$jk?'selected="selected"':'';
                                echo ">$jk</option>";
                            }
                             ?>
                  </select>
                </div>
                 <div class="col-md-6">
                  <label for="inputState" class="form-label">Dosen Pembimbing 2</label>
                 <select class="form-select" aria-label="Default select example" name="dosen_pembimbing_2">
                     <?php
                               foreach ($Dospem2 as $j){
                                echo "<option value='$j' ";
                                echo $row['dosen_pembimbing_2']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                             ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Total SKS</label>
                  <input type="text" class="form-control" id="inputPassword5" value="<?php echo $row['total_sks']; ?>" name="total_sks">
                </div>
                  <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Tanggal Wisuda</label>
                  <input type="date" class="form-control" id="inputPassword5" value="<?php echo $row['tanggal_wisuda']; ?>" name="tanggal_wisuda">
                </div>
                 <div class="col-6">
              <label for="inputCity" class="form-label">IPK</label>
            <input type="text" name="ipk" id="inputEmail5" class="form-control" value="<?php echo $row['ipk']; ?>">
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
</main>
<?php
include 'footer.php';
?>

