<?php
$hal = "tlk";
include "../template/sidebar.php" ;
include "modal_alumni.php" ;
?>

<head>
    <title>Admin | Data Alumni</title>
</head>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Legalisasi diTolak
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Alumni</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>NAMA</th>
                                            <th>JENIS BERKAS</th>
                                            <th>WAKTU</th>
                                            <th>KETERANGAN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $alumni = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        INNER JOIN tb_hproses
                                        ON tb_hproses.id_proses = tb_proses.id_proses
                                        WHERE tb_proses.level_proses='6' AND acc='2'");
                                                foreach ($alumni as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $row["nim"]; ?></td>
                                                <td><?= $row["nama"]; ?></td>
                                                <td><?= $row["jenis_berkas"]; ?></td>
                                                <td><?= $row["waktu_hproses"]; ?></td>
                                                <td><?= $row["keterangan"]; ?></td>
                                                <td>
                                                    <!-- tombol modal -->
                                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tolakdetail<?= $row['id_proses']; ?>">
                                                        <i class="fa fa-edit"></i> Detail</a>
                                                                                                        <?php include "modal_legalisasi.php"; ?>
                                                </td>
                                            </tr>
                                            <?php
                                            endforeach;
?>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    <?php
include "../template/footer.php" ;
include "../template/t_bawah.php" ;
?>

        </body>

</html>