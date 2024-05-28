
      <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h3 class="card-title"> Status aktivitas utama alumni</h3><br>
             
         </form>
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
    include "../db/koneksi.php";
    $query1 = mysqli_query($con,"SELECT P1, COUNT(P1) AS Jm_1 FROM tb_tracerstudy
                  WHERE P1='Bekerja'");
    while($VarData = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
    $query1 = mysqli_query($con,"SELECT P1, COUNT(P1) AS Jm_2 FROM tb_tracerstudy
                  WHERE P1='Melanjutkan Kuliah'");
    while($Jm_2  = mysqli_fetch_array($query1)){
      ?>
                <tbody>
                 <tr>
                  <td>1</td>    
                  <td>Bekerja</td> 
                  <td><?php echo $VarData['Jm_1'] ?> </td>
                </tr> 
                 <tr>
                  <td>2</td>    
                  <td>Melanjutkan Kuliah</td> 
                  <td><?php echo $Jm_2['Jm_2'] ?></td>
                </tr> 
              </tbody>
               <tfoot>
                 <?php       
                 include "../db/koneksi.php";      
                $query = "SELECT count(P1) as tot from tb_tracerstudy";
                $result = mysqli_query($con, $query);
                if(!$result) {
                die("Data tidak ada");
                 }
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                while ($Data = mysqli_fetch_array($result)) { 
                 ?>

                
               <tr>
                <th colspan="1"> Total</th>
                <th></th>
                <th><?php echo $Data['tot'] ?></th>
               </tr>
              </tfoot>
              </table>             
            </div>
          </div>
          <?php
}
?> 

<?php
}
?> 
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Status aktivitas utama alumni</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Bekerja', 
                      'Melanjutkan Kuliah'], 
                      datasets: [{
                        label: 'Bart Chart',
                        data: [
<?php
  include "../db/koneksi.php";
$A = mysqli_query($con,"select * from tb_tracerstudy  where P1='Bekerja'");
echo mysqli_num_rows($A);
?>,
  <?php
  include "../db/koneksi.php";
$b = mysqli_query($con,"select * from tb_tracerstudy  where P1='Melanjutkan Kuliah'");
echo mysqli_num_rows($b);
?>],

                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(75, 192, 192)'
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
<?php
}
?> 
<?php
}
?> 









