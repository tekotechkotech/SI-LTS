<?php

include '../build/config.php';
include '../build/functions.php';

//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="login"){
//melakukan pengalihan
header("location:../alu/login/index.php");
}

$username   = $_SESSION['username'];
$password    = $_SESSION['password'];
$nip_npak    = $_SESSION['nip_npak'];

$result = mysqli_query($conn,"SELECT * FROM tb_pegawai where nip_npak='$nip_npak'");
$bio= mysqli_fetch_array($result);

$nip_npak=$bio["nip_npak"];

include "../template/t_atas.php" ;
include "../template/header.php" ;

?>
