<?php
  include "../db/koneksi.php"; 
if ($_POST['save']) {
    $judul              = $_POST['judul_berita'];
    $isi                = $_POST['isi_berita'];
    $var_EkstensiPhoto  = array('png', 'jpg' );
    $var_FileName       = $_FILES['photo']['name'];
    $var_Y              = explode ('.', $var_FileName);
    $var_EkstensiName   = strtolower(end($var_Y));
    $var_Size           = $_FILES['photo']['size'];
    $var_FileTmp        = $_FILES['photo']['tmp_name'];
    $TglBuat            = date ('Y-m-d');
    $id_admin           =$_POST['id_admin'];
    if (in_array($var_EkstensiName, $var_EkstensiPhoto) === true ){
            if ($var_Size < 1044070) {
                move_uploaded_file($var_FileTmp, '../images/'.$var_FileName);
                $var_Query = mysqli_query($con, "INSERT INTO tb_berita (judul_berita,isi_berita,photo,tanggal,id_admin) VALUES ('$judul','$isi','$var_FileName','$TglBuat','$id_admin')");
                if ($var_Query) {
                         header("location:data_berita.php?init=Berhasil Tersimpan");
                } else {
                         header("location:data_berita_add.php?init=Gagal Tersimpan");
                    }
                } else {
                    echo"<script>alert('Ukuran Gambar Terlalu Besar');
                        window.location=('data_berita_add.php')</script>";
                    }
                } else {
                    echo"<script>alert('Ekstensi Tidak Diperbolehkan');
                        window.location=('data_berita_add.php')</script>";
                }
}

?>