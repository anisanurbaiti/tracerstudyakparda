<?php  
include "header.php";
?>
<?php
include "db/koneksi.php"; 
//mengambil data email_perusahaan
$email          =$_GET['email_perusahaan'];
$query          =mysqli_query($con, "SELECT * FROM tb_perusahaan WHERE email_perusahaan='$email'");
$rows           =mysqli_fetch_array($query);
$emaill         = $rows['email_perusahaan'];
$pass           = $rows['password'];
?>
<style type="text/css">
body{
font-family: sans-serif;
background-image: url('images/header.jpg');
background-repeat: no-repeat;
background-size: cover;
}
h1{
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}
.tulisan_login{
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
}
.kotak_login{
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 90px auto;
  border-radius: 14px;
  padding: 30px 20px;
  box-shadow: 0px 0px;
}
label{
  font-size: 11pt;
}
.form_login{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}
.tombol_login{
  background: blue;
  color: white;
  font-size: 13pt;
  width: 100%;
  border: none;
  border-radius: 10px;
  padding: 10px 20px;
}
.link{
  color: blue;
  text-decoration: none;
  font-size: 10pt;
  text-align: bold;
}
</style> 
<main id="main">
<div class="kotak_login">
  <div class="card-header"><h3 class="text-center font-weight-light my-2">Ubah Password</h3></div>
   <br> 
    <form action="lupa_password_update_save.php" method="post"> 
       <input class="form-control py-2" id="email_perusahaan" name="email_perusahaan" type="text" value="<?php echo $rows['email_perusahaan'];?>" hidden>
       <div class="form-group">
          <label class="small mb-1" for="inputEmailAddress">Password Baru</label>
          <input class="form-control py-2" id="password" name="password" type="text" placeholder="Password Baru"  required/>
        </div>
         <div class="form-group">
          <label class="small mb-1" for="inputEmailAddress">Konfirmasi Password</label>
          <input class="form-control py-2" id="Repassword" name="Repassword" type="text" placeholder="Konfirmasi Password"  required/>
        </div>
        <br>      
       <button type="submit" name="submit" class="tombol_login">Reset Password</button>  
      </form>
    </div> 
  </main><!-- End #main -->
    <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AKPARDA Yogyakarta</h3>
            <p>
              Jalan Bintaran Kidul No.12 Wirogunan, Mergangsan, Kota Yogyakarta. 55151 <br><br>
              <strong>Telepone:</strong> (0274) 376830<br>
              <strong>Email:</strong>info@akparda.ac.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

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
  </footer>
  <script src="./script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

