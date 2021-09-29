<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';

  // membuat variabel untuk menampung data dari form
 
  $nim = $_POST['nim'];
  $ijazah = $_POST['ijazah_up'];
  $transkip = $_POST['transkip_up'];
  $keterangan = $_POST['keterangan_up'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO `tb_uplegalisasi`(`nim`, `waktu_up`, `ijazah_up`, `transkip_up`, `keterangan_up`)
VALUES ('$nim',NOW(),'$ijazah','$transkip','$keterangan')";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='index.php';</script>";
    }
  ?>