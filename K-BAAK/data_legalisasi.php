<?php
$hal = "legal";
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
                        <h1>Data Legalisasi
                            
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
                                            <th>NAMA</th>
                                            <th>JENIS BERKAS</th>
                                            <th>TGL PENGAJUAN</th>
                                            <th>UPLOAD</th>
                                            <th>VERIFIKASI BAAK</th>
                                            <th>LEGALISASI WD 1</th>
                                            <th>PRINT OLEH BAAK</th>
                                            <th>AMBIL</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $alumni = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload;");
                                                foreach ($alumni as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $row["nama"]; ?></td>
                                                <td><?= $row["jenis_berkas"]; ?></td>
                                                <td><?= $row["waktu_up"]; ?></td>
                                                <?php
                                                $idpros=$row["id_proses"];
                                        $alu = query("SELECT * FROM tb_hproses
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_proses = tb_hproses.id_proses
                                        WHERE tb_hproses.id_proses = '$idpros'
                                        ORDER BY tb_hproses.level_proses ASC;");
                                                foreach ($alu as $rows) :
                                        ?>
                                        <td>
                                            <?= $rows["acc"]; ?>
                                        </td>
                                        
                                        
                                                <?php
                                            endforeach;
                                        ?>
                                                <td>
                                                    <!-- tombol modal -->
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                        <i class="fa fa-edit"></i> Detail</a>
                                                    </a>
                                                    <?php include "modal_alumni.php"; ?>
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