<!DOCTYPE html>
<html>
<head>
 <title>Cetak data Hasil Pengisian Tracer Study</title>
</head>
<body>
	<center><img src="images/logo_akparda.jpg" width="100px" height="100px" border="" align = "middle"
hspace = "10" vspace="10"  /></center>
	<center><h4>AKADEMI PARIWISATA DHARMA NUSANTARA SAKTI YOGYAKARTA</h4></center>
  <center><h4>Jalan Bintaran Kidul No.12 Wirogunan, Mergangsan, Kota Yogyakarta. Telepon (0274) 376830.</h4></center>
<center><h3>HASIL PENGISIAN TRACER STUDY</h3></center>
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
.tengah{
 text-align: center;
 }
 </style>
 <table>
 <tr>
 <th>No</th>
 <th>NIM</th>
 <th>Nama Lengkap</th>
 <th>Nik</th>
 <th>Email</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No Telepon</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Tahun Masuk</th>
 <th>Tahun Lulus</th>
 </tr>
 <?php 
  include "../db/koneksi.php";
 $query = mysqli_query($con,"SELECT nim,nama_lengkap,nik,email,tempat_lahir,tanggal_lahir,
          alamat,no_telepon,jenis_kelamin,agama,tahun_masuk,tahun_lulus,judul_TA,dosen_pembimbing,
          id_admin FROM tb_alumni ORDER BY tahun_masuk ASC");
  $xx=1; 
 while($row = mysqli_fetch_array($query)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $xx++ ?></td>
 <td style='text-align: center;'><?php echo $row['nim'] ?></td>
 <td><?php echo $row['nama_lengkap']; ?></td>
 <td><?php echo $row['nik']; ?></td>
 <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['tempat_lahir']; ?></td>
 <td><?php echo $row['tanggal_lahir']; ?> </td>
  <td><?php echo $row['no_telepon']; ?></td>
 <td><?php echo $row['jenis_kelamin']; ?> </td>
  <td><?php echo $row['agama']; ?></td>
 <td><?php echo $row['tahun_masuk']; ?></td>
 <td><?php echo $row['tahun_lulus']; ?> </td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>