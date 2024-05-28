<?php
include "header.php";
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>History Kuesioner</h1>
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
$user=$_SESSION["id_alumni"];
$sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rows=mysqli_fetch_array($sql2);
//tampilkan email alumni
$email=$rows['email'];
?>
      <?php
    if(isset($_GET['id_tracer'])){
        $last_id    =$_GET['id_tracer'];
    }
    else {
        die ("Database error!");    
    }
    include '../db/koneksi.php'; 
    $query    =mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim where id_tracer='$last_id'");
    $result    =mysqli_fetch_array($query);
    $id = $result['id_tracer'];
    $firstname = $result['P1'];
    $lastname = $result['P2'];
    $email = $result['P3'];
     $nama = $result['nama_lengkap'];
      $emails = $result['email'];
?>
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">History Kuesioner Anda</h5>
                 <span>Note : *Data Hasil Kuesioner Anda Secara Keseluruhan*</span><br><hr> 

              <!-- Vertical Form -->
              <form class="row g-3">
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['id_tracer']?>" hidden>
                 <div class="col-6">
                  <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['nama_lengkap']?>" disabled>
                </div>
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Email</label>
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['email']?>" disabled>
                </div><hr>
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
                  <input type="text" class="form-control" id="inputAddress" value="<?php echo $result['P4']?>" disabled>
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
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['P8']?>" disabled>
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
                  <input type="text" class="form-control" id="inputNanme4" value="<?php echo $result['P14']?>" disabled>
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
                  <a href="dashboard.php" class="btn btn-primary">Kembali</a>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
