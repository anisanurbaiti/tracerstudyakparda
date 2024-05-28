<?php
include 'header.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lowongan Kerja</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
<?php 
include '../db/koneksi.php';
if(!isset($_SESSION['id_alumni'])){
  header('location:../login.php');
}
$VarEmail      =$_SESSION["id_alumni"];
$user=$_SESSION["id_alumni"];
$sql2=mysqli_query($con, "SELECT * FROM tb_alumni where email='$_SESSION[id_alumni]'");
$rows=mysqli_fetch_array($sql2);
?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
   <link rel="stylesheet" href="style.css">
<div class="container">
                <div class="row mt-n5">
                   <?php 
            include "../db/koneksi.php"; 
            $result = mysqli_query($con,"SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan");
            while($row = mysqli_fetch_array($result)){
          ?>
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <div class="blog-grid">
                            <div class="blog-grid-img position-relative"><?="<img class ='img-fluid img-responsive rounded product-image' src='../images/".$row ['photos']."'style='width:350px; height:250px; alt=''> "?></div>
                            <div class="blog-grid-text p-4">
                                <h3 class="h5 mb-3"> <p class="display-30"><?php  echo $row ['judul'] ?></p><a href="#!"><b><?php  echo $row ['posisi'] ?></b></a></h3>
                                <span><?php  echo $row ['nama_perusahaan'] ?></span>
                                <br>
                                <i><span class="badge bg-info text-dark">Gaji : <?php  echo $row ['benefit'] ?></span></i>                               
                                <div class="meta meta-style2">
                                    <ul>
                                        <li><i class="fas fa-calendar-alt"></i> <b>Batas Lamaran : <?php echo date('d F Y', strtotime($row ['tanggal_berakhir']))?></b></li>
                                       
                                    </ul>
                                </div>
                                <br>
                                <div class="text-center">
                                  <?php  
                    if($row ['status_lowker']=="Expired")  
                        echo 
"<a href=#=".$row ['id_lowongan']." class='btn btn-danger' >Lowongan Di Tutup</a>"; 
                    else 
                        echo 
"<a href=lowongan_kerja_detail.php?id_lowongan=".$row['id_lowongan']." class='btn btn-primary' onClick='javascript:return confirm('Lamar Sekarang ?)'>Lihat Lowongan</a>"; 
                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
            </div>   
</main>
<?php
include 'footer.php';
?>
