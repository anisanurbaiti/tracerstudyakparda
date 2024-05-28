<!DOCTYPE html>
<html>
<head>
  <title>Data Alumni Yang Bekerja</title>
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
  header("Content-Disposition: attachment; filename=Data Rekap Alumni Bekerja.xls");
  ?>
 
  <center>
    <h1>Rekapitulasi Data Alumni Yang Bekerja</h1>
  </center>
 
  <table border="1">
    <tr>
 <th>No</th>
                                                <th>Nim</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tanggal Wisuda</th>
                                                <th>Tempat Kerja</th>
                                                <th>Posisi Pekerjaan</th>
                                                <th>Pendapatan</th>
                                                <th>Tanggal Bekerja</th>
    </tr>
    <?php 
      include "../db/koneksi.php";
    $no = 1;
    $data = mysqli_query($con,"SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE P1='Bekerja'");
    while($d = mysqli_fetch_array($data)){
      ?>
    <tr>
       <td><?php echo $no++; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo date('d F Y', strtotime($d["tanggal_wisuda"]));?></td>
        <td><?php echo $d['P2']; ?></td>
        <td><?php echo $d['P3']; ?></td>
        <td><?php echo $d['P7']; ?></td>
        <td><?php echo date('d F Y', strtotime($d["P4"]));?></td>
    </tr>
    <?php 
    }
    ?>
  </table>
</body>
</html>