<!DOCTYPE html>
<html>
<head>
<title>Laporan Data Alumni</title>
</head>
<body>
    <script type="text/javascript">
    window.print()
    </script>  
    <style type="text/css">
    #print {
        margin:auto;
        text-align:center;
        font-family:"Calibri", Courier, monospace;
         width:90%;
        font-size:14px;
    }
    #print .title {
        margin:20px;
        text-align:right;
        font-family:"Calibri", Courier, monospace;
        font-size:12px;
    }
    #print span {
        text-align:center;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;   
        font-size:18px;
    }
    #print table {
        border-collapse:collapse;
        width:100%;
        margin:10px;
    }
    #print .table1 {
        border-collapse:collapse;
        width:90%;
        text-align:center;
        margin:10px;
    }
    #print table hr {
        border:3px double #000;   
    }
    #print .ttd {
        float:right;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    #print table th {
        color:#000;
        font-family:Verdana, Geneva, sans-serif;
        font-size:12px;
    }
    #logo{
        width:111px;
        height:90px;
        padding-top:10px;   
        margin-left:10px;
    }
    h2,h3{
        margin: 0px 0px 0px 0px;
    }
    </style>
    <title>Laporan Cetak</title>
    <div id="print">
    <table class='table1'>
    <tr>
<td><img src='images/logo_akparda.jpg' height="100" width="100"></td>
<td>
<h2>LAPORAN DATA ALUMNI D3 PERHOTELAN </h2>
<h2>AKADEMI PARIWISATA DHARMA NUSANTARA SAKTI YOGYAKARTA</h2>
<p style="font-size:16px;"><i> Jalan Bintaran Kidul No.12 Wirogunan, Mergangsan, Kota Yogyakarta. Telepon (0274) 376830.</i></p>
</td>
</tr>
</table>  
<table class='table'>   
<td><hr /></td>
</table>
<tr>
<td>
<table border='1' class='table' width="90%">
<tr>
<th width="30">No.</th>
<th>NIM</th>
<th>Nama Lengkap</th>
<th>Email</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>No Telepon</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Tanggal Wisuda</th>
<th>IPK</th>
</tr>
<?php 
  include "../db/koneksi.php";
 $data = mysqli_query($con,"SELECT nim,nama_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,nama_orangtua,alamat_orangtua,alamat_mahasiswa,no_telepon,email,judul_TA,dosen_pembimbing_1,dosen_pembimbing_2,total_sks,tanggal_wisuda,ipk FROM tb_alumni ORDER BY nim ASC");
  $xx=1; 
 while($row = mysqli_fetch_array($data)){
 ?>
<tr>
<td  style='text-align: center;'><?php echo $xx++ ?></td>
<td  style='text-align: left;'><?php echo $row['nim']; ?></td>
<td  style='text-align: left;'><?php echo $row['nama_lengkap']; ?></td>
<td  style='text-align: left;'><?php echo $row['email']; ?></td>
<td  style='text-align: left;'><?php echo $row['tempat_lahir']; ?></td>
<td  style='text-align: left;'><?php echo $row['tanggal_lahir']; ?> </td>
<td  style='text-align: left;'><?php echo $row['no_telepon']; ?></td>
<td  style='text-align: left;'><?php echo $row['jenis_kelamin']; ?> </td>
<td  style='text-align: left;'><?php echo $row['agama']; ?></td>
<td  style='text-align: left;'><?php echo $row['tanggal_wisuda']; ?> </td>
<td  style='text-align: left;'><?php echo $row['ipk']; ?> </td>
</tr>
<?php 
 }
 ?>
</table>
</tr>
</table>
</div>
<div id="print">
<table width="450" align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" align="center">
<strong>Yogyakarta, <?php echo date('d F y'); ?></strong>
      <br><br><br><br>
<strong><u>Admin</u><br></strong><small></small>
</td>
</tr>
</table>
</div>
    <script>
 window.print();
 </script>
</body>
</html>