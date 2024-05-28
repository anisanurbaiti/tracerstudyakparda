<!DOCTYPE html>
<html>
<head>
<title>Laporan Data Tracer Study AKPARDA</title>
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
         width:70%;
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
<h2>LAPORAN DATA TRACER STUDY ALUMNI D3 PERHOTELAN </h2>
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
               <th>Tanggal Pengisian</th>
               <th>Periode Lulusan</th>
               <th>Jumlah Yang Sudah Mengisi</th>
             </tr>
        <?php       
            include "../db/koneksi.php";    
            $data = "SELECT tanggal,tanggal_wisuda,count(*) as jumlh FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim group BY tanggal DESC";
            $resultt = mysqli_query($con, $data);
                  if(!$resultt) {
                   die("Data tidak ada");
                   }
            $rows = mysqli_num_rows($resultt);
                  if ($rows > 0) {
            $xx=1; 
                  while ($view = mysqli_fetch_array($resultt)) { 
            ?>
           <tr>
           <td  style='text-align: center;'><?php echo $xx++ ?></td>
           <td style='text-align: left;'><?php echo date('d F Y', strtotime($view["tanggal"]));?></td>
           <td style='text-align: left;'><?php echo date('d F Y', strtotime($view["tanggal_wisuda"]));?></td>
           <td><?php echo $view['jumlh']; ?></td>
          </tr>
            <?php 
            }
            ?>
          <tfoot>
                <?php       
                include "../db/koneksi.php";      
                $query = "SELECT count(*) as total from tb_tracerstudy";
                $result = mysqli_query($con, $query);
                if(!$result) {
                die("Data tidak ada");
                 }
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                while ($Data = mysqli_fetch_array($result)) { 
                 ?>
               <tr>
                <th colspan="1">Total</th>
                <th></th>
                <th></th>
                <th><?php echo $Data['total'] ?></th>
               </tr>
        </tfoot>
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
<?php
}
?>
 <?php
}
?>
 <?php
}
?>
