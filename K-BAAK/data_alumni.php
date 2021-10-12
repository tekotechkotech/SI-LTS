
<?php
include "../build/functions.php" ;
include "../build/config/config.php" ;
include "../template/t_atas.php" ;
include "../template/header.php" ;

include "sidebar.php" ;
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
                        <h1>Data Alumni
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-user-plus"></i> 
                Tambah Data
                </a>
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
                                            <th>NIP/NPAK</th>
                                            <th>NAMA</th>
                                            <th>TAHUN LULUS</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $alumni = query("SELECT * FROM tb_alumni");
                                                foreach ($alumni as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $row["nim"]; ?></td>
                                                <td><?= $row["nama"]; ?></td>
                                                <td><?= $row["thn_lulus"]; ?></td>
                                                <td>
                                                    <!-- tombol modal -->
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                        <i class="fa fa-edit"></i> Detail</a>
                                                    <a href="hapus.php?id=<?= $row['nim']; ?>&tb=tb_alumni&pk=nim&pg=alumni" onclick="" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                    </a>
                                                    <?php include "modal_alumni.php"; ?>
                                                </td>
                                            </tr>
                                            <?php
                                            endforeach;
?>
                                            <tfoot>
                                                <tr>
                                                    <th width="150">NIP/NPAK</th>
                                                    <th width="300">NAMA</th>
                                                    <th width="200">TAHUN LULUS</th>
                                                    <th width="150"></th>
                                                </tr>
                                            </tfoot>
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