<?php
include "header.php";
?>
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
         <h2>Laporan Grafik Tracer Study</h2> 
          <p>Laporan Grafik Tracer Study bertujuan untuk merekam jejak aktivitas alumni secara keseluruhan setelah lulus dari AKPARDA Yogyakarta.</p>
      </div>
    </div>
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
           <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Status Aktivitas Utama Alumni</h5><br>
              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Status Lulusan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
                 <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P1, COUNT(P1) AS Jm_1 FROM tb_tracerstudy
                  WHERE P1='Bekerja'");
    while($Jm_sd = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P1, COUNT(P1) AS Jm_2 FROM tb_tracerstudy
                  WHERE P1='Melanjutkan Kuliah'");
    while($Jm_2  = mysqli_fetch_array($query1)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Bekerja</td> 
                  <td><?php echo $Jm_sd['Jm_1'] ?> </td>
                </tr> 
                 <tr>
                  <td>2</td>    
                  <td>Melanjutkan Kuliah</td> 
                  <td><?php echo $Jm_2['Jm_2'] ?></td>
                </tr> 
                <?php
}
?> 
<?php
}
?> 
              </tbody>
               <tfoot>
                <?php 
                   include "db/koneksi.php"; 
                    $query = mysqli_query($con,"SELECT count(P1) as tot from tb_tracerstudy");
                    while($Data=mysqli_fetch_array($query)){
                  ?> 
               <tr>  
                <th colspan="1">Total</th>
                <th></th>
                <th>  <?php echo $Data['tot'] ?></th>
               </tr>
              </tfoot>
              </table> 
             <?php
            }
            ?>        
</div>
</div>
</div>
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Status Aktivitas Utama Alumni</h5>

              <!-- Pie Chart -->
              <div id="pieCharts"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieCharts"), {
                    series: [<?php
 include "db/koneksi.php";
$A = mysqli_query($con,"select * from tb_tracerstudy  where P1='Bekerja'");
echo mysqli_num_rows($A);
?>,
  <?php
 include "db/koneksi.php";
$b = mysqli_query($con,"select * from tb_tracerstudy  where P1='Melanjutkan Kuliah'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Bekerja', 'Melanjutkan Kuliah']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>
</div>
</div>
</section>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rata-rata pendapatan Alumni per bulan (take home pay) </h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Rata-Rata Pendapatan Alumni per bulan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
<?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_a FROM tb_tracerstudy
                  WHERE P7='Rp 500.000 - Rp 1.000.000'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_b FROM tb_tracerstudy
                  WHERE P7='Rp 1.000.000 - Rp 5.000.000'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3= mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_c FROM tb_tracerstudy
                  WHERE P7='Rp 5.000.000 - Rp 7.500.000'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_d FROM tb_tracerstudy
                  WHERE P7='Rp 7.500.000 - Rp 10.000.000'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_e FROM tb_tracerstudy
                  WHERE P7='> Rp 10.000.000'");
    while($Jm_e  = mysqli_fetch_array($query3)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Rp 500.000 - Rp 1.000.000 </td> 
                  <td><?php echo $Jm_a['Jm_a'] ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td>Rp 1.000.000 - Rp 5.000.000</td> 
                  <td><?php echo $Jm_b['Jm_b'] ?> </td>
                </tr> 
                 <tr>
                  <td>3</td>    
                  <td>Rp 5.000.000 - Rp 7.500.000</td> 
                  <td><?php echo $Jm_c['Jm_c'] ?></td>
                </tr> 
                 <tr>
                  <td>4</td>    
                  <td>Rp 7.500.000 - Rp 10.000.000</td> 
                  <td><?php echo $Jm_d['Jm_d'] ?></td>
                </tr> 
                 <tr>
                  <td>5</td>    
                  <td>> Rp 10.000.000</td> 
                  <td><?php echo $Jm_e['Jm_e'] ?></td>
                </tr>  
                <?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?>  
              </tbody>
               <tfoot>
                 <?php 
     include "db/koneksi.php";  
     $data = mysqli_query($con,"SELECT count(P7) as Total from tb_tracerstudy WHERE P1='Bekerja'");
     while($d = mysqli_fetch_array($data)){
      ?>
               <tr>
                <th colspan="1">Total</th>
                <th></th>
                <th><?php echo $d['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table> 
            </div>
          </div>
        </div>
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Rata-rata pendapatan Alumni per bulan (take home pay)
              ?</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Rp 500.000 - Rp 1.000.000',
                        'Rp 1.000.000 - Rp 5.000.000',
                        'Rp 5.000.000 - Rp 7.500.000',
                        'Rp 7.500.000 - Rp 10.000.000',
                        '> Rp 10.000.000'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [ <?php
$a = mysqli_query($con,"select * from tb_tracerstudy where P7='Rp 500.000 - Rp 1.000.000'");
echo mysqli_num_rows($a);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where P7='Rp 1.000.000 - Rp 5.000.000'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where P7='Rp 5.000.000 - Rp 7.500.000'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P7='Rp 7.500.000 - Rp 10.000.000'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P7='> Rp 10.000.000'");
echo mysqli_num_rows($cp);
?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 165, 0)',
                          'rgb(34, 139, 35)',
                          'rgb(255, 0, 255)',
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->
            </div>
          </div>
        </div>
      </thead>
    </div>
  </div>
</div>
</div>
</div>
</section>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jabatan/posisi Alumni Dalam Pekerjaan </h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jabatan/posisi Alumni</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
<?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah1 FROM tb_tracerstudy
                  WHERE P3='PNS'");
    while($Jumlah1 = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah2 FROM tb_tracerstudy
                  WHERE P3='Dosen/Guru'");
    while($Jumlah2 = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah3 FROM tb_tracerstudy
                  WHERE P3='Pegawai Bank'");
    while($Jumlah3 = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab4 FROM tb_tracerstudy
                  WHERE P3='Karyawan Swasta'");
    while($Jab4 = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab5 FROM tb_tracerstudy
                  WHERE P3='Administrasi'");
    while($Jab5  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab6 FROM tb_tracerstudy
                  WHERE P3='Chef'");
    while($Jab6  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab7 FROM tb_tracerstudy
                  WHERE P3='Resepsionis'");
    while($Jab7  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab8 FROM tb_tracerstudy
                  WHERE P3='Customer Services'");
    while($Jab8  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab9 FROM tb_tracerstudy
                  WHERE P3='General Manager'");
    while($Jab9  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab10 FROM tb_tracerstudy
                  WHERE P3='Food & Beverage Manager'");
    while($Jab10  = mysqli_fetch_array($query1)){
      ?>
                <tbody>
                  <tr>
                  <td>1</td>    
                  <td>PNS </td> 
                  <td><?php echo $Jumlah1['Jumlah1'] ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td>Dosen/Guru</td> 
                  <td><?php echo $Jumlah2['Jumlah2'] ?> </td>
                </tr> 
                 <tr>
                  <td>3</td>    
                  <td>Pegawai Bank</td> 
                  <td><?php echo $Jumlah3['Jumlah3'] ?></td>
                </tr> 
                 <tr>
                  <td>4</td>    
                  <td>Karyawan Swasta</td> 
                  <td><?php echo $Jab4['Jab4'] ?></td>
                </tr> 
                 <tr>
                  <td>5</td>    
                  <td>Administrasi</td> 
                  <td><?php echo $Jab5['Jab5'] ?></td>
                </tr> 
                 <tr>
                  <td>6</td>    
                  <td>Chef</td> 
                  <td><?php echo $Jab6['Jab6'] ?></td>
                </tr> 
                 <tr>
                  <td>7</td>    
                  <td>Resepsionis</td> 
                  <td><?php echo $Jab7['Jab7'] ?></td>
                </tr> 
                 <tr>
                  <td>8</td>    
                  <td>Customer Services</td> 
                  <td><?php echo $Jab8['Jab8'] ?></td>
                </tr> 
                 <tr>
                  <td>9</td>    
                  <td>General Manager</td> 
                  <td><?php echo $Jab9['Jab9'] ?></td>
                </tr> 
                 <tr>
                  <td>10</td>    
                  <td>Food dan Beverage Manager</td> 
                  <td><?php echo $Jab10['Jab10'] ?></td>
                </tr> 
                <?php
}
?> 
 <?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?>   
              </tbody>
               <tfoot>
              <?php 
              include "db/koneksi.php";  
              $data = mysqli_query($con,"SELECT count(P3) as Total from tb_tracerstudy WHERE P1='Bekerja'");
              while($d = mysqli_fetch_array($data)){
              ?> 
              <tr>
                <th colspan="1"> Total</th>
                <th></th>
                 <th><?php echo $d['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table> 
            </div>
          </div>
        </div>
       <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Jabatan/posisi Alumni Dalam Pekerjaan</h5>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'PNS', 'Dosen/Guru', 'Pegawai Bank', 'Karyawan Swasta', 'Administrasi', 'Chef', 'Resepsionis','Customer Services','General Manager','Food dan Beverage Manager'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php
$a = mysqli_query($con,"select * from tb_tracerstudy where P3='PNS'");
echo mysqli_num_rows($a);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where P3='Dosen/Guru'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where P3='Pegawai Bank'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Karyawan Swasta'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Administrasi'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Chef'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Resepsionis'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Customer Services'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='General Manager'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P3='Food dan Beverage Manager'");
echo mysqli_num_rows($cp);
?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.7)',
                          'rgba(128, 0, 0, 0.7)',
                          'rgba(128, 128, 0, 0.7)',
                          'rgba(0,255,0, 0.7)',
                          'rgba(54, 162, 235, 0.7)',
                          'rgba(0, 0, 0, 0.7)',
                          'rgba(255, 0, 0, 0.7)',
                          'rgba(153, 102, 255, 0.7)',
                          'rgba(144, 0, 71, 0.7)',
                          'rgba(255, 99, 71, 0.7)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>
      </thead>
    </div>
  </div>
</div>
</div>
</div>
</section>  
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Alumni mendapatkan informasi mengenai adanya pekerjaan</h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Informasi Pekerjaan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml1 FROM tb_tracerstudy
                  WHERE P5='Facebook'");
    while($jml1  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml2 FROM tb_tracerstudy
                  WHERE P5='Website'");
    while($jml2  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml3 FROM tb_tracerstudy
                  WHERE P5='Saudara'");
    while($jml3  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml4 FROM tb_tracerstudy
                  WHERE P5='Teman'");
    while($jml4  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml5 FROM tb_tracerstudy
                  WHERE P5='Dosen'");
    while($jml5  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml6 FROM tb_tracerstudy
                  WHERE P5='HRD Perusahaan'");
    while($jml6  = mysqli_fetch_array($query1)){
      ?>

                <tbody>
                 <tr>
                  <td>1</td>    
                  <td> Facebook </td> 
                  <td><?php echo $jml1['jml1'] ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td> Website </td> 
                  <td><?php echo $jml2['jml2'] ?></td>
                </tr> 
                 <tr>
                  <td>3</td>    
                  <td> Saudara </td> 
                  <td><?php echo $jml3['jml3'] ?></td>
                </tr> 
                 <tr>
                  <td>4</td>    
                  <td> Teman </td> 
                  <td><?php echo $jml4['jml4'] ?> </td>
                </tr>
                 <tr>
                  <td>5</td>    
                  <td> Dosen </td> 
                  <td><?php echo $jml5['jml5'] ?> </td>
                </tr>
                 <tr>
                  <td>6</td>    
                  <td> HRD Perusahaan </td> 
                  <td><?php echo $jml6['jml6'] ?> </td>
                </tr>
                <?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
                </tbody>
              <tfoot>
      <?php 
     include "db/koneksi.php";  
     $data = mysqli_query($con,"SELECT count(P5) as Total from tb_tracerstudy WHERE P1='Bekerja'");
     while($d = mysqli_fetch_array($data)){
      ?>
               <tr>
                <th colspan="1">Total</th>
                <th></th>
                <th><?php echo $d['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table>
            </div>
          </div>
        </div>
<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Alumni mendapatkan informasi mengenai adanya pekerjaan</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [<?php
$a = mysqli_query($con,"select * from tb_tracerstudy where P5='Facebook'");
echo mysqli_num_rows($a);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where P5='Website'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where P5='Saudara'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P5='Teman'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P5='Dosen'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P5='HRD Perusahaan'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Facebook',
                        'Website',
                        'Saudara',
                        'Teman',
                        'Dosen',
                        'HRD Perusahaan'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->

            </div>
          </div>
        </div>
      </thead>
    </div>
  </div>
</div>
</div>
</div>
</section>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pertimbangan Utama Alumni Dalam Memilih Pekerjaan Terakhir/sekarang</h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Pertimbangan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
                 <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_a FROM tb_tracerstudy
                  WHERE P6='Sesuai hati nurani'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_b FROM tb_tracerstudy
                  WHERE P6='Sesuai bidang keilmuan'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3= mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_c FROM tb_tracerstudy
                  WHERE P6='Mendapatkan pengetahuan dan ketrampilan'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_d FROM tb_tracerstudy
                  WHERE P6='Mendapatkan pengalaman'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_e FROM tb_tracerstudy
                  WHERE P6='Gaji memadai'");
    while($Jm_e  = mysqli_fetch_array($query3)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Sesuai hati nurani</td> 
                  <td><?php echo $Jm_a['Jm_a'] ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td>Sesuai bidang keilmuan</td> 
                  <td><?php echo $Jm_b['Jm_b'] ?> </td>
                </tr> 
                 <tr>
                  <td>3</td>    
                  <td>Mendapatkan pengetahuan dan ketrampilan</td> 
                  <td><?php echo $Jm_c['Jm_c'] ?></td>
                </tr> 
                 <tr>
                  <td>4</td>    
                  <td>Mendapatkan pengalaman</td> 
                  <td><?php echo $Jm_d['Jm_d'] ?></td>
                </tr> 
                 <tr>
                  <td>5</td>    
                  <td>Gaji memadai</td> 
                  <td><?php echo $Jm_e['Jm_e'] ?></td>
                </tr> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
              </tbody>
               <?php 
              include "db/koneksi.php";  
              $data = mysqli_query($con,"SELECT count(P6) as Total from tb_tracerstudy WHERE P1='Bekerja'");
              while($d = mysqli_fetch_array($data)){
              ?> 
              <tr>
                <th colspan="1"> Total</th>
                <th></th>
                 <th><?php echo $d['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table> 
            </thead>
</div>
</div>
</div>
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Pertimbangan Utama Alumni Dalam Memilih Pekerjaan Terakhir/sekarang</h5>

              <!-- Pie Chart -->
              <canvas id="pieChartT" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChartT'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Sesuai hati nurani',
                        'Sesuai bidang keilmuan',
                        'Mendapatkan pengetahuan dan ketrampilan',
                        'Mendapatkan pengalaman',
                        'Gaji memadai'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php
$a = mysqli_query($con,"select * from tb_tracerstudy where P6='Sesuai hati nurani'");
echo mysqli_num_rows($a);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where P6='Sesuai bidang keilmuan'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where P6='Mendapatkan pengetahuan dan ketrampilan'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P6='Mendapatkan pengalaman'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P6='Gaji memadai'");
echo mysqli_num_rows($cp);
?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.7)',
                          'rgba(128, 0, 0, 0.7)',
                          'rgba(128, 128, 0, 0.7)',
                          'rgba(0,255,0, 0.7)',
                          'rgba(54, 162, 235, 0.7)',
                          'rgba(0, 0, 0, 0.7)',
                          'rgba(255, 0, 0, 0.7)',
                          'rgba(153, 102, 255, 0.7)',
                          'rgba(144, 0, 71, 0.7)',
                          'rgba(255, 99, 71, 0.7)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>
</div>
</section>  
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jenjang Pendidikan Alumni Yang Melanjutkan Kuliah</h5><br>        
         </form>
              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenjang Pendidikan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
    <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P12, COUNT(P12) AS Jm_1 FROM tb_tracerstudy
                  WHERE P12='Sarjana Terapan (D4)'");
    while($VarData = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P12, COUNT(P12) AS Jm_2 FROM tb_tracerstudy
                  WHERE P12='Program Sarjana (S1)'");
    while($Jm_2  = mysqli_fetch_array($query1)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Sarjana Terapan (D4)</td> 
                  <td><?php echo $VarData['Jm_1'] ?> </td>
                </tr> 
                 <tr>
                  <td>2</td>    
                  <td>Program Sarjana (S1)</td> 
                  <td><?php echo $Jm_2['Jm_2'] ?></td>
                </tr> 
                <?php
}
?> 
<?php
}
?> 
              </tbody>
               <?php 
              include "db/koneksi.php";  
              $data = mysqli_query($con,"SELECT count(P12) as Total from tb_tracerstudy WHERE P1='Melanjutkan Kuliah'");
              while($d = mysqli_fetch_array($data)){
              ?> 
              <tr>
                <th colspan="1"> Total</th>
                <th></th>
                 <th><?php echo $d['Total']; ?></th>
               </tr> 
              </tfoot>
              <?php
}
?>
              </table>             
            </div>
          </div>
        </div>
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Jenjang Pendidikan Alumni Yang Melanjutkan Kuliah</h5>

              <!-- Pie Chart -->
              <div id="pieChartsS"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartsS"), {
                    series: [<?php
 include "db/koneksi.php";
$A = mysqli_query($con,"select * from tb_tracerstudy  where P12='Sarjana Terapan (D4)'");
echo mysqli_num_rows($A);
?>,
  <?php
 include "db/koneksi.php";
$b = mysqli_query($con,"select * from tb_tracerstudy  where P12='Program Sarjana (S1)'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Sarjana Terapan (D4)', 'Program Sarjana (S1)']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>
      </div> 
    </section> 
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alasan Utama Alumni Melanjutkan Kuliah</h5><br>        
         </form>
              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Alasan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
 <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_a FROM tb_tracerstudy
                  WHERE P15='Mengisi Kekosongan Menganggur'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_b FROM tb_tracerstudy
                  WHERE P15='Perlu Untuk Bekerja'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3= mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_c FROM tb_tracerstudy
                  WHERE P15='Merasa Ilmu Yang Dimiliki Masih Kurang'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_d FROM tb_tracerstudy
                  WHERE P15='Ada Kesempatan'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_e FROM tb_tracerstudy
                  WHERE P15='Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja)'");
    while($Jm_e  = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_f FROM tb_tracerstudy
                  WHERE P15=' Kurang Yakin Bila Hanya Di Bidang Ini Saja'");
    while($Jm_f  = mysqli_fetch_array($query3)){
      ?>
                 <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Mengisi Kekosongan Menganggur</td> 
                  <td><?php echo $Jm_a['Jm_a'] ?></td>
                </tr>  
                <tr>
                  <td>2</td>    
                  <td>Perlu Untuk Bekerja</td> 
                  <td><?php echo $Jm_b['Jm_b'] ?> </td>
                </tr> 
                 <tr>
                  <td>3</td>    
                  <td>Merasa Ilmu Yang Dimiliki Masih Kurang</td> 
                  <td><?php echo $Jm_c['Jm_c'] ?></td>
                </tr> 
                 <tr>
                  <td>4</td>    
                  <td>Ada Kesempatan</td> 
                  <td><?php echo $Jm_d['Jm_d'] ?></td>
                </tr> 
                 <tr>
                  <td>5</td>    
                  <td>Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja)</td> 
                  <td><?php echo $Jm_e['Jm_e'] ?></td>
                </tr> 
                 <tr>
                  <td>6</td>    
                  <td>Kurang Yakin Bila Hanya Di Bidang Ini Saja</td> 
                  <td><?php echo $Jm_f['Jm_f'] ?></td>
                </tr> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
<?php
}
?> 
              </tbody>
               <?php 
              include "db/koneksi.php";  
              $data = mysqli_query($con,"SELECT count(P15) as Total from tb_tracerstudy WHERE P1='Melanjutkan Kuliah'");
              while($d = mysqli_fetch_array($data)){
              ?> 
              <tr>
                <th colspan="1"> Total</th>
                <th></th>
                 <th><?php echo $d['Total']; ?></th>
               </tr>
<?php
}
?> 
              </tfoot>
              </table>              
            </div>
          </div>
        </div>
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Alasan Utama Alumni Melanjutkan Kuliah</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChartt" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChartt'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Mengisi Kekosongan Menganggur',
                        'Perlu Untuk Bekerja',
                        'Merasa Ilmu Yang Dimiliki Masih Kurang',
                        'Ada Kesempatan',
                        'Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja)',
                        'Kurang Yakin Bila Hanya Di Bidang Ini Saja'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php
$a = mysqli_query($con,"select * from tb_tracerstudy where P15='Mengisi Kekosongan Menganggur'");
echo mysqli_num_rows($a);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where P15='Perlu Untuk Bekerja'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where P15='Merasa Ilmu Yang Dimiliki Masih Kurang'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P15='Ada Kesempatan'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P15='Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja)'");
echo mysqli_num_rows($cp);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where P15='Kurang Yakin Bila Hanya Di Bidang Ini Saja'");
echo mysqli_num_rows($cp);
?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(29, 139, 139)',
                          'rgb(153, 50, 204)',
                          'rgb(233, 150, 122)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- GRAFIK KOMPETENSI -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">1. Pengetahuan Umum</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartssS"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartssS"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_1='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_1='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_1='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_1='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">2. Bahasa Inggris</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss1"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss1"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_2='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_2='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_2='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_2='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
    </section> 
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">3. Ketrampilan internet</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartssSc"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartssSc"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_3='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_3='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_3='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_3='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">4. Ketrampilan komputer</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss4"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss4"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_4='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_4='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_4='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_4='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
    </section> 
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">5. Kemampuan belajar</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss5"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss5"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_5='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_5='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_5='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_5='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">6. Kemampuan berkomunikasi</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss6"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss6"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_6='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_6='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_6='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_6='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
              <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">7. Bekerja di bawah tekanan</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss7"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss7"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_7='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_7='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_7='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_7='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">8. Kemampuan adaptasi</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss8"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss8"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_8='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_8='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_8='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_8='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
    </section> 
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">9. Loyalitas</h5><br>        

              <!-- Pie Chart -->
              <div id="pieChartss9"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartss9"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_9='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_9='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_9='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_9='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">10. Kepemimpinan</h5><br>        

              <!-- Pie Chart -->
              <div id="pieCharts10"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieCharts10"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_10='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_10='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_10='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_10='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
    </section> 
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">11. Tanggung Jawab</h5><br>        

              <!-- Pie Chart -->
              <div id="pieCharts11"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieCharts11"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_11='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_11='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_11='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_11='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">12. Inisiatif</h5><br>        

              <!-- Pie Chart -->
              <div id="pieCharts12"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieCharts12"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_12='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_12='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_12='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_12='Kurang'");
echo mysqli_num_rows($cp);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>
          <!-- batas akhir grafik -->
    </section> 
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">13. Toleransi</h5><br>        

              <!-- Pie Chart -->
              <div id="pieCharts13"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieCharts13"), {
                    series: [<?php
include "db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_13='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_13='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_13='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_13='Kurang'");
echo mysqli_num_rows($b);
?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Tinggi', 'Sedang', 'Cukup', 'Kurang']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->
            </div>
          </div>
        </div>

      
          <!-- batas akhir grafik -->
    </section> 
    </section> 
    
     





</main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
         <div class="copyright">
           AKPARDA Yogyakarta <strong></strong>. 2023
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">AKPARDA Yogyakarta</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 
