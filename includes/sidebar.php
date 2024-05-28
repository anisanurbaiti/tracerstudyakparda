  <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Cari</button>
                </span>
              </form>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Berita Lainnya</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($con,"SELECT * from tb_berita order by id_berita desc");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?id_berita=<?php echo htmlentities($row['id_berita'])?>"><?php echo htmlentities($row['judul_berita']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
