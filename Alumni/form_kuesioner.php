<?php
include 'header.php';
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<main id="main" class="main">
 <div class="pagetitle">
      <h1>Formulir Kuesioner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
<section class="section">
      <div class="row">
        <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
              <h3 class="card-title">Formulir Kuesioner</h3><br>
    <!-- batas tag pembuka -->
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
 <div class="container">
    <div class="row py-12">
      <div class="col">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12">
       <form action="form_kuesioner_simpan.php" method="post" id="registration">
          <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
              <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Formulir Kuesioner</a>
              <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Kuesioner Opsional Bidang Kompetensi</a>
              <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Pesan dan Kesan</a>
            </div>
          </nav>
          <div class="tab-content py-6">
            <div class="tab-pane fade show active" id="step1"><br>
                <input type="text" class="form-control" name="nim" value="<?php echo $rows['nim']; ?>" hidden>           
               <input type="text" class="form-control" name="tanggal" value="<?php echo date('d-m-Y');?>" hidden>
               <div class="mb-3">
                <label for="field1">P1. Dengan ini menginformasikan :</label><br>
                <input type="radio" id="controlon" name="P1" value="Bekerja" checked> Bekerja (Untuk pertanyaan P2 Sampai P11)<br>
                <input type="radio" id="controloff" name="P1" value="Melanjutkan Kuliah"> Melanjutkan Kuliah (Untuk pertanyaan P12 Sampai P16)<br>
              </div>
                <h5>*Kuesioner Jika Bekerja*</h5>
              <div class="mb-3">
                <label for="field3">P2. Ketikkan nama tempat bekerja anda sekarang</label>
                <input id="P2" type="text" name="P2" placeholder="Jawaban Anda" class="form-control" disabled>
              </div>
                <div class="mb-3">
                <label for="field3">P3. Jenis Jabatan/posisi dalam pekerjaan Anda ?</label>
               <select id="P3" class="form-select" name="P3" disabled>
                <option></option>
                <option value="PNS">PNS</option>
                <option value="Dosen/Guru">Dosen/Guru</option>
                <option value="Pegawai Bank">Pegawai Bank</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Administrasi">Administrasi</option>
                <option value="Chef">Chef</option>
                <option value="Resepsionis">Resepsionis</option>
                <option value="Customer Services">Customer Services</option>
                <option value="General Manager">General Manager</option>
                <option value="Food & Beverage Manager">Food dan Beverage Manager</option>
                </select>
              </div>
               <div class="mb-3">
                <label for="field3">P4. Bulan dan tahun mulai bekerja</label>
                 <input id="P4" type="date" name="P4" class="form-control" disabled>
              </div>
              <div class="mb-3">
                <label for="field3">P5. Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan ini ?</label>
               <select id="P5" class="form-select" name="P5" disabled>
                <option></option>
                <option value="Facebook">Facebook</option>
                <option value="Website">Website</option>
                <option value="Saudara">Saudara</option>
                <option value="Teman">Teman</option>
                <option value="Dosen">Dosen</option>
                <option value="HRD Perusahaan">HRD Perusahaan</option>
                </select>
              </div>
               <div class="mb-3">
                <label for="field3">P6. Secara umum, apa pertimbangan utama saudara dalam memilih pekerjaan terakhir/sekarang ?</label><br>
          <input id="P6" type="radio" name="P6" value="Sesuai hati nurani" disabled> Sesuai hati nurani<br>
          <input id="P6" type="radio" name="P6" value="Sesuai bidang keilmuan" disabled> Sesuai bidang keilmuan <br>
          <input id="P6" type="radio" name="P6" value="Mendapatkan pengetahuan dan ketrampilan " disabled> Mendapatkan pengetahuan dan ketrampilan <br>
          <input id="P6" type="radio" name="P6" value="Mendapatkan pengalaman" disabled> Mendapatkan pengalaman <br>
          <input id="P6" type="radio" name="P6" value="Gaji memadai" disabled> Gaji memadai <br>
              </div>
              <div class="mb-3">
                <label for="field3">P7. Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan terakhir/sekarang?</label><br>
                <input id="P7" type="radio" name="P7" value="Rp 500.000 - Rp 1.000.000" disabled> Rp 500.000 - Rp 1.000.000<br>
          <input id="P7" type="radio" name="P7" value="Rp 1.000.000 - Rp 5.000.000" disabled> Rp 3.000.000 - Rp 5.000.000 <br>
          <input id="P7" type="radio" name="P7" value="Rp 5.000.000 - Rp 7.500.000 " disabled> Rp 5.000.000 - Rp 7.500.000 <br>
          <input id="P7" type="radio" name="P7" value="Rp 7.500.000 - Rp 10.000.000" disabled> Rp 7.500.000 - Rp 10.000.000 <br>
          <input id="P7" type="radio" name="P7" value="> Rp 10.000.000" disabled> > Rp 10.000.000 <br>
              </div>
               <div class="mb-3">
                <label for="field3">P8. Bulan dan tahun anda mendapatkan pekerjaan pertama setelah lulus Akparda ?</label>
                <input id="P8" type="date" name="P8" class="form-control" disabled>
              </div>
               <div class="mb-3">
                <label for="field3">P9. Ketikkan Nama tempat bekerja pertama kali
*</label>
                 <input id="P9" type="text" name="P9" placeholder="Jawaban Anda" class="form-control" disabled>
              </div>
               <div class="mb-3">
                <label for="field3">P10. Jabatan/posisi terakhir dalam pekerjaan pertama</label>
               <select id="P10" class="form-select" name="P10" disabled>
                <option></option>
                <option value="PNS">PNS</option>
                <option value="Dosen/Guru">Dosen/Guru</option>
                <option value="Pegawai Bank">Pegawai Bank</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Administrasi">Administrasi</option>
                <option value="Chef">Chef</option>
                <option value="Resepsionis">Resepsionis</option>
                <option value="Customer Services">Customer Services</option>
                <option value="General Manager">General Manager</option>
                <option value="Food & Beverage Manager">Food dan Beverage Manager</option>
                </select>
              </div>
               <div class="mb-3">
                <label for="field3">P11. Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan pertama ?</label>
               <br>
                 <input id="P11" type="radio" name="P11" value="Rp 500.000 - Rp 1.000.000" disabled> Rp 5.00.000 - Rp 1.000.000<br>
          <input id="P11" type="radio" name="P11" value="Rp 1.000.000 - Rp 5.000.000" disabled> Rp 3.000.000 - Rp 5.000.000 <br>
          <input id="P11" type="radio" name="P11" value="Rp 5.000.000 - Rp 7.500.000 " disabled> Rp 5.000.000 - Rp 7.500.000 <br>
          <input id="P11" type="radio" name="P11" value="Rp 7.500.000 - Rp 10.000.000" disabled> Rp 7.500.000 - Rp 10.000.000 <br>
          <input id="P11" type="radio" name="P11" value="> Rp 10.000.000" disabled> > Rp 10.000.000 <br>
              </div>
               <h5 class="form-group-heading">*Kuesioner Melanjutkan Pendidikan*</h5>
               <div class="mb-3">
                <label for="field3">P12. Apa jenjang pendidikan yang anda ambil ?</label><br>
                 <input id="P12" type="radio" name="P12" value="Sarjana Terapan (D4)" disabled> Sarjana Terapan (D4) <br>
          <input id="P12" type="radio" name="P12" value="Program Sarjana (S1)" disabled> Program Sarjana (S1) <br>
              </div>
               <div class="mb-3">
                <label for="field3">P13. Dimana Anda kuliah ?</label><br>
          <input id="P13" type="text" name="P13" placeholder="Jawaban Anda" class="form-control" disabled>
              </div>
              <div class="mb-3">
                <label for="field3">P14. Tanggal Berapa Anda Mulai Kuliah ?</label><br>
          <input id="P14" type="date" name="P14" class="form-control" disabled>
              </div>
               <div class="mb-3">
                <label for="field3">P15. Apa alasan utama Anda kuliah lagi?</label><br>
          <input id="P15" type="radio" name="P15" value="Mengisi Kekosongan Menganggur " disabled> Mengisi Kekosongan Menganggur <br>
          <input id="P15" type="radio" name="P15" value="Perlu Untuk Bekerja " disabled> Perlu Untuk Bekerja <br>
          <input id="P15" type="radio" name="P15" value="Merasa Ilmu Yang Dimiliki Masih Kurang " disabled> Merasa Ilmu Yang Dimiliki Masih Kurang <br>
          <input id="P15" type="radio" name="P15" value="Ada Kesempatan " disabled> Ada Kesempatan<br>
          <input id="P15" type="radio" name="P15" value="Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja) " disabled> Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja) <br>
          <input id="P15" type="radio" name="P15" value="Kurang Yakin Bila Hanya Di Bidang Ini Saja  " disabled> Kurang Yakin Bila Hanya Di Bidang Ini Saja <br>
              </div>
               <div class="mb-3">
                <label for="field3">P16. Pada saat baru lulus, sebenarnya di mana saudara ingin bekerja ?</label><br>
          <input id="P16" type="radio" name="P16" value="Hotel/Restoran" disabled> Hotel/Restoran <br>
          <input id="P16" type="radio" name="P16" value="Wiraswasta" disabled> Wiraswasta <br>
          <input id="P16" type="radio" name="P16" value="Pemerintah" disabled> Pemerintah <br>
              </div>
            </div>
            <div class="tab-pane fade" id="step2"><br>
              <div class="mb-3">
                <label for="field4">1. Bagaimana kemampuan Pengetahuan Umum Anda ?</label><br>
                <input type="radio" name="opsi_1" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_1" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_1" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_1" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field3">2. Bagaimana kemampuan Bahasa Inggris anda ?</label><br>
                <input type="radio" name="opsi_2" value="Kurang"> Kurang<br>
          <input type="radio" name="opsi_2" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_2" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_2" value="Tinggi"> Tinggi <br>
              </div>
              <div class="mb-3">
                <label for="field5">3. Bagaimana kemampuan Ketrampilan internet anda ?</label><br>
          <input type="radio" name="opsi_3" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_3" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_3" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_3" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">4. Bagaimana kemampuan Ketrampilan komputer anda ?</label><br>
 <input type="radio" name="opsi_4" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_4" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_4" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_4" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">5.Bagaimana Kemampuan belajar anda ?</label><br>
                  <input type="radio" name="opsi_5" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_5" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_5" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_5" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">6. Bagaimana kemampuan berkomunikasi anda ?</label><br>
<input type="radio" name="opsi_6" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_6" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_6" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_6" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">7. Bagaimana kemampuan anda Bekerja di bawah tekanan ?</label><br>
                <input type="radio" name="opsi_7" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_7" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_7" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_7" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">8. Bagaimana kemampuan adaptasi anda ? </label><br>
                <input type="radio" name="opsi_8" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_8" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_8" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_8" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">9. Bagaimana Loyalitas pada perusahaan ?</label><br>
                  <input type="radio" name="opsi_9" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_9" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_9" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_9" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5"> 10. Bagaimana kemampuan Kepemimpinan anda ? </label><br>
                <input type="radio" name="opsi_10" value="Kurang"> Kurang <br>
          <input type="radio" name="opsi_10" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_10" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_10" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">11.  Bagaimana kemampuan anda dalam memegang tanggungjawab ?</label><br>
                <input type="radio" name="opsi_11" value="Kurang"> Kurang<br>
          <input type="radio" name="opsi_11" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_11" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_11" value="Tinggi"> Tinggi <br>
              </div>
               <div class="mb-3">
                <label for="field5">12. Bagaimana kemampuan Inisiatif anda ?</label><br>
                <input type="radio" name="opsi_12" value="Kurang"> Kurang<br>
          <input type="radio" name="opsi_12" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_12" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_12" value="Tinggi"> Tinggi <br>
              </div>
              <div class="mb-3">
                <label for="textarea1">13. Bagaimana kemampuan Toleransi anda ?</label><br>
               <input type="radio" name="opsi_13" value="Kurang"> Kurang<br>
          <input type="radio" name="opsi_13" value="Cukup"> Cukup <br>
          <input type="radio" name="opsi_13" value="Sedang"> Sedang <br>
          <input type="radio" name="opsi_13" value="Tinggi"> Tinggi <br>
              </div>
            </div>
            <div class="tab-pane fade" id="step3">
              <br>
              <div class="mb-3">
                <label for="first_name">Pesan</label><br>
                <textarea name="pesan" rows="5" class="form-control" id="textarea1" required></textarea>
              </div>
               <div class="mb-3">
                <label for="field3">Kesan</label><br>
                 <textarea name="kesan" rows="5" class="form-control" id="textarea1" required></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Sebelumnya</button></div>
            <div class="col-auto">
              <button type="button" class="btn btn-primary" data-enchanter="next">Selanjutnya</button>
<!--               <button type="submit" name="simpan" class="btn btn-primary" data-enchanter="finish">Simpan</button> -->
               <input type="submit" name="simpan" class="btn btn-primary" data-enchanter="finish" value="Selesai">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--tag penutup-->
    </div>
  </div>
</div>
</div>
</section>
</main>
 <!-- JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- JavaScript for validations only -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <!-- Our script! :) -->
<script src="enchanter.js"></script>
 <script>
    var registrationForm = $('#registration');
    var formValidate = registrationForm.validate({
      errorClass: 'is-invalid',
      errorPlacement: () => false
    });

    const wizard = new Enchanter('registration', {}, {
      onNext: () => {
        if (!registrationForm.valid()) {
          formValidate.focusInvalid();
          return false;
        }
      }
    });

    //javascript disable dan enable input kuesioner PI dan P2
     $('input:radio[name="P1"]').change(function() {
        if ($(this).val()=='Bekerja') {
            $('#P2,#P3,#P4,#P5,#P6,#P7,#P8,#P9,#P10,#P11,#P12,#P13,#P14,#P15,#P16').attr('disabled', true);
             $('#P2,#P3,#P4,#P5,#P6,#P7,#P8,#P9,#P10,#P11').attr('disabled', false);

        } 
        else if ($(this).val()=='Melanjutkan Kuliah') {
            $('#P2,#P3,#P4,#P5,#P6,#P7,#P8,#P9,#P10,#P11,#P12,#P13,#P14,#P15,#P16').attr('disabled', true);
             $('#P12,#P13,#P14,#P15,#P16').attr('disabled', false);
        }
    });
  </script>

<?php
include 'footer.php';
?>
