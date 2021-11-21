<?php 

include '../build/functions.php';
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="login"){
    
//melakukan pengalihan
header("location:index.php");
}

$nama   = $_SESSION['nama'];
$pas    = $_SESSION['password'];
$nip    = $_SESSION['nip_npak'];
?>

<a href="logout.php">hai <?=$nama  .
$pas   .
$nip   .
$status ?></a>

