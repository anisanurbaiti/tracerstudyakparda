<?php
include "header.php";
?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>History Kuesioner Saya</h2> 
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
<?php
    if(isset($_GET['id_tracer'])){
        $last_id    =$_GET['id_tracer'];
    }
    else {
        die ("Database error!");    
    }
     include "db/koneksi.php"; 
    $query    =mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim where id_tracer='$last_id'");
    $result    =mysqli_fetch_array($query);
    $id = $result['id_tracer'];
    $firstname = $result['P1'];
    $lastname = $result['P2'];
    $email = $result['P3'];
?>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>History Kuesioner TRACER STUDY Anda</h3>
            <div class="col-md-2">
                  <label for="inputEmail5" class="form-label">ID Tracer</label>
                 <input type="text" name="nim" class="form-control" value="<?php echo $result['id_tracer']; ?>" readonly>
                </div>
            <span>Note : *Data Hasil Kuesioner Anda Secara Keseluruhan*</span><br>  
                <table class="table table-striped">
                  <tr>
                     <th rowspan="2">No</th>
                   <th rowspan="1">Deskripsi</th>
                   <th colspan="6">Responden Alumni</th>
                  </tr>
                 <tr>
                   <th></th>
                   <th></th>       
                </tr>   
                <tr>
                    <td>1</td>
                  <td>Dengan ini menginformasikan :</td>
                   <td><?php echo $result['P1']?></td>     
                </tr> 
                <tr>
                   <td>2</td>
                  <td>  Ketikkan nama tempat bekerja anda sekarang</td>
                   <td><?php echo $result['P2']?></td>                  
                </tr>
                <tr>
                   <td>3</td>
                  <td>Jenis Jabatan/posisi dalam pekerjaan Anda </td>
                   <td><?php echo $result['P3']?></td>                 
                </tr>  
                 <tr>
                   <td>4</td>
                  <td>Bulan dan tahun mulai bekerja</td>
                   <td><?php echo $result['P4']?></td>     
                </tr>  
                 <tr>
                   <td>5</td>
                  <td>Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan ini </td>
                   <td><?php echo $result['P5']?></td>          
                </tr>  
                 <tr>
                   <td>6</td>
                  <td>Secara umum, apa pertimbangan utama saudara dalam memilih pekerjaan terakhir/sekarang</td>
                   <td><?php echo $result['P6']?></td>      
                </tr>  
                 <tr>
                   <td>7</td>
                  <td> Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan terakhir/sekarang</td>
                   <td><?php echo $result['P7']?></td>              
                </tr> 
                <tr>
                   <td>8</td>
                  <td> Bulan dan tahun anda mendapatkan pekerjaan pertama setelah lulus Akparda</td>
                   <td><?php echo $result['P8']?></td>             
                </tr>
                <tr>
                   <td>9</td>
                  <td> Ketikkan Nama tempat bekerja pertama kali</td>
                   <td><?php echo $result['P9']?></td>                  
                </tr>
                <tr>
                   <td>10</td>
                  <td>P10. Jabatan/posisi terakhir dalam pekerjaan pertama</td>
                   <td><?php echo $result['P10']?></td>                
                </tr>  
                 <tr>
                   <td>11</td>
                  <td>Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan pertama</td>
                   <td><?php echo $result['P11']?></td>        
                </tr>
                 <tr>
                   <td>12</td>
                  <td> Apa jenjang pendidikan yang anda ambil ?</td>
                   <td><?php echo $result['P12']?></td>          
                </tr>
                 <tr>
                   <td>13</td>
                  <td> Dimana Anda kuliah ?</td>
                   <td><?php echo $result['P13']?></td>          
                </tr>
                 <tr>
                   <td>14</td>
                  <td> Bulan dan tahun mulai pendidikan</td>
                   <td><?php echo $result['P14']?></td>            
                </tr>  
                 <tr>
                   <td>15</td>
                  <td>Apa alasan utama Anda kuliah lagi?</td>
                   <td><?php echo $result['P15']?></td>         
                </tr> 
                 <tr>
                   <td>16</td>
                  <td>Pada saat baru lulus, sebenarnya di mana saudara ingin bekerja ?</td>
                   <td><?php echo $result['P16']?></td>            
                </tr> 

                 <tr>
                   <td>Op 1</td>
                  <td> Bagaimana kemampuan Pengetahuan Umum Anda?</td>
                   <td><?php echo $result['opsi_1']?></td>          
                </tr>   
                 <tr>
                   <td>Op 2</td>
                  <td>Bagaimana kemampuan Bahasa Inggris anda?  </td>
                   <td><?php echo $result['opsi_2']?></td>            
                </tr> 
                 <tr>
                   <td>Op 3</td>
                  <td>  Bagaimana kemampuan Ketrampilan internet anda?/td>
                   <td><?php echo $result['opsi_3']?></td>       
                </tr> 
                 <tr>
                   <td>Op 4</td>
                  <td>Bagaimana Kemampuan belajar anda? </td>
                   <td><?php echo $result['opsi_4']?></td>         
                </tr> 
                 <tr>
                   <td>Op 5</td>
                  <td>Bagaimana Kemampuan belajar anda? </td>
                   <td><?php echo $result['opsi_5']?></td>       
                </tr> 
                 <tr>
                   <td>Op 6</td>
                  <td>Bagaimana kemampuan berkomunikasi anda ?</td>
                   <td><?php echo $result['opsi_6']?></td>          
                </tr> 
                 <tr>
                   <td>Op 7</td>
                  <td>Bagaimana kemampuan anda Bekerja di bawah tekanan ?</td>
                   <td><?php echo $result['opsi_7']?></td>   
                </tr> 
                 <tr>
                   <td>Op 8</td>
                  <td>Bagaimana kemampuan adaptasi anda? </td>
                   <td><?php echo $result['opsi_8']?></td>               
                </tr> 
                 <tr>
                   <td>Op 9</td>
                  <td>Bagaimana Loyalitas pada perusahaan ? </td>
                   <td><?php echo $result['opsi_9']?></td>    
                </tr> 
                 <tr>
                   <td>Op 10</td>
                  <td> Bagaimana kemampuan Kepemimpinan anda?  </td>
                   <td><?php echo $result['opsi_10']?></td>
               </tr>  
                <td>Op 11</td>
                  <td> Bagaimana kemampuan anda dalam memegang tanggungjawab ? </td>
                   <td><?php echo $result['opsi_11']?></td>
               </tr>  
               <td>Op 12</td>
                  <td> Bagaimana kemampuan Inisiatif anda?</td>
                   <td><?php echo $result['opsi_12']?></td>
              </tr>  
              <td>Op 13</td>
                  <td> Bagaimana kemampuan Toleransi anda?</td>
                   <td></td>
              </tr>  
                 <tr>
                   <td>14</td>
                  <td>Pesan</td>
                   <td><?php echo $result['pesan']?></td>    
                </tr> 
                 <tr>
                   <td>15</td>
                  <td>Kesan</td>
                   <td><?php echo $result['kesan']?></td>  
                </tr>  
              </table> 
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
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
