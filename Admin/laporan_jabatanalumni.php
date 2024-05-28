
      <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Jabatan/posisi Alumni Dalam Pekerjaan</h3><br>
             
         </form>
              <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                   <th scope="col">No</th>
                    <th scope="col">Jabatan/posisi Alumni</th>
                    <th scope="col">Jumlah Alumni</th>
                  </tr>
                </thead>
                 <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah1 FROM tb_tracerstudy
                  WHERE P3='PNS'");
    while($Jumlah1 = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah2 FROM tb_tracerstudy
                  WHERE P3='Dosen/Guru'");
    while($Jumlah2 = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php";
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jumlah3 FROM tb_tracerstudy
                  WHERE P3='Pegawai Bank'");
    while($Jumlah3 = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab4 FROM tb_tracerstudy
                  WHERE P3='Karyawan Swasta'");
    while($Jab4 = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab5 FROM tb_tracerstudy
                  WHERE P3='Administrasi'");
    while($Jab5  = mysqli_fetch_array($query1)){
      ?>
      <?php 
     include "../db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab6 FROM tb_tracerstudy
                  WHERE P3='Chef'");
    while($Jab6  = mysqli_fetch_array($query1)){
      ?>
      <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab7 FROM tb_tracerstudy
                  WHERE P3='Resepsionis'");
    while($Jab7  = mysqli_fetch_array($query1)){
      ?>
      <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab8 FROM tb_tracerstudy
                  WHERE P3='Customer Services'");
    while($Jab8  = mysqli_fetch_array($query1)){
      ?>
      <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P3, COUNT(P3) AS Jab9 FROM tb_tracerstudy
                  WHERE P3='General Manager'");
    while($Jab9  = mysqli_fetch_array($query1)){
      ?>
      <?php 
     include "../db/koneksi.php";
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
              include "../db/koneksi.php";  
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

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['PNS', 'Dosen/Guru', 'Pegawai Bank', 'Karyawan Swasta', 'Administrasi', 'Chef', 'Resepsionis','Customer Services','General Manager','Food dan Beverage Manager'],
                      datasets: [{
                        label: 'Bar Chart',
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
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(144, 0, 71, 0,5)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(144, 0, 71, 0,5)',
                          'rgba(255, 99, 71, 1)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(0, 0, 255)',
                          'rgb(153, 102, 255)',
                          'rgb(0, 0, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>












