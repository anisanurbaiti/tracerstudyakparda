<?php 
include '../db/koneksi.php';
session_start();
if(!isset($_SESSION['useridd'])){
  //cek di luar file
  header('location:../login.php');
}
$user=$_SESSION['useridd'];
$sql=mysqli_query($con, "SELECT * FROM tb_perusahaan where email_perusahaan='$_SESSION[useridd]'");
$VarData=mysqli_fetch_array($sql);
//session induk
$email_perusahaan=$_SESSION["useridd"];

//tampilkan email perusahaan
$email=$VarData['email_perusahaan'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Laporan Data Pelamar Kerja</title>
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
<td></td>
<td>
<h2>LAPORAN DATA PELAMAR KERJA ALUMNI D3 PERHOTELAN </h2>
<h2>AKADEMI PARIWISATA DHARMA NUSANTARA SAKTI YOGYAKARTA</h2>
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
<th>ID</th>
<th>Nama Pelamar</th>
<th>Posisi</th>
<th>Tanggal Apply</th>
<th>Status Berkas</th>
<th>Metode Interview</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Tanggal Wisuda</th>
<th>IPK</th>
</tr>
<?php 
                include "../db/koneksi.php";
                $xx=1; 
                //query tampil tb_history pelamar diterima
                $email=$VarData['email_perusahaan'];
                $query = mysqli_query($con,"SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan where tb_perusahaan.email_perusahaan='$email'");
                  while($row = mysqli_fetch_array($query)){
    
                ?>
<tr>
<td  style='text-align: center;'><?php echo $xx++ ?></td>
<td  style='text-align: left;'><?php echo $row['id_history_lamar'] ?></td>
<td  style='text-align: left;'><?php echo $row['nama_lengkap']; ?></td>
<td  style='text-align: left;'><?php echo $row['posisi']; ?></td>
<td  style='text-align: left;'><?php echo $row['tanggal_apply']; ?> </td>
<td  style='text-align: left;'><?php echo $row['status_berkas']; ?></td>
<td  style='text-align: left;'><?php echo $row['metode_interview']; ?> </td>
<td  style='text-align: left;'><?php echo $row['agama']; ?></td>
<td  style='text-align: left;'><?php echo $row['tanggal_wisuda']; ?> </td>
<td  style='text-align: left;'><?php echo $row['ipk']; ?> </td>
</tr>

</table>
</tr>
</table>
</div>
<div id="print">
<table width="450" align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" align="center">
<strong><?php echo date('d F y'); ?></strong>
      <br><br><br><br>
<strong><u><?php echo $row['nama_perusahaan'] ?></u><br></strong><small></small>
</td>
</tr>
<?php 
 }
 ?>
</table>

</div>
    <script>
 window.print();
 </script>

</body>
</html>