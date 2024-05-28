<?php
include "header.php";
?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Kuesioner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
       <?php
       //mengambil data berdasarkan nim di tb_tracerstudy
    if(isset($_GET['nim'])){
        $idtracer    =$_GET['nim'];
    }
    else {
        die ("Tidak ada data!");    
    }
     include "../db/koneksi.php"; 
    $query    =mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE tb_tracerstudy.nim='$idtracer'");
    $result    =mysqli_fetch_array($query);
?>
            
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profil Alumni</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID Tracer</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['nim']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['nama_lengkap']; ?></div>

                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Wisuda</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['tanggal_wisuda']; ?></div>
                    
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Wisuda</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['id_tracer']; ?></div>
                    
                  </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Alumni</div>
                    <div class="col-lg-9 col-md-8"><?php echo $result['P1']; ?></div>
                    
                  </div>
                  <!--  <div class="text-center">
                       <a href="cek_data_kuesioner_update.php" class="btn btn-warning">Perbaharui</a>
                    </div> -->
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
include 'footer.php';
?>

