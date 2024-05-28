<?php  
include "header.php";
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
  margin: 80px auto;
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
  <div class="card-header"><h3 class="text-center font-weight-light my-2">LOGIN</h3></div>
    <form action="login_cek.php" method="post" onsubmit="return validate_form();"> 
       <div class="form-group">
          <label class="small mb-1" for="inputEmailAddress">Email</label>
          <input class="form-control py-2" id="email" name="email" type="email" required/>
      </div>
        <div class="form-group">
          <label class="small mb-1" for="inputEmailAddress">Password</label>
          <input class="form-control py-2" id="myInput" name="password" type="password"  value="" required/>
      </div>
       <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="myFunction()" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Show</label>
                      </div>
                    </div>
       <left><a href="lupa_password.php" class="link">Lupa Password ?</a>
      </left>
       <div class="form-group">
       <div class="g-recaptcha" name="g-recaptcha" id="g-recaptcha" data-sitekey="6LeGaeopAAAAAI-UouDzu_vjC3nzlP-cLnzqVg2G"></div>
     </div>
       <center> 
       <br>      
      <input type="submit" class="tombol_login" id="login" name="login" value="Login" onclick="login()">
      </center>
      <br>
      <center>
        Belum Punya Akun ? <a href="register.php" class="link">Buat Akun</a>
      </center>
      <br/>
    </form> 
  </div>
  
  </main><!-- End #main -->
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
   <script>
    //melihat password
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
        }
        //validasi captcha ketika belum di centang
        function validate_form() {

    const recaptcha_box_checked = (grecaptcha.getResponse()) ? true : false;

    if (recaptcha_box_checked) { 
        return true;
    }
    else {
        alert("Anda harus mencentang kotak 'Saya Bukan Robot !'");
        return false;
    }
}
   </script>
  <script src="./script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


