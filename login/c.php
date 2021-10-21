<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../build/functions.php';
// menangkap data yang dikirim dari form
$username = $_POST['user'];
$pass = $_POST['pass'];

	$result = mysqli_query($conn,"SELECT * FROM tb_pegawai where username='$username' and password='$pass'");
	$cek = mysqli_num_rows($result);
	
	$bio= mysqli_fetch_array($result);
	$nip_npak=$bio["nip_npak"];


    if($cek > 0 ){
        if($bio['jabatan']=='Wakil Direktur 1') {
            //menyimpan session user, pass, status dan id 
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $pass;
            $_SESSION['nip_npak']   = $nip_npak;
            $_SESSION['status']     = "login";

            header("location: ../WD-1/");
        }
        elseif($bio['jabatan']=='Kepala BAAK') {
            //menyimpan session user, pass, status dan id 
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $pass;
            $_SESSION['nip_npak']   = $nip_npak;
            $_SESSION['status']     = "login";

            header("location: ../K-BAAK/");
        }
        elseif ($bio['jabatan'] == 'Pegawai BAAK') {
            //menyimpan session user, pass, status dan id 
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $pass;
            $_SESSION['nip_npak']   = $nip_npak;
            $_SESSION['status']     = "login";

            header("location: ../P-BAAK/");
        } else {
            header("location:index.php?pesan=gagal");
        }
    }
    else {
        header("location:index.php?pesan=gagal");
    }

// // menyeleksi data user dengan username dan password yang sesuai
// $result = mysqli_query($koneksi,"SELECT * FROM mhs where mhs_nim='$mhs_nim' and mhs_password='$mhs_password'");
// $cek = mysqli_num_rows($result);

?>