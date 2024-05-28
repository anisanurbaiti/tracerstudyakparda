
      <section class="section">
      <div class="row">
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
     include "../db/koneksi.php";
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml1 FROM tb_tracerstudy
                  WHERE P5='Facebook'");
    while($jml1  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml2 FROM tb_tracerstudy
                  WHERE P5='Website'");
    while($jml2  = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml3 FROM tb_tracerstudy
                  WHERE P5='Saudara'");
    while($jml3  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "../db/koneksi.php";
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml4 FROM tb_tracerstudy
                  WHERE P5='Teman'");
    while($jml4  = mysqli_fetch_array($query1)){
      ?>
       <?php 
    include "../db/koneksi.php";
    $query1 = mysqli_query($con,"SELECT P5, COUNT(P5) AS jml5 FROM tb_tracerstudy
                  WHERE P5='Dosen'");
    while($jml5  = mysqli_fetch_array($query1)){
      ?>
      <?php 
    include "../db/koneksi.php"; 
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
      include "../db/koneksi.php"; 
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

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Facebook',
                        'Website',
                        'Saudara',
                        'Teman',
                        'Dosen',
                        'HRD Perusahaan'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php
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












