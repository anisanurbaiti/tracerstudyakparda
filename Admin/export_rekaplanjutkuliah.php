<!DOCTYPE html>
<html>
<head>
  <title>Data Data Alumni Yang Melanjutkan Kuliah</title>
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
  header("Content-Disposition: attachment; filename=Data Rekap Alumni Melanjutkan Kuliah.xls");
  ?>
 
  <center>
    <h1>Rekapitulasi Data Alumni Yang Melanjutkan Kuliah</h1>
  </center>
 
  <table border="1">
    <tr>
    <th>No</th>
    <th>Nim</th>
    <th>Nama Lengkap</th>
    <th>Tanggal Wisuda</th>
    <th>Jenjang</th>
    <th>Nama Perguruan Tinggi</th>
    <th>Tanggal Kuliah</th>
    <th>Alasan</th>
    </tr>
   <?php 
      include "../db/koneksi.php";
    $no = 1;
    $data = mysqli_query($con,"SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE P1='Melanjutkan Kuliah'");
    while($d = mysqli_fetch_array($data)){
      ?>
    <tr>
      <td><?php echo $no++; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo $d['tanggal_wisuda'];?></td>
         <td><?php echo $d['P12']; ?></td>
        <td><?php echo $d['P13']; ?></td>
        <td><?php echo $d['P14'];?></td>
        <td><?php echo $d['P15']; ?></td>
    </tr>
    <?php 
    }
    ?>
  </table>
</body>
</html>