<?php
  include "../db/koneksi.php";
    $kode               = $_POST['id_berita'];
    $judul              = $_POST['judul_berita'];
    $isi                = $_POST['isi_berita'];
    $photo              = $_FILES['photo']['name'];   
    $tanggal            = date ('d-m-Y');
    $tgl                = $_POST['tanggal'];
    $id_admin           =$_POST['id_admin'];
    // ubah format tanggal menjadi Tahun-Bulan-Hari (Y-m-d) sebelum disimpan ke database
    $tanggal= date('Y-m-d', strtotime($tgl));
     // ambil data file hasil submit dari form
    if($photo != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $photo); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['photo']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$photo; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
      move_uploaded_file($file_tmp, '../images/'.$nama_gambar_baru); 
       // jika data foto ada (foto diubah)
        // cek query
        // jika proses update berhasil
      $query  = "UPDATE tb_berita SET       
            judul_berita = '$judul', 
            isi_berita = '$isi',
            photo = '$nama_gambar_baru',
            tanggal = '$tanggal',
            id_admin = '$id_admin'";
            $query .= "WHERE id_berita = '$kode'";
            $result = mysqli_query($con, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($con).
                     " - ".mysqli_error($con));
                } else {       
                 // alihkan ke halaman data  dan tampilkan pesan berhasil ubah data      
            echo "<script>alert('Data Berhasil Di Ubah');window.location='data_berita.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='data_berita_add.php';</script>";
              }
    } else {
       // mengecek data foto dari form ubah data
    // jika data foto tidak ada (foto tidak diubah)
       $query  = "UPDATE tb_berita SET       
            judul_berita = '$judul', 
            isi_berita = '$isi',
            tanggal = '$tanggal',
            id_admin = '$id_admin'";
            $query .= "WHERE id_berita = '$kode'";
      $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
          // alihkan ke halaman data  dan tampilkan pesan berhasil ubah data
          echo "<script>alert('Data Berhasil Di Ubah');window.location='data_berita.php';</script>";
      }
    }
?>

 


 
