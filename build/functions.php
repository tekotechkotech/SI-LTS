<?php 
	// koneksi php
    $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "lts";

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
    // koneksi php //

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

    
    //HAPUS//
function hapus($id, $tb, $pk){
    global $conn;
    mysqli_query($conn, "DELETE FROM $tb WHERE $pk = $id");
    return mysqli_affected_rows($conn);
}
    //HAPUS//

    //TAMBAH//
function tambahalu($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $foto = htmlspecialchars($data["upload"]);
    $pass = htmlspecialchars($data["pass"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $thn_lulus = htmlspecialchars($data["thn_lulus"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $query = "INSERT INTO `tb_alumni`
            VALUES
            ('$nim', '$pass', '$nama', '$prodi', '$thn_lulus',
            '$jk', '$email', '$no_hp', '$foto')";

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

//EDIT//
function editalu($data){
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    //$foto = htmlspecialchars($data["foto"]);
    //$pass = htmlspecialchars($data["pass"]);
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $thn_lulus = htmlspecialchars($data["thn_lulus"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    
    // `password`='$pass',
    // ,`foto`='$foto'

    $query = "UPDATE `tb_alumni` 
            SET
            `nama`='$nama',`prodi`='$prodi',
            `thn_lulus`='$thn_lulus',`jk`='$jk',`email`='$email',
            `no_hp`='$no_hp'
            WHERE  `nim` = '$nim'";

$result = mysqli_query($conn,$query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Edit Data Berhasil.');window.location='data_alumni.php';</script>";
    }
};
//EDIT//



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
    //$foto = htmlspecialchars($data["foto"]);
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
?>