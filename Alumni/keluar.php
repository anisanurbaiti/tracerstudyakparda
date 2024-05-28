<?php
session_start();
$_SESSION['id_alumni']='';
unset($_SESSION['id_alumni']);
session_unset();
session_destroy();
 echo "<script>alert('Anda Berhasil Logout'); window.location=('../login.php')</script>";
?>