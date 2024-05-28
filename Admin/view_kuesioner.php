<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TRACER STUDY AKPARDA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
    if(isset($_GET['id_tracer'])){
        $Nim    =$_GET['id_tracer'];
    }
    else {
        die ("Tidak ada data!");    
    }
    include "../db/koneksi.php";
    $query     =mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE id_tracer='$Nim'");
    $result    =mysqli_fetch_array($query);
?>

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Pengisian Kuesioner Alumni</h1>
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
                  <h5 class="card-title">Identitas Alumni</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Status Alumni</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['P1']?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nim</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['nim']?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['nama_lengkap']?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['email']?></div>
                  </div>  
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Wisuda</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('d-m-Y', strtotime($result["tanggal_wisuda"]));?></div>
                  </div> 
                  </div>              
                  </div>                
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
 <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body"> 
             <h5 class="card-title">Data Hasil Kuesioner Alumni </h5>
                <div class="row mb-3">
                  <div class="col-sm-12">
              <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                 <div class="col-12">
                  <label for="inputEmail4" class="form-label">P1. Status Alumni Saat Ini :</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P1']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">P2. Ketikkan nama tempat bekerja anda sekarang</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P2']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">P3. Jenis Jabatan/posisi dalam pekerjaan Anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['P3']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">P4. Bulan dan tahun mulai bekerja</label>
                  <input type="text" class="form-control" id="inputAddress" value="<?php echo $result["P4"];?>" disabled>
                </div>
                                <div class="col-12">
                  <label for="inputNanme4" class="form-label">P5. Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan ini ?</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['P5']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">P6. Secara umum, apa pertimbangan utama saudara dalam memilih pekerjaan terakhir/sekarang ?</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P6']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">P7. Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan terakhir/sekarang ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['P7']?>" disabled>
                </div>
                                <div class="col-12">
                  <label for="inputNanme4" class="form-label">P8. Bulan dan tahun anda mendapatkan pekerjaan pertama setelah lulus Akparda ?</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result["P8"];?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">P9. Ketikkan Nama tempat bekerja pertama kali
*</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P9']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">P10. Jabatan/posisi terakhir dalam pekerjaan pertama ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['P10']?>" disabled>
                </div>
                                <div class="col-12">
                  <label for="inputNanme4" class="form-label">P11. Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan pertama ?</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['P11']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label"> P12. Apa jenjang pendidikan yang anda ambil ?</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P12']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">P13. Dimana Anda kuliah ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['P13']?>" disabled>
                </div>
                                <div class="col-12">
                  <label for="inputNanme4" class="form-label">  P14. Tanggal Berapa Anda Mulai Kuliah ?</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo date('d-m-Y', strtotime($result["P14"]));?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label"> P15. Apa alasan utama Anda kuliah lagi?</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['P15']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label"> P16. Pada saat baru lulus, sebenarnya di mana saudara ingin bekerja ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['P16']?>" disabled>
                </div><hr>
                                <div class="col-12">
                  <label for="inputNanme4" class="form-label">1. Bagaimana kemampuan Pengetahuan Umum Anda ?</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['opsi_1']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">2. Bagaimana kemampuan Bahasa Inggris anda ?</label>
                  <input type="text" class="form-control" id="inputEmail4" value="<?php echo $result['opsi_2']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">3. Bagaimana kemampuan Ketrampilan internet anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_2']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">4. Bagaimana kemampuan Ketrampilan komputer anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_4']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">5. Bagaimana Kemampuan belajar anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_5']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">6. Bagaimana kemampuan berkomunikasi anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_6']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">7. Bagaimana kemampuan anda Bekerja di bawah tekanan ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_7']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">8. Bagaimana kemampuan adaptasi anda ? </label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_8']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">9. Bagaimana Loyalitas pada perusahaan ? </label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_9']?>" disabled>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">10. Bagaimana kemampuan Kepemimpinan anda ? </label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_10']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">11. Bagaimana kemampuan anda dalam memegang tanggungjawab ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_11']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">12. Bagaimana kemampuan Inisiatif anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_12']?>" disabled>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">13. Bagaimana kemampuan Toleransi anda ?</label>
                  <input type="text" class="form-control" id="inputPassword4" value="<?php echo $result['opsi_13']?>" disabled>
                </div><hr>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">Pesan Anda</label>
                   <textarea class="form-control" name="pesan" id="editor"  rows="10" class="form-control" disabled><?=$result['pesan']?></textarea>
                </div>
                 <div class="col-12">
                  <label for="inputPassword4" class="form-label">Kesan Anda</label>
                   <textarea class="form-control" name="kesan" id="editor"  rows="10" class="form-control" disabled><?=$result['kesan']?></textarea>
                </div>
                <div class="text-center">
                  <a href="Hasil_kuesioner.php" class="btn btn-primary">Kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                 
                
  </main><!-- End #main -->
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>
<?php include'footer.php';  ?>




