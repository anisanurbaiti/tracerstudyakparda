<?php
include 'header.php';
?>
<?php 
session_start();
include '../db/koneksi.php';
if(!isset($_SESSION['id_alumni'])){
  header('location:../login.php');
}
$VarEmail      =$_SESSION["id_alumni"];
// $VarNim        =$_SESSION["nomor_nim"];
// $VarUsername  =$_SESSION["nama"];
// $Tempatlahir  =$_SESSION["tempat_lahir"];
// $Tanggallahir =$_SESSION["tanggal_lahir"];
// $Jenkel       =$_SESSION["jenis_kelamin"];
// $Agama        =$_SESSION["agama"];
// $Namaortu     =$_SESSION["nama_orangtua"];
// $Alamatortu   =$_SESSION["alamat_orangtua"];
// $Alamatmhs    =$_SESSION["alamat_mahasiswa"];
// $Notelp       =$_SESSION["no_telepon"];
// $JudulTA      =$_SESSION["judul_TA"];
// $Dospem1      =$_SESSION["dosen_pembimbing_1"];
// $Dospem2      =$_SESSION["dosen_pembimbing_1"];
// $TotalSKS     =$_SESSION["total_sks"];
// $TanggalWisuda=$_SESSION["tanggal_wisuda"];
// $Ipk          =$_SESSION["ipk"];

//menampilkan data user yang sedang login
$user=$_SESSION["id_alumni"];
$sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rows=mysqli_fetch_array($sql2);
?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Ganti Password</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <?php
include "../db/koneksi.php"; 
//mengambil data email_perusahaan
$nim          =$_GET['nim'];
$query          =mysqli_query($con, "SELECT * FROM tb_alumni WHERE nim='$nim'");
$rows           =mysqli_fetch_array($query);
$nimm         = $rows['nim'];
$pass           = $rows['password'];
?>
    <section class="section profile">
      <div class="row">   
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">

 <form action="ubah_password_save.php" method="post" class="row g-3">
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Ganti Password</h5>
                   <hr>
                    <div>
               <input type="text" name="nim" value="<?php echo $rows['nim']; ?>" hidden>
                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                      <div class="col-md-3 col-lg-3">
                          <input type="password" name="password_lama" id="password_lama" class="form-control" value=""/ required>
                      </div>
                    </div>
                 <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-3 col-lg-3">
                         <input class="form-check-input" type="checkbox" onclick="myFunction()" name="remember" value="true">
                          <label class="form-check-label" for="gridCheck">
                      Show
                      </label>
                      </div>
                    </div>
                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                      <div class="col-md-3 col-lg-3">
                          <input type="password" name="password" id="password_baru" class="form-control" value=""/ required>
                      </div>
                    </div>
                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-3 col-lg-3">
                         <input class="form-check-input" type="checkbox" onclick="myFunction1()" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                      Show
                      </label>
                      </div>
                    </div>
                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Password </label>
                      <div class="col-md-3 col-lg-3">
                          <input type="password" name="konfirmasi_password" class="form-control" id="konfirmasi_password" value=""/ required>
                      </div>
                    </div> 
                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-3 col-lg-3">
                         <input class="form-check-input" type="checkbox" onclick="myFunction2()" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                      Show
                      </label>
                      </div>
                    </div>
            <div class="text-center">
            <input type="submit" name="save" class="btn btn-primary" value="Ubah Password">
           </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </section>
</main>
 <script>
        function myFunction() {
        var x = document.getElementById("password_lama");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
        }
         function myFunction1() {
        var x1 = document.getElementById("password_baru");
        if (x1.type === "password") {
        x1.type = "text";
        } else {
        x1.type = "password";
        }
        }
         function myFunction2() {
        var x2 = document.getElementById("konfirmasi_password");
        if (x2.type === "password") {
        x2.type = "text";
        } else {
        x.type = "password";
        }
        }
   </script>
<?php include 'footer.php';  ?>