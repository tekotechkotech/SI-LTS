<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=kem, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Kembali</a>
    <h1>BAAK</h1>

    <table>
        <h2>DOKUMEN MASUK</h2>
        <thead>
            <tr>
            <th scope="col">Tgl Upload</th>
            <th scope="col">NIM</th>
            <!-- <th scope="col">NAMA</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">TAHUN KELULUSAN</th> -->
            </tr>
        </thead>
                <?php
                $user = mysqli_query($koneksi,"SELECT * FROM tb_uplegalisasi");
                //TODO membuat view nim - nama - data diri dll

                foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["waktu_up"] ?></td>
            <td><?= $row["nim"] ?></td>
                <td>
                    <a href="ver1.php?id_kasir=<?= $row["nim"]; ?>">Verifikasi, lanjutkan ke WD1</a>
                    <a href="tolakv1.php?id_kasir=<?= $row["nim"]; ?>">Tolak Dokumen</a>
                    <!-- TODO MEMBUAT DATABASE DOKUMEN DI TOLAK -->
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>    

    <table>
        <h2>DOKUMEN SIAP CETAK</h2>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php
                $user = mysqli_query($koneksi,"SELECT * FROM tb_uplegalisasi");
                //TODO membuat view nim - nama - data diri dll

                foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["waktu_up"] ?></td>
            <td><?= $row["nim"] ?></td>
                <td>
                    <a href="ver3.php?id_kasir=<?= $row["nim"]; ?>">Cetak Dokumen</a>
                    <!-- TODO MEMBUAT DATABASE DOKUMEN DI TOLAK -->
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>      
</body>
</html>