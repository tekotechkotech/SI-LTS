<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../build/functions.php';
// menangkap data yang dikirim dari form
$username = $_POST['user'];
$pass = $_POST['pass'];

$result_pgw = mysqli_query($conn,"SELECT * FROM tb_pegawai where username='$username' and password='$pass'");
$cek_pgw = mysqli_num_rows($result_pgw);

$result_alu = mysqli_query($conn,"SELECT * FROM tb_alumni where username='$username' and password='$pass'");
$cek_alu = mysqli_num_rows($result_alu);

$bio= mysqli_fetch_array($result_pgw);
$nip_npak=$bio["nip_npak"];

$bio_alu= mysqli_fetch_array($result_alu);
$nim=$bio_alu["nim"];

    if($cek_pgw > 0 ){
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
    elseif ($cek_alu > 0 ) {
        //menyimpan session user, pass, status dan id 
        $_SESSION['username']   = $username;
        $_SESSION['password']   = $pass;
        $_SESSION['nim']        = $nim;
        $_SESSION['status']     = "login";

        header("location: ../ALUMNI");
    }
    else {
        header("location:index.php?pesan=gagal");
    }

?>