<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../build/functions.php';
// menangkap data yang dikirim dari form
$username = $_POST['user'];
$pass = $_POST['pass'];

	$result = mysqli_query($conn,"SELECT * FROM tb_alumni where username='$username' and password='$pass'");
	$cek = mysqli_num_rows($result);

	$bio = mysqli_fetch_array($result);
	$nim = $bio["nim"];

    if($cek > 0 ){
            //menyimpan session user, pass, status dan id 
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $pass;
            $_SESSION['nim']        = $nim;
            $_SESSION['status']     = "login alu";

            header("location: ../");
    }
    else {
        header("location:index.php?pesan=gagal");
    }

?>