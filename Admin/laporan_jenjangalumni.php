
      <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Jenjang Pendidikan Alumni Yang Melanjutkan Kuliah</h3><br>        
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
     include "../db/koneksi.php";  
    $query1 = mysqli_query($con,"SELECT P12, COUNT(P12) AS Jm_1 FROM tb_tracerstudy
                  WHERE P12='Sarjana Terapan (D4)'");
    while($VarData = mysqli_fetch_array($query1)){
      ?>
       <?php 
     include "../db/koneksi.php"; 
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
              </tbody>
               <?php 
               include "../db/koneksi.php"; 
              $data = mysqli_query($con,"SELECT count(P12) as Total from tb_tracerstudy WHERE P1='Melanjutkan Kuliah'");
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
              <h5 class="card-title">Grafik Jenjang Pendidikan Alumni Yang Melanjutkan Kuliah</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['Sarjana Terapan (D4)', 
                      'Program Sarjana (S1)'], 
                      datasets: [{
                        label: 'Bart Chart',
                        data: [
<?php
  include "../db/koneksi.php";
$A = mysqli_query($con,"select * from tb_tracerstudy  where P12='Sarjana Terapan (D4)'");
echo mysqli_num_rows($A);
?>,
  <?php
  include "../db/koneksi.php";
$b = mysqli_query($con,"select * from tb_tracerstudy  where P12='Program Sarjana (S1)'");
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









