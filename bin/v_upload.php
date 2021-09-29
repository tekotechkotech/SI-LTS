<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<title>
    UPLOAD BERKAS
</title>
<?php
$nim = $_GET["nim"];
?>

            <h3>Upload Berkas</h3>
            <form action="c_upload.php" method="post">
                                    <P>NIM</P><input type="text" value="<?= $nim ; ?>"  name="nim" Required><br>
                                    <P>IJAZAHUP</P><input type="file" name="ijazah_up" Required=""><br>
                                    <P>TRANSKIPUP</P><input type="file"  name="transkip_up" Required=""><br>
                                    <P>KETERANGAN</P><input type="text"  name="keterangan_up" Required=""><br>
                            <br><button type="submit" name="button" id="button" value="Proses"><b>Simpan</b></button>
                            <a href="index.php">Batal</a>
                        </form>


       
    </body>
</html>