<?php
include "../template/sidebar.php" ;
?>

    <head>
        <title>BAAK | Ijazah</title>
    </head>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Berkas Legalisasi

                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Pegawai</li>
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
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h5>
                                    <i class="fas fa-exclamation-triangle"></i> Ijazah
                                </h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <?php
                                        $ijazah = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        WHERE level_proses='3' AND jenis_berkas = 'Ijazah';");
                                                foreach ($ijazah as $row) :
                                                ?>
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success "><i class="far fa-flag"></i></span>
                                        <div class="info-box-content">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="info-box-text"><?= $row["nama"]; ?></span>
                                                    <span class="info-box-number"><?= $row["nim"]; ?></span>
                                                </div>
                                                <div class="col">
                                                    <span class="info-box-text text-right"><?= $row["waktu_up"]; ?></span>
                                                    <a class="info-box-text btn btn-success text-right" data-toggle="modal" data-target="#modaldetailberkas<?= $row['id_upload']; ?>">
                                                        <center>LIHAT DETAIL</center>
                                                    </a>
                                                    <?php include "modal.php" ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    endforeach;
                                    ?>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h5>
                                    <i class="fas fa-bullhorn"></i> Transkip Nilai
                                </h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <?php
                                        $transkip = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        WHERE level_proses='3' AND jenis_berkas = 'Transkip Nilai';");
                                                foreach ($transkip as $row) :
                                                ?>
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success "><i class="far fa-flag"></i></span>
                                        <div class="info-box-content">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="info-box-text"><?= $row["nama"]; ?></span>
                                                    <span class="info-box-number"><?= $row["nim"]; ?></span>
                                                </div>
                                                <div class="col">
                                                    <span class="info-box-text text-right"><?= $row["waktu_up"]; ?></span>
                                                    <a class="info-box-text btn btn-success text-right" data-toggle="modal" data-target="#modaldetailberkas<?= $row['id_upload']; ?>">
                                                        <center>LIHAT DETAIL</center>
                                                    </a>
                                                    <?php include "modal.php" ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    endforeach;
                                    ?>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- END ALERTS AND CALLOUTS -->

                
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