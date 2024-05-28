<!DOCTYPE html>
<html>
<head>
  <title>Laporan Data Alumni</title>
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
  header("Content-Disposition: attachment; filename=Data Alumni.xls");
  ?>
 
  <center>
    <h1>Laporan Data Alumni</h1>
  </center>
 
  <table border="1">
    <tr>
 <th>No</th>
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
    </tr>
    <?php 
    $con = mysqli_connect("localhost","root","","tracer_study_new");
    $data = mysqli_query($con,"SELECT * from tb_alumni order by tanggal_wisuda");
    $no = 1;
    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
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
    </tr>
    <?php 
    }
    ?>
  </table>
</body>
</html>