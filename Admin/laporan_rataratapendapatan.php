
      <section class="section">
      <div class="row">
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
     include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_a FROM tb_tracerstudy
                  WHERE P7='Rp 500.000 - Rp 1.000.000'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
    include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_b FROM tb_tracerstudy
                  WHERE P7='Rp 1.000.000 - Rp 5.000.000'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query3= mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_c FROM tb_tracerstudy
                  WHERE P7='Rp 5.000.000 - Rp 7.500.000'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";  
    $query3 = mysqli_query($con,"SELECT P7, COUNT(P7) AS Jm_d FROM tb_tracerstudy
                  WHERE P7='Rp 7.500.000 - Rp 10.000.000'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
      include "../db/koneksi.php"; 
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
      include "../db/koneksi.php";  
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
            </thead>
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













