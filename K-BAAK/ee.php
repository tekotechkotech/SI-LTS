<?php

$pg = "alumni";
$tb = "tb_".$pg;
$to = "'data_".$pg.".php'";
echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = ".$to.";
            </script>
        ";
?>