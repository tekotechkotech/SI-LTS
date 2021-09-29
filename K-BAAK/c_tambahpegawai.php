<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../build/config/config.php';

  // membuat variabel untuk menampung data dari form
  $nip_npak = $_POST['nip_npak'];
  $pass = $_POST['pass'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $jabatan = $_POST['jabatan'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO `tb_pegawai`(`nip_npak`, `password`, `nama`, `jk`, `jabatan`, `email`, `no_hp`)
VALUES ('$nip_npak','$pass','$nama','$jk','$jabatan','$email','$no_hp')
";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='data_pegawai.php';</script>";
    }
  ?>