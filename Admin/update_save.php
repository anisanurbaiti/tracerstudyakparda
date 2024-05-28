  <?php
  include "../db/koneksi.php";
    $id_admin          =$_POST['id_admin'];
    $Namalengkap       = $_POST['nama_lengkap'];
    $email             = $_POST['email'];
    $username          =$_POST['username'];
    $gambar   = $_FILES['photo']['name'];   
    if($gambar!= "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $gambar); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['photo']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
      move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); 
        //query ubah jika mengubah foto
      $query  = "UPDATE tb_admin SET       
            nama_lengkap = '$Namalengkap', 
            email = '$email',
            username = '$username',  
            photo = '$nama_gambar_baru'";
            $query .= "WHERE id_admin = '$id_admin'";
            $result = mysqli_query($con, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($con).
                     " - ".mysqli_error($con));
                } else {
                   header("location:data_admin.php?init=Profile berhasil diubah");
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='data_admin.php';</script>";
              }
    } else {
      //query ubah jika tanpa mengubah foto
       $query  = "UPDATE tb_admin SET       
            nama_lengkap = '$Namalengkap', 
            email = '$email',
            username = '$username'";
            $query .= "WHERE id_admin = '$id_admin'";
      $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
          header("location:data_admin.php?init=Profile berhasil diubah");
      }
    }
?>
