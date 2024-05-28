<?php
include "header.php";
?>
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
         <h2>Detail Data Alumni</h2> 
      </div>
    </div><!-- End Breadcrumbs -->
     <section id="about" class="about">
        <?php
    if(isset($_GET['id_tracer'])){
        $idtracer    =$_GET['id_tracer'];
    }
    else {
        die ("Database error!");    
    }
     include "db/koneksi.php"; 
    $query    =mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE id_tracer='$idtracer'");
    $result    =mysqli_fetch_array($query);
?>
      <div class="container emp-profile">
            <form method="post">
                <div class="row">
                     <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <hr>
                                <h3>Identitas Alumni</h3>
                                <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Nama Lengkap</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['nama_lengkap']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Nim</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['nim']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Jenis Kelamin</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['jenis_kelamin']?></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Judul Tugas Akhir</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['judul_TA']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Tanggal Wisuda</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo date('d-m-Y', strtotime($result ["tanggal_wisuda"]));?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                               <b> <label>Status Alumni</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P1']?></p>
                                            </div>
                                        </div>
                                         <hr>
                                        <h3>Data Kuesioner</h3>
                                         <hr>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Tempat Bekerja</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P2']?></p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Posisi/Jabatan Kerja</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P10']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Pendapatan Perbulan</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P11']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Jenjang Pendidikan yang diambil</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P12']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Nama Perguruan Tinggi</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P13']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Tanggal Mulai Lanjut Kuliah</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['P14']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Pesan</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['pesan']?></p>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <b><label>Kesan</label></b>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['kesan']?></p>
                                            </div>
                                        </div>
                                         <hr>
                                         <div class="news-buttons">
                    <a href="alumni.php" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                            </div>
                             <hr>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
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
