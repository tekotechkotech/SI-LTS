<?php 
include "config.php";

    // READ //
function query($query)
{
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
    // READ //

    // DASHBOARD

$query = query("SELECT * FROM v_dashboard ")[0];

$jumlah_pegawai = $query['pegawai'];
$jumlah_alumni = $query['alumni'];
$jumlah_legalisasi = $query['sudah_legalisasi'];

    //HAPUS//
function hapus($id, $tb, $pk){
    global $conn;
    mysqli_query($conn, "DELETE FROM $tb WHERE $pk = '$id");
    return mysqli_affected_rows($conn);
}
    //HAPUS//

    //TAMBAH//
function tambahalu($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $thn_lulus = htmlspecialchars($data["thn_lulus"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    //$foto = upload();
    
    $query = "INSERT INTO `tb_alumni`
            (`nim`, `username`, `password`, `nama`, `jk`, `no_hp`, `email`, `thn_lulus`, `prodi`)
            VALUES ('$nim','$nim','$nim','$nama','$jk','$no_hp','$email','$thn_lulus','$prodi')";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
          " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='data_alumni.php';</script>";
    }
};
//TAMBAH//



    //TAMBAH//
    function tambahpgw($data){
        global $conn;
        $nip_npak = htmlspecialchars($data["nip_npak"]);
        $foto = htmlspecialchars($data["upload"]);
        $pass = htmlspecialchars($data["pass"]);
        $nama = htmlspecialchars($data["nama"]);
        $jk = htmlspecialchars($data["jk"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
    
        $query = "INSERT INTO `tb_pegawai`
                VALUES
                ('$nip_npak', '$pass', '$nama', '$jk','$jabatan'
                , '$email', '$no_hp', '$foto')";
    
    $result = mysqli_query($conn,$query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
              " - ".mysqli_error($conn));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Tambah Data Berhasil.');window.location='data_pegawai.php';</script>";
        }
    };
    //TAMBAH//


//EDIT//
function editpgw($data){
    global $conn;
    $nip_npak = htmlspecialchars($data["nip_npak"]);
    //$pass = htmlspecialchars($data["pass"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    
    // `password`='$pass',
    // ,`foto`='$foto'

    $query = "UPDATE `tb_pegawai` 
            SET
            `nama`='$nama',`jabatan`='$jabatan',`jk`='$jk',`email`='$email',
            `no_hp`='$no_hp'
            WHERE  `nip_npak` = '$nip_npak'";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Edit Data Berhasil.');window.location='data_pegawai.php';</script>";
    }
};
//EDIT//

// UPLOAD //

function upload(){
    global $conn;

	$namaFile = $_FILES['upload']['name'];
	$ukuranFile = $_FILES['upload']['size'];
	$error = $_FILES['upload']['error'];
	$tmpName = $_FILES['upload']['tmp_name'];

	if ($error === 4 ){
		echo "<script>
		alert('Silahkan upload gambar dahulu');
		document.location.href='data_alumni.php';
		</script>";
		return die;
	}

	$ekstansiGambarValid = ['jpg','png','jpeg'];
	$ekstansiGambar  	 = explode('.',$namaFile);
	$ekstansiGambar 	 = strtolower(end($ekstansiGambar));
	if(!in_array($ekstansiGambar,$ekstansiGambarValid)){
		echo "<script>
		alert('Ekstansi Gambar tidak Valid');
		document.location.href='data_alumni.php';
		</script>";
		return die;
	}

	if ($ukuranFile > 5000000){
			echo "<script>
		alert('ukuran File TERLALU BESAR');
		document.location.href='data_alumni.php';
		</script>";
		return die;
	}
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstansiGambar;

	move_uploaded_file($tmpName,'../dist/img/alumni/'.$namaFileBaru);
	return $namaFileBaru;
}


function verifikasi($data){
    global $conn;
    $id_proses = htmlspecialchars($data["id_proses"]);
    $nip_npak = htmlspecialchars($data["nip_npak"]);
    $level_proses = htmlspecialchars($data["level_proses"]);
    $status_verifikasi = htmlspecialchars($data["status_verifikasi"]);
    $ket = htmlspecialchars($data["keterangan"]);

    if($status_verifikasi == "2") {
        $query = "UPDATE `tb_hproses` 
        SET `nip_npak`='$nip_npak',
        `waktu_hproses`=now(),`acc`='2',
        `keterangan`='$ket' WHERE `id_proses`='$id_proses' AND `level_proses`='$level_proses'";
        $querys = "UPDATE tb_hproses
        SET
            nip_npak = NULL, waktu_hproses = NULL,
            acc = NULL
        WHERE
            level_proses > '$level_proses'
            AND id_proses = '$id_proses'";
    
    $result = mysqli_query($conn,$querys) and mysqli_query($conn,$query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        } else {
        echo "<script>alert('Verifikasi Berhasil.');window.location='data_legal_tolak.php';</script>";
        }
    }
    else {
        $query = "UPDATE `tb_hproses` 
        SET `nip_npak`='$nip_npak',
        `waktu_hproses`=now(),`acc`='1',
        `keterangan`='$ket' WHERE `id_proses`='$id_proses' AND `level_proses`='$level_proses'";
            $result = mysqli_query($conn,$query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        } else {
        echo "<script>alert('Verifikasi Berhasil.');window.location='data_legalisasi.php';</script>";
        }
    }
};

//////////////////////////////////////////////TRACER STUDY////////////////////////////////////////////

//TAMBAH//
function tambahts($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama_perusahaan = htmlspecialchars($data["nama_perusahaan"]);
    $alamat_perusahaan = htmlspecialchars($data["alamat_perusahaan"]);
    $unit = htmlspecialchars($data["unit"]);
    $thnawal = htmlspecialchars($data["tahun_mulai"]);
    $gajiawal = htmlspecialchars($data["gaji_awal"]);
    $gajiskrg = htmlspecialchars($data["gaji_sekarang"]);
    $relevansi = htmlspecialchars($data["relevansi"]);
    $kursus = htmlspecialchars($data["kursus"]);
    $saran = htmlspecialchars($data["saran"]);
    
    $query = "INSERT INTO tb_tracers
    (`nim`, `tgl_input`, `tahun_mulai_kerja`, `nama_perusahaan`, `alamat_perusahaan`,
    `bagian_unit`, `gaji_awal`, `gaji_sekarang`, `relevansi`, `kursus`, `saran_usulan`)
    VALUES ('$nim',now(),'$thnawal','$nama_perusahaan','$alamat_perusahaan','$unit','$gajiawal',
    '$gajiskrg','$relevansi','$kursus','$saran')";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
          " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Tracer Study Berhasil.');window.location='tracer.php';</script>";
    }
};
//TAMBAH//

//TAMBAH//
function editts($data){
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama_perusahaan = htmlspecialchars($data["nama_perusahaan"]);
    $alamat_perusahaan = htmlspecialchars($data["alamat_perusahaan"]);
    $unit = htmlspecialchars($data["unit"]);
    $thnawal = htmlspecialchars($data["tahun_mulai"]);
    $gajiawal = htmlspecialchars($data["gaji_awal"]);
    $gajiskrg = htmlspecialchars($data["gaji_sekarang"]);
    $relevansi = htmlspecialchars($data["relevansi"]);
    $kursus = htmlspecialchars($data["kursus"]);
    $saran = htmlspecialchars($data["saran"]);
    
    $query = "UPDATE `tb_tracers` SET
    `tahun_mulai_kerja`='$thnawal',
    `nama_perusahaan`='$nama_perusahaan',`alamat_perusahaan`='$alamat_perusahaan',`bagian_unit`='$unit',
    `gaji_awal`='$gajiawal',`gaji_sekarang`='$gajiskrg',`relevansi`='$relevansi',
    `kursus`='$kursus',`saran_usulan`='$saran'
    WHERE id_tracer=$id";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
          " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Edit Tracer Study Berhasil.');window.location='tracer.php';</script>";
    }
};
//TAMBAH//


//EDIT//
function editprofilalu($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $username = htmlspecialchars($data["username"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $status = htmlspecialchars($data["status"]);
    $thn_lulus = htmlspecialchars($data["thn_lulus"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $ipk = htmlspecialchars($data["ipk"]);
    $judul_ta = htmlspecialchars($data["judul_ta"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    
    // `password`='$pass',
    // ,`foto`='$foto'

    $query = "UPDATE `tb_alumni` SET
    `username`='$username',`nama`='$nama',
    `jk`='$jk',`status`='$status',
    `alamat`='$alamat',`no_hp`='$no_hp',
    `email`='$email',`thn_lulus`='$thn_lulus',
    `prodi`='$prodi',`ipk`='$ipk',
    `judul_ta`='$judul_ta' WHERE nim=$nim";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Edit Data Berhasil.');window.location='profil.php';</script>";
    }
};
//EDIT//


//TAMBAH//
function ajulegal($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $jenis = htmlspecialchars($data["jenis"]);
    // $upload = htmlspecialchars($data["upload"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    
    $query = "INSERT INTO `tb_upload`
    (`nim`, `waktu_up`, `jenis_berkas`, 
    `keterangan_upload`)
    VALUES ('$nim',now(),'$jenis',
    '$keterangan')";

// TODO NAMBAH FOTO 
// `berkas_upload`, 
// '$upload',

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
          " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Pengajuan Legalisir Berhasil.');window.location='legal.php';</script>";
    }
};
//TAMBAH//

?>