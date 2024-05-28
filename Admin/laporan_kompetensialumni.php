
      <!-- BATAS AWAL GRAFIK  -->
     <section class="section">
      <div class="row">
<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">1. Pengetahuan Umum</h5>

              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [ 
<?php
include "../db/koneksi.php"; 
$A = mysqli_query($con,"select * from tb_tracerstudy where opsi_1='Tinggi'");
echo mysqli_num_rows($A);
?>,
  <?php
include "../db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy  where opsi_1='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
include "../db/koneksi.php"; 
$b = mysqli_query($con,"select * from tb_tracerstudy where opsi_1='Cukup'");
echo mysqli_num_rows($b);
?>,<?php
include "../db/koneksi.php"; 
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
              <h5 class="card-title">2. Bahasa Inggris</h5>

              <!-- Pie Chart -->
              <div id="pieChartt"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChartt"), {
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">3. Ketrampilan internet</h5>

              <!-- Pie Chart -->
              <div id="we3"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we3"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_3='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_3='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_3='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_3='Kurang'");
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
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">4. Ketrampilan komputer</h5>

              <!-- Pie Chart -->
              <div id="we4"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we4"), {
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
                 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">5. Kemampuan belajar</h5>

              <!-- Pie Chart -->
              <div id="we5"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we5"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_5='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_5='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_5='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_5='Kurang'");
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">6. Kemampuan berkomunikasi</h5>

              <!-- Pie Chart -->
              <div id="we6"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we6"), {
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">7. Bekerja di bawah tekanan</h5>

              <!-- Pie Chart -->
              <div id="we7"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we7"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_7='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_7='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_7='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_7='Kurang'");
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">8. Kemampuan Adaptasi</h5>

              <!-- Pie Chart -->
              <div id="we8"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we8"), {
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">9. Loyalitas</h5>

              <!-- Pie Chart -->
              <div id="we9"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we9"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_9='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_9='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_9='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_9='Kurang'");
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">10. Kepemimpinan</h5>

              <!-- Pie Chart -->
              <div id="we10"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we10"), {
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">11. Tanggung Jawab</h5>

              <!-- Pie Chart -->
              <div id="we11"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we11"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_11='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_11='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_11='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_11='Kurang'");
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">12. Inisiatif</h5>

              <!-- Pie Chart -->
              <div id="we12"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we12"), {
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">13. Tolerasi</h5>

              <!-- Pie Chart -->
              <div id="we13"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#we13"), {
                    series: [<?php
$aa = mysqli_query($con,"select * from tb_tracerstudy where opsi_13='Tinggi'");
echo mysqli_num_rows($aa);
?>,
<?php
$b= mysqli_query($con,"select * from tb_tracerstudy  where opsi_13='Sedang'");
echo mysqli_num_rows($b);
?>,
<?php
$c= mysqli_query($con,"select * from tb_tracerstudy  where opsi_13='Cukup'");
echo mysqli_num_rows($c);
?>,
<?php
$cp= mysqli_query($con,"select * from tb_tracerstudy  where opsi_13='Kurang'");
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
          <!-- BATAS GRAFIK  -->
       
      </div>
    </section>
      <!-- BATAS TERAKHIR GRAFIK  -->

      <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">            
               <h5 class="card-title">Laporan Penilaian Kompetensi Tracer Study</h5>
                    <br>
                <table class="table table-striped">
                  <tr>
                     <th rowspan="2">No</th>
                   <th rowspan="1">Pertanyaan</th>
                    <th rowspan="1">Indeks Penilaian</th>
                   <th colspan="6"></th>
                  </tr>
                  
                 <tr>
                   <th></th>
                   <th>Tinggi</th>
                   <th>Sedang</th>
                   <th>Cukup</th>
                   <th>Kurang</th>
                </tr> 
                <?php 
      include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_1, COUNT(*) AS Jumlah FROM tb_tracerstudy
                  WHERE opsi_1='Tinggi'");
     while($a1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_1, COUNT(*) AS Jumla FROM tb_tracerstudy
                  WHERE opsi_1='Sedang'");
     while($a2 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_1, COUNT(*) AS Juml FROM tb_tracerstudy
                  WHERE opsi_1='Cukup'");
     while($a3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_1, COUNT(*) AS Jumlo FROM tb_tracerstudy
                  WHERE opsi_1='Kurang'");
     while($a4 = mysqli_fetch_array($data)){
      ?>  
                <tr>
                  <td>1</td>
                  <td>Pengetahuan Umum</td>
                  <td><?php echo $a1['Jumlah'] ?><?php}?> </td>
                  <td><?php echo $a2['Jumla'] ?><?php}?></td>
                  <td><?php echo $a3['Juml'] ?><?php}?></td>
                  <td><?php echo $a4['Jumlo'] ?><?php}?></td>
                </tr> 
                <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_2, COUNT(*) AS To1 FROM tb_tracerstudy
                  WHERE opsi_2='Tinggi'");
     while($B1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_2, COUNT(*) AS To2 FROM tb_tracerstudy
                  WHERE opsi_2='Sedang'");
     while($B2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_2, COUNT(*) AS To3 FROM tb_tracerstudy
                  WHERE opsi_2='Cukup'");
     while($B3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_2, COUNT(*) AS To4 FROM tb_tracerstudy
                  WHERE opsi_2='Kurang'");
     while($B4 = mysqli_fetch_array($data)){
      ?>
                <tr>
                  <td>2</td>
                  <td>Bahasa Inggris</td>
                  <td><?php echo $B1['To1'] ?><?php}?> </td>
                  <td><?php echo $B2['To2'] ?><?php}?></td>
                  <td><?php echo $B3['To3'] ?><?php}?></td>
                  <td><?php echo $B4['To4'] ?><?php}?></td>
                </tr>
                 <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_3, COUNT(*) AS To11 FROM tb_tracerstudy
                  WHERE opsi_3='Tinggi'");
     while($B11 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_3, COUNT(*) AS To22 FROM tb_tracerstudy
                  WHERE opsi_3='Sedang'");
     while($B22 = mysqli_fetch_array($data)){
      ?>
      <?php 
    include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_3, COUNT(*) AS To33 FROM tb_tracerstudy
                  WHERE opsi_3='Cukup'");
     while($B33 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_3, COUNT(*) AS To44 FROM tb_tracerstudy
                  WHERE opsi_3='Kurang'");
     while($B44 = mysqli_fetch_array($data)){
      ?>
                <tr>
                   <td>3</td>
                  <td>Ketrampilan internet</td>
                  <td><?php echo $B11['To11'] ?><?php}?> </td>
                  <td><?php echo $B22['To22'] ?><?php}?></td>
                  <td><?php echo $B33['To33'] ?><?php}?></td>
                  <td><?php echo $B44['To44'] ?><?php}?></td>
                </tr>  
                <?php 
     include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_4, COUNT(*) AS To12 FROM tb_tracerstudy
                  WHERE opsi_4='Tinggi'");
     while($B12 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_4, COUNT(*) AS To23 FROM tb_tracerstudy
                  WHERE opsi_4='Sedang'");
     while($B23 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_4, COUNT(*) AS To34 FROM tb_tracerstudy
                  WHERE opsi_4='Cukup'");
     while($B34 = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php"; 
     $data = mysqli_query($con,"SELECT opsi_4, COUNT(*) AS To45 FROM tb_tracerstudy
                  WHERE opsi_4='Kurang'");
     while($B45 = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>4</td>
                  <td>Ketrampilan komputer </td>
                  <td><?php echo $B12['To12'] ?><?php}?> </td>
                  <td><?php echo $B23['To23'] ?><?php}?></td>
                  <td><?php echo $B34['To34'] ?><?php}?></td>
                  <td><?php echo $B45['To45'] ?><?php}?></td>
                </tr>  
                <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_5, COUNT(*) AS ToA FROM tb_tracerstudy
                  WHERE opsi_5='Tinggi'");
     while($BA = mysqli_fetch_array($data)){
      ?>
      <?php 
      include "../db/koneksi.php";
     $data = mysqli_query($con,"SELECT opsi_5, COUNT(*) AS ToB FROM tb_tracerstudy
                  WHERE opsi_5='Sedang'");
     while($BB = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_5, COUNT(*) AS ToC FROM tb_tracerstudy
                  WHERE opsi_5='Cukup'");
     while($BC = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_5, COUNT(*) AS ToD FROM tb_tracerstudy
                  WHERE opsi_5='Kurang'");
     while($BD = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>5</td>
                  <td>Kemampuan belajar</td>
                    <td><?php echo $BA['ToA'] ?><?php}?> </td>
                  <td><?php echo $BB['ToB'] ?><?php}?></td>
                  <td><?php echo $BC['ToC'] ?><?php}?></td>
                  <td><?php echo $BD['ToD'] ?><?php}?></td>
                </tr>  
                                <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_6, COUNT(*) AS ToT1 FROM tb_tracerstudy
                  WHERE opsi_6='Tinggi'");
     while($BE = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_6, COUNT(*) AS ToT2 FROM tb_tracerstudy
                  WHERE opsi_6='Sedang'");
     while($BF = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_6, COUNT(*) AS ToT3 FROM tb_tracerstudy
                  WHERE opsi_6='Cukup'");
     while($BG = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_6, COUNT(*) AS ToT4 FROM tb_tracerstudy
                  WHERE opsi_6='Kurang'");
     while($BH = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>6</td>
                  <td>Kemampuan berkomunikasi</td>
                  <td><?php echo $BE['ToT1'] ?><?php}?> </td>
                  <td><?php echo $BF['ToT2'] ?><?php}?></td>
                  <td><?php echo $BG['ToT3'] ?><?php}?></td>
                  <td><?php echo $BH['ToT4'] ?><?php}?></td>
                </tr>  
                                                <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_7, COUNT(*) AS Td1 FROM tb_tracerstudy
                  WHERE opsi_7='Tinggi'");
     while($d1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_7, COUNT(*) AS Td2 FROM tb_tracerstudy
                  WHERE opsi_7='Sedang'");
     while($d2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_7, COUNT(*) AS Td3 FROM tb_tracerstudy
                  WHERE opsi_7='Cukup'");
     while($d3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_7, COUNT(*) AS Td4 FROM tb_tracerstudy
                  WHERE opsi_7='Kurang'");
     while($d4 = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>7</td>
                  <td>Bekerja di bawah tekanan</td>
                   <td><?php echo $d1['Td1'] ?><?php}?> </td>
                  <td><?php echo $d2['Td2'] ?><?php}?></td>
                  <td><?php echo $d3['Td3'] ?><?php}?></td>
                  <td><?php echo $d4['Td4'] ?><?php}?></td>
                </tr> 
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_8, COUNT(*) AS Td11 FROM tb_tracerstudy
                  WHERE opsi_8='Tinggi'");
     while($c1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_8, COUNT(*) AS Td22 FROM tb_tracerstudy
                  WHERE opsi_8='Sedang'");
     while($c2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_8, COUNT(*) AS Td33 FROM tb_tracerstudy
                  WHERE opsi_8='Cukup'");
     while($c3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_8, COUNT(*) AS Td44 FROM tb_tracerstudy
                  WHERE opsi_8='Kurang'");
     while($c4 = mysqli_fetch_array($data)){
      ?>
                <tr>
                   <td>8</td>
                  <td>Kemampuan adaptasi</td>
                   <td><?php echo $c1['Td11'] ?><?php}?> </td>
                  <td><?php echo $c2['Td22'] ?><?php}?></td>
                  <td><?php echo $c3['Td33'] ?><?php}?></td>
                  <td><?php echo $c4['Td44'] ?><?php}?></td>
                </tr>
              <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_9, COUNT(*) AS Td111 FROM tb_tracerstudy
                  WHERE opsi_9='Tinggi'");
     while($e1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_9, COUNT(*) AS Td222 FROM tb_tracerstudy
                  WHERE opsi_9='Sedang'");
     while($e2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_9, COUNT(*) AS Td333 FROM tb_tracerstudy
                  WHERE opsi_9='Cukup'");
     while($e3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_9, COUNT(*) AS Td444 FROM tb_tracerstudy
                  WHERE opsi_9='Kurang'");
     while($e4 = mysqli_fetch_array($data)){
      ?>
                <tr>
                   <td>9</td>
                  <td>Loyalitas</td>
                  <td><?php echo $e1['Td111'] ?><?php}?> </td>
                  <td><?php echo $e2['Td222'] ?><?php}?></td>
                  <td><?php echo $e3['Td333'] ?><?php}?></td>
                  <td><?php echo $e4['Td444'] ?><?php}?></td>
                </tr>
                                                           <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_10, COUNT(*) AS Td11f FROM tb_tracerstudy
                  WHERE opsi_10='Tinggi'");
     while($f1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_10, COUNT(*) AS Td22f FROM tb_tracerstudy
                  WHERE opsi_10='Sedang'");
     while($f2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_10, COUNT(*) AS Td33f FROM tb_tracerstudy
                  WHERE opsi_10='Cukup'");
     while($f3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_7, COUNT(*) AS Td44f FROM tb_tracerstudy
                  WHERE opsi_10='Kurang'");
     while($f4 = mysqli_fetch_array($data)){
      ?>
                <tr>
                   <td>10</td>
                  <td>Kepemimpinan</td>
                    <td><?php echo $f1['Td11f'] ?><?php}?> </td>
                  <td><?php echo $f2['Td22f'] ?><?php}?></td>
                  <td><?php echo $f3['Td33f'] ?><?php}?></td>
                  <td><?php echo $f4['Td44f'] ?><?php}?></td>
                </tr>  
                                                           <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_11, COUNT(*) AS Td1d FROM tb_tracerstudy
                  WHERE opsi_11='Tinggi'");
     while($dd1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_11, COUNT(*) AS Td2d FROM tb_tracerstudy
                  WHERE opsi_11='Sedang'");
     while($dd2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_11, COUNT(*) AS Td3d FROM tb_tracerstudy
                  WHERE opsi_11='Cukup'");
     while($dd3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_11, COUNT(*) AS Td4d FROM tb_tracerstudy
                  WHERE opsi_11='Kurang'");
     while($dd4 = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>11</td>
                  <td>Tanggung Jawab</td>
                    <td><?php echo $dd1['Td1d'] ?><?php}?> </td>
                  <td><?php echo $dd2['Td2d'] ?><?php}?></td>
                  <td><?php echo $dd3['Td3d'] ?><?php}?></td>
                  <td><?php echo $dd4['Td4d'] ?><?php}?></td>
                </tr>  
                                                           <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_12, COUNT(*) AS Td1w FROM tb_tracerstudy
                  WHERE opsi_12='Tinggi'");
     while($dw1 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_12, COUNT(*) AS Td2w FROM tb_tracerstudy
                  WHERE opsi_12='Sedang'");
     while($dw2 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_12, COUNT(*) AS Td3w FROM tb_tracerstudy
                  WHERE opsi_12='Cukup'");
     while($dw3 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_12, COUNT(*) AS Td4w FROM tb_tracerstudy
                  WHERE opsi_12='Kurang'");
     while($dw4 = mysqli_fetch_array($data)){
      ?>
                 <tr>
                   <td>12</td>
                  <td>Inisiatif</td>
                    <td><?php echo $dw1['Td1w'] ?><?php}?> </td>
                  <td><?php echo $dw2['Td2w'] ?><?php}?></td>
                  <td><?php echo $dw3['Td3w'] ?><?php}?></td>
                  <td><?php echo $dw4['Td4w'] ?><?php}?></td>
                </tr>  
                                                           <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_13, COUNT(*) AS Tdb1 FROM tb_tracerstudy
                  WHERE opsi_13='Tinggi'");
     while($e11 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_13, COUNT(*) AS Tdb2 FROM tb_tracerstudy
                  WHERE opsi_13='Sedang'");
     while($e22 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_13, COUNT(*) AS Tdb3 FROM tb_tracerstudy
                  WHERE opsi_13='Cukup'");
     while($e33 = mysqli_fetch_array($data)){
      ?>
      <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT opsi_13, COUNT(*) AS Tdb4 FROM tb_tracerstudy
                  WHERE opsi_13='Kurang'");
     while($e44 = mysqli_fetch_array($data)){
      ?>
                 <tr>
                  <td>13</td>
                  <td>Toleransi</td>
                  <td><?php echo $e11['Tdb1'] ?><?php}?> </td>
                  <td><?php echo $e22['Tdb2'] ?><?php}?></td>
                  <td><?php echo $e33['Tdb3'] ?><?php}?></td>
                  <td><?php echo $e44['Tdb4'] ?><?php}?></td>
                </tr>  
                <tfoot>        
              </tfoot>
              </table> 
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
      <section class="section">
      <div class="row">
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Total Keseluruhan</h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Kategori Penilaian</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
              <?php 
     include "../db/koneksi.php";  
     $data = mysqli_query($con,"SELECT kata, COUNT(*) as total from 
(
    SELECT opsi_1 as kata from tb_tracerstudy UNION ALL 
    SELECT opsi_2 as kata from tb_tracerstudy UNION ALL 
    SELECT opsi_3 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_4 as kata FROM tb_tracerstudy UNION ALL  
    SELECT opsi_5 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_6 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_7 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_8 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_9 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_10 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_11 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_12 as kata FROM tb_tracerstudy UNION ALL
    SELECT opsi_13 as kata FROM tb_tracerstudy
) AS kata_terpisah GROUP by kata HAVING COUNT(*) > 1");
     while($d = mysqli_fetch_array($data)){
      ?>
                <tbody>
                 <tr> 
                  <td><?php echo $d['kata']; ?> </td> 
                  <td><?php echo $d['total']; ?></td>
                </tr> 
                </tbody>
              <tfoot>    
               <tr>
               </tr>
 <?php
}
?> 
              </tfoot> 
              </table>
            </div>
          </div>
        </div>
      </thead>
    </div>
  </div>
</div>
</div>
</section>
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
<?php
}
?> 
<?php
}
?> 


















 