<?php
include "header.php";
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
<style type="text/css">
body{
  font-family: sans-serif;
   background-image: url('images/header.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    }

.signup_v4 .social-area {
    text-align: center;
    padding-top: 14px;
}
.signup_v4 .social-area .title {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 600;
    display: inline-block;
    color: #007bff;
    position: relative;
}
.signup_v4 .social-area .text {
    font-size: 17px;
    font-weight: 400;
    color: #143250;
}
.signup_v4 .social-area .title::before {
    position: absolute;
    content: '';
    width: 40px;
    height: 1px;
    background: rgba(0, 0, 0, .2);
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 100%;
    margin-left: 7px;
}
.signup_v4 .social-area .title::after {
    position: absolute;
    content: '';
    width: 40px;
    height: 1px;
    background: rgba(0, 0, 0, .2);
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 100%;
    margin-right: 7px;
}
.signup_v4 .nav-tabs .nav-link.active {
    background: #007bff;
}
.signup_v4 .nav-tabs .nav-link {
    background: #143250;
}
.signup_v4 .nav-tabs .nav-link {
    border: 0;
    margin: 0;
    padding: 10px 0;
    text-align: center;
    border-radius: 0;
    color: #fff;
}
.signup_v4 .nav-tabs li.nav-item {
    width: 50%;
}
.signup_v4 .card-body {
    padding: 0px;
}
.signup_v4 .card-body .tab-content {
    padding: 0 1.25rem 1.75em;
}
</style>
<main id="main">
     <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pendaftaran Akun</h2> 
      </div>
    </div><!-- End Breadcrumbs -->
<section id="about" class="about">
<div class="container" data-aos="fade-up">
   <div class="col-lg-12">
    <div class="card">
  <div class="card signup_v4 mb-30">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Register Perusahaan</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register Alumni</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Register Perusahaan</h4>
                                   <form action="register_perusahaan_save.php" method="post" enctype="multipart/form-data" class="row g-3" id="formPassword">
                                     <input type="text" class="form-control" name="tanggal_daftar" value="<?php echo date('d-m-Y');?>" hidden>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="inputEmail5" name="nama_perusahaan" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Bidang Usaha</label>
                  <select id="inputState" class="form-select" name="bidang_usaha">
                    <option selected>Pilih...</option>
                    <option value="Perhotelan">Perhotelan</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Transportasi">Transportasi</option>
                    <option value="Pembiayaan">Pembiayaan</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Pariwisata">Pariwisata</option>
                    <option value="Industri Tekstil">Industri Tekstil</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                  </select>
                </div>
                 <div class="col-6">
                  <label for="inputAddress5" class="form-label">Deskripsi Bidang</label>
                   <textarea class="form-control" id="deskripsi_bidang" name="deskripsi_bidang" placeholer="Nim" rows="4" required></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Alamat</label>
                   <textarea class="form-control" id="alamat" name="alamat" placeholer="Nim" rows="4" required></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputAddress2" name="email_perusahaan" placeholer="Email Perusahaan" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">No Telepon</label>
                  <input type="text" class="form-control" id="exampleInputEmail" name="telepon"  required>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Alamat Website</label>
                   <input type="text" class="form-control" id="exampleInputEmail" name="website" required>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail" name="username" required>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Password (Minimal 8 Karakter)</label>
                  <input type="password" class="form-control" id="myInput" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password harus berupa angka, huruf kecil, huruf kapital, dan Minimal 8 Karakter"  required>
                </div>
               
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ulangi Password (Minimal 8 Karakter)</label>
                  <input type="password" class="form-control" id="myInput2" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password harus berupa angka, huruf kecil, huruf kapital, dan Minimal 8 Karakter"  required>
                </div>
                 <div class="col-md-6">
                      <div class="form-check">
                       <input class="form-check-input" type="checkbox" onclick="myFunction()" name="remember" value="true">
                        <label class="form-check-label" for="rememberMe">Show</label>
                      </div>
                    </div>

                 <div class="col-md-6">
                   <div class="form-check">
                 <input class="form-check-input" type="checkbox" onclick="myFunction1()" name="remember" value="true">
                  <label class="form-check-label" for="rememberMe">Show</label>
                </div>
              </div>
                 <div class="col-md-6">
                  <input type="text" class="form-control" id="exampleInputPassword" name="status" value="Pending" hidden>
                </div>
                <div class="text-center">
                  <input type="submit" name="save" class="btn btn-primary" value="Daftar">
                  <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
             </form>
           </div>
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Register Alumni</h4>
                                    <form action="register_alumni_save.php" method="post" enctype="multipart/form-data" class="row g-3" id="formPassword1">
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Nim</label>
                  <input type="text" class="form-control" id="inputEmail5" name="nim" onkeypress="return hanyaAngka(event)" required>
                </div>
                 <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputEmail5" name="nama_lengkap"  required>
                </div>
                 <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="inputEmail5" name="tempat_lahir"  required>
                </div>
                 <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control border-input" name="tanggal_lahir" Tanggal Lahir" value="<?php echo date('Y-m-d');?>"/>
                </div>
                 <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Jenis Kelamin</label>
                  <div class="col-md-10 pt-1">
                  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
                  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                                </div>
                                            </div>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Agama</label>
                  <div class="col-md-10 pt-1">
                  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" id="inlineRadio1" value="Islam">
                  <label class="form-check-label" for="inlineRadio1">Islam</label>
                  </div><br>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="inlineRadio2" value="Kristen">
                  <label class="form-check-label" for="inlineRadio2">Kristen</label>
                </div><br>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="inlineRadio2" value="Katholik">
                  <label class="form-check-label" for="inlineRadio2">Katholik</label>
                </div><br>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="inlineRadio2" value="Hindu">
                  <label class="form-check-label" for="inlineRadio2">Hindu</label>
                </div><br>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="agama" id="inlineRadio2" value="Budha">
                  <label class="form-check-label" for="inlineRadio2">Budha</label>
                </div><br>
            </div>
                </div>
                 <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Nama Orangtua</label>
                  <input type="text" class="form-control" id="exampleInputEmail" name="nama_orangtua" required>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Alamat Orangtua</label>
                  <textarea class="form-control" id="exampleInputEmail" name="alamat_orangtua"  rows="4" required></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Alamat Mahasiswa</label>
                   <textarea class="form-control" id="exampleInputEmail" name="alamat_mahasiswa"  rows="4" required></textarea>
                </div>
                 <div class="col-md-3">
                  <label for="inputCity" class="form-label">No Telepon</label>
                  <input type="text" class="form-control" id="exampleInputEmail" name="no_telepon"  required>
                </div>
                <div class="col-3">
                  <label for="inputAddress2" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputAddress2" name="email"  required>
                </div>

                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Password (Minimal 8 Karakter)</label>
                  <input type="password" class="form-control" id="input1" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password harus berupa angka, huruf kecil, huruf kapital, dan Minimal 8 Karakter" required>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ulangi Password (Minimal 8 Karakter)</label>
                  <input type="password" class="form-control" id="input2" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password harus berupa angka, huruf kecil, huruf kapital, dan Minimal 8 Karakter" required>
                </div>
                 <div class="col-md-6">
                      <div class="form-check">
                       <input class="form-check-input" type="checkbox" onclick="myFunction2()" name="remember" value="true">
                        <label class="form-check-label" for="rememberMe">Show</label>
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-check">
                       <input class="form-check-input" type="checkbox" onclick="myFunction3()" name="remember" value="true">
                        <label class="form-check-label" for="rememberMe">Show</label>
                      </div>
                    </div>
                                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Judul Tugas Akhir</label>
                  <input type="text" class="form-control" id="exampleInputEmail" name="judul_TA"  required>
                </div>
                                <div class="col-md-6">
                  <label for="inputState" class="form-label">Dosen Pembimbing 1</label>
                  <select id="inputState" class="form-select" name="dosen_pembimbing_1">
                    <option selected>Pilih...</option>
                    <option value="I Ketut Suardana, S.ST. M.Sc">I Ketut Suardana, S.ST. M.Sc</option>
                      <option value="Nina Noviastuti, SP, M.Sc">Nina Noviastuti, SP, M.Sc</option>
                      <option value="Neneng Nurhayati, S. Sos, M.Si">Neneng Nurhayati, S. Sos, M.Si</option>
                      <option value="Aditya Yuwana Nawing, S.T, M.Sc">Aditya Yuwana Nawing, S.T, M.Sc</option>
                      <option value="Winda Rosita Dewi, S.S., M.A">Winda Rosita Dewi, S.S., M.A</option>
                      <option value="Drs. H Kukuh Setyoadmodjo">Drs. H Kukuh Setyoadmodjo</option>
                        <option value="Humaera Silvia Maristy, S.Pd, M.Pd">Humaera Silvia Maristy, S.Pd, M.Pd</option>

                  </select>
              </div>
                   <div class="col-md-6">
                  <label for="inputState" class="form-label">Dosen Pembimbing 2</label>
                  <select id="inputState" class="form-select" name="dosen_pembimbing_2">
                    <option selected>Pilih...</option>
                    <option value="I Ketut Suardana, S.ST. M.Sc">I Ketut Suardana, S.ST. M.Sc</option>
                    <option value="Nina Noviastuti, SP, M.Sc">Nina Noviastuti, SP, M.Sc</option>
                    <option value="Neneng Nurhayati, S. Sos, M.Si">Neneng Nurhayati, S. Sos, M.Si</option>
                    <option value="Aditya Yuwana Nawing, S.T, M.Sc">Aditya Yuwana Nawing, S.T, M.Sc</option>
                    <option value="Winda Rosita Dewi, S.S., M.A">Winda Rosita Dewi, S.S., M.A</option>
                    <option value="Drs. H Kukuh Setyoadmodjo">Drs. H Kukuh Setyoadmodjo</option>
                    <option value="Humaera Silvia Maristy, S.Pd, M.Pd">Humaera Silvia Maristy, S.Pd, M.Pd</option>
                  </select>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Total SKS</label>
                 <input type="text" name="total_sks" id="exampleInputEmail" class="form-control"  required>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">Tanggal Wisuda</label>
                <input type="date" class="form-control border-input" name="tanggal_wisuda"  value="<?php echo date('Y-m-d');?>"/>
                </div>
                 <div class="col-md-6">
                  <label for="inputCity" class="form-label">IPK</label>
                <input type="text" name="ipk" id="exampleInputEmail"  class="form-control" required>
                </div>
                <div class="text-center">
                  <input type="submit" name="save" class="btn btn-primary" value="Daftar">
                  <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form>             
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
           AKPARDA Yogyakarta <strong></strong>. 2023
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">AKPARDA Yogyakarta</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script>
      //show password perusahaan 1
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
        }
         //show password perusahaan 1
        function myFunction1() {
        var xx = document.getElementById("myInput2");
        if (xx.type === "password") {
        xx.type = "text";
        } else {
        xx.type = "password";
        }
        }
         //show password alumni
         function myFunction2() {
        var xx2 = document.getElementById("input1");
        if (xx2.type === "password") {
        xx2.type = "text";
        } else {
        xx2.type = "password";
        }
        }
         //show password alumni
         function myFunction3() {
        var xx3 = document.getElementById("input2");
        if (xx3.type === "password") {
        xx3.type = "text";
        } else {
        xx3.type = "password";
        }
        }
        //validasi form nim hanya angka
        function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
}
 //validasi password perusahaan
  document.getElementById('formPassword')
  .addEventListener('submit', function(e) {
    var password = document.getElementById('password').value;
    if (password.length < 8) {
      alert('Kata Sandi harus minimal 8 karakter!');
      e.preventDefault(); // Menghentikan pengiriman form
    }
  });
   //validasi password form alumni
  document.getElementById('formPassword1')
  .addEventListener('submit', function(e) {
    var password = document.getElementById('password').value;
    if (password.length < 8) {
      alert('Kata Sandi harus minimal 8 karakter!');
      e.preventDefault(); // Menghentikan pengiriman form
    }
  });
   </script>
  

