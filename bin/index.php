<?php
include 'config.php';
include 'template/link.html';
include 'template/header.html';
include 'template/navbar.html';
include 'template/sidebar.html';
include 'template/footer.html';

$user = mysqli_query($koneksi,"SELECT * FROM tb_alumni");
$user = mysqli_query($koneksi,"SELECT * FROM tb_pegawai");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AWAL</title>
</head>

<body>
    <h1>Login Sebagai?</h1>
    <a href="v_wd1.php">Wakil Direktur 1</a>
    <a href="v_baak.php">BAAK</a>
    
    <h2>DATA ALUMNI</h2>
    <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">TAHUN LULUS</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NO HP</th>
                </tr>
            </thead>
            <?php foreach ($user as $row) : ?>
            <tbody>
                <tr>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["thn_lulus"] ?></td>
                <td><?= $row["jk"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["no_hp"] ?></td>
                    <td>
                        <a class="btn btn-danger" href="v_upload.php?nim=<?= $row["nim"]; ?>">Upload</a>
                    </td>
                </tr>
            </tbody>
                <?php endforeach;?>
            </table>


            <h2>DATA PEGAWAI</h2>
    <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">TAHUN LULUS</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NO HP</th>
                </tr>
            </thead>
            <?php foreach ($user as $row) : ?>
            <tbody>
                <tr>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["thn_lulus"] ?></td>
                <td><?= $row["jk"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["no_hp"] ?></td>
                    <td>
                        <a class="btn btn-danger" href="v_upload.php?nim=<?= $row["nim"]; ?>">Upload</a>
                    </td>
                </tr>
            </tbody>
                <?php endforeach;?>
            </table>


</body>


</html>