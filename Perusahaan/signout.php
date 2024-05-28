<?php
session_start();
$_SESSION['useridd']='';
unset($_SESSION['useridd']);
session_unset();
session_destroy();
 echo "<script>alert('Anda Berhasil Logout'); window.location=('../login.php')</script>";
?>