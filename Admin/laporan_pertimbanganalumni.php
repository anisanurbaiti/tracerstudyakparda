
      <section class="section">
      <div class="row">
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
     include "../db/koneksi.php"; 
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_a FROM tb_tracerstudy
                  WHERE P6='Sesuai hati nurani'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_b FROM tb_tracerstudy
                  WHERE P6='Sesuai bidang keilmuan'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
      include "../db/koneksi.php"; 
    $query3= mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_c FROM tb_tracerstudy
                  WHERE P6='Mendapatkan pengetahuan dan ketrampilan'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P6, COUNT(P6) AS Jm_d FROM tb_tracerstudy
                  WHERE P6='Mendapatkan pengalaman'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
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
              include "../db/koneksi.php"; 
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
              <h5 class="card-title">Grafik Data Pertimbangan Utama Alumni Dalam Memilih Pekerjaan Terakhir/sekarang</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
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
                        data: [ <?php
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
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 165, 0)',
                          'rgb(173, 255, 48)',
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












