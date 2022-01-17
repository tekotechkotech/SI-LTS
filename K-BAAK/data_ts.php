<?php
$hal = "ts";
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
                        <h1>Tracer Study
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
                                            <th>Nama Mahasiswa</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Tahun Mulai Kerja</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $alumni = query("SELECT * FROM
                                        tb_alumni
                                        INNER JOIN
                                        tb_tracers ON tb_alumni.nim=tb_tracers.nim");
                                                foreach ($alumni as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $row["nim"]; ?></td>
                                                <td><?= $row["nama"]; ?></td>
                                                <td><?= $row["nama_perusahaan"]; ?></td>
                                                <td><?= $row["alamat_perusahaan"]; ?></td>
                                                <td><?= $row["tahun_mulai_kerja"]; ?></td>
                                                <td>
                                                    <!-- tombol modal -->
                                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tcdetail<?= $row['id_tracer']; ?>">
                                                        <i class="fa fa-edit"></i> Detail</a>
                                                    <a href="hapus.php?id=<?= $row['nim']; ?>&tb=tb_alumni&pk=nim&pg=alumni" onclick="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                                    </a>
                                                    <?php include "modal_ts.php"; ?>
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