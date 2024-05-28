<!DOCTYPE html>
<html>
<head>
  <title>Laporan Data Tracer Study</title>
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
  header("Content-Disposition: attachment; filename=Data Laporan Tracer Study.xls");
  ?>
 
  <center>
    <h1>Laporan Data Tracer Study</h1>
  </center>
 
  <table border="1">
    <tr>
  <th>No</th>
                                                <th>Tanggal Pengisian</th>
                                                <th>Periode Lulusan</th>
                                                <th>Jumlah Yang Sudah Mengisi</th>
    </tr>
    <?php       
                  include "../koneksi.php";     
                  $query = "SELECT tanggal,tanggal_wisuda,count(*) as jumlh FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim group BY tanggal DESC";
                  $resultt = mysqli_query($con, $query);
                  if(!$resultt) {
                   die("Data tidak ada");
                   }
                  $rows = mysqli_num_rows($resultt);
                  if ($rows > 0) {
                    $xx=1; 
                  while ($d = mysqli_fetch_array($resultt)) { 
                 ?>
    <tr>
       <td><?php  echo $xx++ ?></td>
        <td><?php echo date('d F Y', strtotime($d["tanggal"]));?></td>
        <td><?php echo date('d F Y', strtotime($d["tanggal_wisuda"]));?></td>
        <td> <?php echo $d['jumlh'] ?></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
                                            <tfoot>
                                   <?php       
                include "../koneksi.php";        
                $query = "SELECT count(*) as total from tb_tracerstudy ";
                $result = mysqli_query($con, $query);
                if(!$result) {
                die("Data tidak ada");
                 }
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                while ($Data = mysqli_fetch_array($result)) { 
                 ?>
                <th colspan="1">Total</th>
                <th></th>
                 <th></th>
                <th> <?php echo $Data['total'] ?></th>
               </tr>
              </tfoot>
              </table> 
               <?php
}
?> 
</body>
</html>
<?php
}
?> 
<?php
}
?> 