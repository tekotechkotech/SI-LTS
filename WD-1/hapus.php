<?php 
include "../build/functions.php" ;
$id = $_GET["id"];
$pg = $_GET["pg"];
$tb = $_GET["tb"];
$pk = $_GET["pk"];

if (hapus($id, $tb, $pk) > 0 ) {
    echo "
    <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'data_$pg.php';
    </script>
";
}
else {
    echo "
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'data_$pg.php';
    </script>
";
}
?>