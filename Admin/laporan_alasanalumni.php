
      <section class="section">
      <div class="row">
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alasan Utama Alumni Melanjutkan Kuliah</h5>
                <thead>
 <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Alasan</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
                 <?php 
     include "../db/koneksi.php"; 
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_a FROM tb_tracerstudy
                  WHERE P15='Mengisi Kekosongan Menganggur'");
    while($Jm_a = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_b FROM tb_tracerstudy
                  WHERE P15='Perlu Untuk Bekerja'");
    while($Jm_b = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query3= mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_c FROM tb_tracerstudy
                  WHERE P15='Merasa Ilmu Yang Dimiliki Masih Kurang'");
    while($Jm_c = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_d FROM tb_tracerstudy
                  WHERE P15='Ada Kesempatan'");
    while($Jm_d = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";
    $query3 = mysqli_query($con,"SELECT P15, COUNT(P15) AS Jm_e FROM tb_tracerstudy
                  WHERE P15='Sebagai Syarat Dalam Pekerjaan (di Tempat Bekerja)'");
    while($Jm_e  = mysqli_fetch_array($query3)){
      ?>
       <?php 
     include "../db/koneksi.php";  
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
               include "../db/koneksi.php";  
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
            </thead>
            </div>                     
          </div>   
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Data Alasan Utama Alumni Melanjutkan Kuliah</h5>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
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
?>
],
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
              <!-- End Pie CHart -->

            </div>
          </div>














