<?php 
session_start();
include "db/koneksi.php";
if (isset($_POST['login'])) {
$Email             =$_POST['email'];
$Password          =md5($_POST['password']);
//query alumni
$sql ="SELECT * FROM tb_alumni WHERE email='$Email' AND password='$Password'";
//query perusahaan
$sql2 ="SELECT * FROM tb_perusahaan WHERE email_perusahaan='$Email' AND password='$Password'";
//alumni
$result=mysqli_query($con, $sql);
 //perusahaan
$result2=mysqli_query($con, $sql2);
    //alumni
  if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_alumni'] = $row['email'];
            //alumni
          echo "<script>alert('Anda Berhasil Login'); window.location=('Alumni/dashboard.php')</script>"; 
           //perusahaan
          } else if($result2->num_rows > 0){
             //perusahaan
            $rows = mysqli_fetch_assoc($result2);
             //perusahaan
        //cek jika status AKTIF maka akan masuk ke hal dashboard
    if($rows['status']=="Aktif"){
        $_SESSION['useridd'] =  $rows['email_perusahaan'];
        $_SESSION["id_perusahaan"]=$rows["id_perusahaan"];
        $_SESSION["nama_perusahaan"]=$rows["nama_perusahaan"];
        $_SESSION["bidang"]=$rows["bidang_usaha"];
        $_SESSION["deskripsi_bidang"]=$rows["deskripsi_bidang"];
        $_SESSION["alamat"]=$rows["alamat"];
        $_SESSION["username"]=$rows["username"];
        $_SESSION["telepon"]=$rows["telepon"];
        $_SESSION["website"]=$rows["website"];
        $_SESSION["password"]=$rows["password"];
        $_SESSION['status'] = "Aktif";
        echo "<script>alert('Anda Berhasil Login'); window.location=('Perusahaan/dashboard.php')</script>";
             //cek jika status pending maka akan kembali ke hal login
    }else if($rows['status']=="Pending"){
        $_SESSION['useridd'] = $rows['email_perusahaan'];
        $_SESSION['status'] = "Pending";
        //cek jika status pending maka akan kembali ke hal login
        echo "<script>alert('Gagal Login, Akun Anda Belum Terverifikasi'); window.location=('login.php')</script>";
    }else{
        echo "<script>alert('Gagal Login'); window.location=('login.php')</script>";
    }   
}else{
        echo "<script>alert('Gagal Login, Cek Username dan Password Anda'); window.location=('login.php')</script>";
}
}
?>


