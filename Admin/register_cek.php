<?php
  include "../db/koneksi.php";
if ($_POST['register']) {
    $var_UserFullname  = $_POST['nama_lengkap'];
    $var_UserEmail     = $_POST['email'];
    $var_UserUsername  = $_POST['username'];
    $var_UserPassword  = $_POST['password'];
    $var_EkstensiPhoto  = array('png', 'jpg' );
    $var_FileName       = $_FILES['photo']['name'];
    $var_Y              = explode ('.', $var_FileName);
    $var_EkstensiName   = strtolower(end($var_Y));
    $var_Size           = $_FILES['photo']['size'];
    $var_FileTmp        = $_FILES['photo']['tmp_name'];
    $varString          = $var_UserUsername;
    $cekName        = mysqli_num_rows(mysqli_query($con,"SELECT * from tb_admin where username='$var_UserUsername'"));
if ($cekName > 0 ){
    echo"<script>alert('Maaf, Username yang anda masukkan sudah terdaftar');window.location.href='register.php';</script>";
}
else if($var_UserUsername == ""){
    echo"<script>alert('Data tidak boleh kosong');window.location.href='register.php';</script>";
}
else{
     if (in_array($var_EkstensiName, $var_EkstensiPhoto) === true ){
            if ($var_Size < 1044070) {
                move_uploaded_file($var_FileTmp, 'images/'.$var_FileName);
                $var_Query = mysqli_query($con, "INSERT INTO tb_admin (nama_lengkap, email, username, password, photo) VALUES ('$var_UserFullname', '$var_UserEmail','$var_UserUsername', md5('$var_UserPassword'), '$var_FileName')");
                if ($var_Query) {
                    echo"<script>alert('Registrasi Berhasil ');
                        window.location=('index.php')</script>";
                } else {
                    echo"<script>alert('Registrasi Gagal');
                        window.location=('register.php')</script>";
                    }
                } else {
                    echo"<script>alert('Ukuran Gambar Terlalu Besar');
                        window.location=('register.php')</script>";
                    }
                } else {
                    echo"<script>alert('Ekstensi Tidak Diperbolehkan');
                        window.location=('register.php')</script>";
                }
}

?>
<?php
}
?>