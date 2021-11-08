
<?php
include "../template/sidebar.php" ;
include "modal_pegawai.php" ;
?>

<head>
    <title>Admin | Data Pegawai</title>
</head>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pegawai
                        
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
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NIP/NPAK</th>
                                            <th>NAMA</th>
                                            <th>JABATAN</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $pegawai = query("SELECT * FROM tb_pegawai");
                                                foreach ($pegawai as $row) :
                    ?>
                    <tr>
                        <td><?= $row["nip_npak"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jabatan"]; ?></td>
                        <td>
                        <!-- tombol modal -->
                    <a class="btn btn-primary" data-toggle="modal" data-target="#modaldetail<?= $row['nip_npak']; ?>">
                            <i class="fa fa-edit"></i> Detail</a>
                    
                    <?php include "modal_pegawai.php"; ?>
                    </td>
                    </tr><?php
                            endforeach;
                ?>
                                            <tfoot>
                                                <tr>
                                                    <th width="200">NIP/NPAK</th>
                                                    <th width="300">NAMA</th>
                                                    <th width="200">JABATAN</th>
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
