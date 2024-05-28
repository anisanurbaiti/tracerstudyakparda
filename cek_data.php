<?php
include "header.php";
?>
<?php include "db/koneksi.php"; ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Cek Data Kuesioner Tracer Study</h2> 
        <p>Masukkan Email Anda Dengan Benar</p>
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/login.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
         <div class="container">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-12">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-2">Cek Data Anda</h3></div>
                                     <form action="cek_data_save.php" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <form>
                                           <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-2" onkeyup="isi_otomatis()" id="email" name="email" type="text" placeholder="Masukkan Email" />
                                            </div>
                                          <!--  <div class="form-group"> -->
                                                <input class="form-control py-2" name="id_tracer" type="text" id="id_tracer" hidden>
                                           <!--  </div> -->
                                            <br>
                                              <div class="form-group">                                           
                                             <input type="submit" name="save" class="btn btn-success btn-user btn-block" value="Cek Data">
                                            </div>
                                        </form>
                                    </div>
                                </div>
            </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
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
  </footer><!-- End Footer -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var email = $("#email").val();
                $.ajax({
                    url: 'cek_data_proses.php',
                    data:"email="+email ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#id_tracer').val(obj.id_tracer);
                });
            }
        </script>

