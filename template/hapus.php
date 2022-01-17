<?php 

include '../build/config.php';
include '../build/functions.php';


$id = $_GET["id"];
$tb = $_GET["tb"];
$pk = $_GET["pk"];
$pg = $_GET["pg"];

if (hapus($id,$tb,$pk) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = '$pg.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = '$pg.php';
            </script>
        ";
}

?>