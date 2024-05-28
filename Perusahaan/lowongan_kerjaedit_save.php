<?php
  include "../db/koneksi.php";
    $id_low             = $_POST['id_lowongan'];
    $id_perusahaan      = $_POST['id_perusahaan'];
    $judul              = $_POST['judul'];
    $posisi             = $_POST['posisi'];
    $benefit            = $_POST['benefit'];
    $TglBuat            = $_POST['tanggal_buat'];
    $TglExpired         = $_POST['tanggal_berakhir'];
    $Deskripsi          = $_POST['deskripsi'];
    $Lokasi             = $_POST['lokasi'];
    $gambar_produk      = $_FILES['photos']['name'];
    $status_lowker      = $_POST['status_lowker'];
    if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $gambar_produk); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['photos']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
      move_uploaded_file($file_tmp, '../images/'.$nama_gambar_baru);
       // jika data foto ada (foto diubah)
        // cek query
        // jika proses update berhasil 
      $query  = "UPDATE tb_lowongan SET  
            id_lowongan='$id_low',   
            id_perusahaan='$id_perusahaan',    
            judul= '$judul', 
            posisi='$posisi',  
            benefit='$benefit', 
            tanggal_buat='$TglBuat',  
            tanggal_berakhir='$TglExpired',   
            deskripsi= '$Deskripsi',
            lokasi='$Lokasi',  
            photos = '$nama_gambar_baru',
            status_lowker = '$status_lowker'";
            $query .= "WHERE id_lowongan = '$id_low'";
            $result = mysqli_query($con, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($con).
                     " - ".mysqli_error($con));
                } else {
                   echo"<script>alert('Berhasil Di Update ');
                        window.location=('lowongan_kerja.php')</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='lowongan_kerja_add.php';</script>";
              }
    } else {
        // mengecek data foto dari form ubah data
    // jika data foto tidak ada (foto tidak diubah)
       $query  = "UPDATE tb_lowongan SET       
             id_lowongan='$id_low',   
            id_perusahaan='$id_perusahaan',    
            judul= '$judul', 
            posisi='$posisi',  
            benefit='$benefit', 
            tanggal_buat='$TglBuat',  
            tanggal_berakhir='$TglExpired',   
            deskripsi= '$Deskripsi',
            lokasi='$Lokasi',  
            status_lowker = '$status_lowker'";
            $query .= "WHERE id_lowongan = '$id_low'";
      $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
          echo"<script>alert('Berhasil Di Update ');
                        window.location=('lowongan_kerja.php')</script>";
      }
    }
?>

 


 
