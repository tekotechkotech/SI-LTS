<?php

include '../build/config.php';
include '../build/functions.php';

//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="login"){
//melakukan pengalihan
header("location: ../login/");
}

$username   = $_SESSION['username'];
$password   = $_SESSION['password'];
$nim        = $_SESSION['nim'];

$result = mysqli_query($conn,"SELECT * FROM tb_alumni where nim='$nim';");
$bio    = mysqli_fetch_array($result);


include "../template/t_atas.php" ;


?>
