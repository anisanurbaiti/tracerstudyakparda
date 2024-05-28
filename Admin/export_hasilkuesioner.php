<!DOCTYPE html>
<html>
<head>
  <title>Laporan Hasil Pengisian Kuesioner</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;
 
  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  </style>
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Hasil Pengisian.xls");
  ?>
 
  <center>
    <h1>Laporan Hasil Pengisian Kuesioner</h1>
  </center>
 
  <table border="1">
<tr>
<th>No</th>
<th>ID Tracer</th>
<th>Tanggal</th>
<th>NIM</th>
<th>Nama Lengkap</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Nama Orangtua</th>
<th>Alamat Orangtua</th>
<th>Alamat Mahasiswa</th>
<th>No Telepon</th>
<th>Email</th>
<th>Judul TA</th>
<th>Dosen Pembimbing 1</th>
<th>Dosen Pembimbing 2</th>
<th>Total SKS</th>
<th>Tanggal Wisuda</th>
<th>IPK</th>
<th>Dengan ini menginformasikan</th>
<th>Ketikkan nama tempat bekerja anda sekarang</th>
<th>Jenis Jabatan/posisi dalam pekerjaan Anda</th>
<th>Bulan dan tahun mulai bekerja</th>
<th>Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan ini</th>
<th>Secara umum, apa pertimbangan utama saudara dalam memilih pekerjaan terakhir/sekarang</th>
<th>Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan terakhir/sekarang</th>
<th>Bulan dan tahun anda mendapatkan pekerjaan pertama setelah lulus Akparda</th>
<th>Ketikkan Nama tempat bekerja pertama kali</th>
<th>Jabatan/posisi terakhir dalam pekerjaan pertama</th>
<th>Berapa rata-rata pendapatan (take home pay, termasuk lembur dll ) saudara pada pekerjaan pertama</th>
<th>Apa jenjang pendidikan yang anda ambil ?</th>
<th>Dimana Anda kuliah ?</th>
<th>Bulan dan tahun mulai pendidikan</th>
<th>Apa alasan utama Anda kuliah lagi ?</th>
<th>Pada saat baru lulus, sebenarnya di mana saudara ingin bekerja ?</th>
<th>Bagaimana kemampuan Pengetahuan Umum Anda?</th>
<th>Bagaimana kemampuan Bahasa Inggris anda?</th>
<th>Bagaimana kemampuan Ketrampilan internet anda?</th>
<th>Bagaimana Kemampuan Komputer Anda ?</th>
<th>Bagaimana Kemampuan belajar anda?</th>
<th>Bagaimana kemampuan berkomunikasi anda ?</th>
<th>Bagaimana kemampuan anda Bekerja di bawah tekanan ?</th>
<th>Bagaimana kemampuan adaptasi anda?</th>
<th>Bagaimana Loyalitas pada perusahaan ?</th>
<th>Bagaimana kemampuan Kepemimpinan anda?</th>
<th>Bagaimana kemampuan anda dalam memegang tanggungjawab ?</th>
<th>Bagaimana kemampuan Inisiatif anda?</th>
<th>Bagaimana kemampuan Toleransi anda?</th>
<th>Pesan</th>
<th>Kesan</th>
    </tr>
    <?php 
    $con = mysqli_connect("localhost","root","","tracer_study_new");
    $data = mysqli_query($con,"SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim ORDER BY tanggal DESC");
    $no = 1;
    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $row['id_tracer']; ?></td>
  <td><?php echo $row['tanggal']; ?></td>
  <td><?php echo $row['nim']; ?></td>
  <td><?php echo $row['nama_lengkap']; ?></td>
 <td><?php echo $row['tempat_lahir']; ?></td>
 <td><?php echo $row['tanggal_lahir']; ?> </td>
 <td><?php echo $row['jenis_kelamin']; ?> </td>
<td><?php echo $row['agama']; ?></td>
<td><?php echo $row['nama_orangtua']; ?></td>
<td><?php echo $row['alamat_orangtua']; ?></td>
<td><?php echo $row['alamat_mahasiswa']; ?></td>
<td><?php echo $row['no_telepon']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['judul_TA']; ?> </td>
<td><?php echo $row['dosen_pembimbing_1']; ?> </td>
<td><?php echo $row['dosen_pembimbing_2']; ?> </td>
<td><?php echo $row['total_sks']; ?> </td>
    <td><?php echo $row['tanggal_wisuda']; ?></td>
    <td><?php echo $row['ipk']; ?></td>
    <td><?php echo $row['P1']; ?></td>
    <td><?php echo $row['P2']; ?></td>
    <td><?php echo $row['P3']; ?></td>
    <td><?php echo $row['P4']; ?></td>
    <td><?php echo $row['P5']; ?></td>
    <td><?php echo $row['P6']; ?></td>
    <td><?php echo $row['P7']; ?></td>
    <td><?php echo $row['P8']; ?></td>
    <td><?php echo $row['P9']; ?></td>
    <td><?php echo $row['P10']; ?></td>
    <td><?php echo $row['P11']; ?></td>
    <td><?php echo $row['P12']; ?></td>
    <td><?php echo $row['P13']; ?></td>
    <td><?php echo $row['P14']; ?></td>
    <td><?php echo $row['P15']; ?></td>
    <td><?php echo $row['P16']; ?></td>
    <td><?php echo $row['opsi_1']; ?></td>
    <td><?php echo $row['opsi_2']; ?></td>
    <td><?php echo $row['opsi_3']; ?></td>
    <td><?php echo $row['opsi_4']; ?></td>
    <td><?php echo $row['opsi_5']; ?></td>
    <td><?php echo $row['opsi_6']; ?></td>
    <td><?php echo $row['opsi_7']; ?></td>
    <td><?php echo $row['opsi_8']; ?></td>
    <td><?php echo $row['opsi_9']; ?></td>
    <td><?php echo $row['opsi_10']; ?></td>
    <td><?php echo $row['opsi_11']; ?></td>
    <td><?php echo $row['opsi_12']; ?></td>
    <td><?php echo $row['opsi_13']; ?></td>
    <td><?php echo $row['pesan']; ?></td>
    <td><?php echo $row['kesan']; ?></td>
    </tr>
    <?php 
    }
    ?>
  </table>
</body>
</html>