 <?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRACER STUDY AKPARDA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>    
  <?php
   include "../db/koneksi.php";
    $tampil    =mysqli_query($con, "SELECT * FROM tb_admin WHERE username='$_SESSION[username]'");
    $VarData   =mysqli_fetch_array($tampil);
    ?> 
     <?php  
  include "../db/koneksi.php"; 
  $id=$_GET['id_admin'];
  $query = "SELECT * FROM tb_admin WHERE id_admin= $id LIMIT 1";
  $result = mysqli_query($con, $query);
  $rows = mysqli_fetch_array($result);
  ?>
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Admin</h1>
    </div><!-- End Page Title -->

 <section class="section profile">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Detail Profil </h5>
                  <form action="update_save.php" method="post" enctype="multipart/form-data" class="row g-3">
                     <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ID Admin</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="id_admin" type="text" class="form-control" id="fullName" value="<?php  echo $rows['id_admin'] ?>">
                      </div>
                    </div>
                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo Profil</label>
                      <div class="col-md-8 col-lg-9">
                      <img src="images/<?php echo $rows['photo']; ?>" style="width: 150px;float: left;margin-bottom: 5px;"><br>
                        <br> 
                        <br>
                        <input type="file" name="photo" value="<?php  echo $rows['photo'] ?>" class="form-control">
                    </div>
                  </div>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama_lengkap" type="text" class="form-control" id="fullName" value="<?php  echo $rows['nama_lengkap'] ?>">
                      </div>
                    </div>
                     <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="Phone" value="<?php  echo $rows['email'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="Email" value="<?php  echo $rows['username'] ?>">
                      </div>
                    </div>
<!--                      <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="passwordlama" value="<?php // echo $rows['password'] ?>" name="passwordlamaa">
                      </div>
                    </div>
                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-8 col-lg-9">
                        <input type="checkbox" class="form-check-input" id="show-password-lamaa"> Tampilkan Password
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                      <div class="col-md-8 col-lg-9">
                       <input type="password" class="form-control" id="inputPassword" value="" name="password">
                      </div>

                    </div>
                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-8 col-lg-9">
                        <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
                      </div>
                      
                    </div> -->
                     <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>

  </main><!-- End #main -->
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
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <!--  <script>
        $(document).ready(function() {
            $('#show-password-lamaa').click(function() {
                if ($(this).is(':checked')) {
                    $('#passwordlamaa').attr('type', 'text');
                } else {
                    $('#passwordlamaa').attr('type', 'password');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#inputPassword').attr('type', 'text');
                } else {
                    $('#inputPassword').attr('type', 'password');
                }
            });
        });
    </script> -->

</body>

</html>
<?php include 'footer.php';  ?>

