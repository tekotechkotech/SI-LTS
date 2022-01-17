<?php
$hal = "tg";
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

        <section class="content">
            <div class="container-fluid">

                <div class="col-12 col-sm">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="pt-2 px-3">
                                    <h3 class="card-title">Jenis Berkas Legalisasi</h3>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Ijazah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Transkip Nilai</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">

                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="250">NAMA</th>
                                                <th>NIP/NPAK</th>
                                                <th>WAKTU PENGAJUAN</th>
                                                <th width="250"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $ijazah = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        WHERE level_proses='2' AND jenis_berkas = 'Ijazah';");
                                                foreach ($ijazah as $row) :
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $row["nama"]; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["nim"]; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["waktu_up"]; ?>
                                                    </td>
                                                    <td>
                                                        <!-- tombol modal -->
                                                        <div class="row">
                                                            <div class="col p-1 pl-3">
                                                                <button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                            <i class="fa fa-edit"></i> Detail</button></div>
                                                            <!-- <div class="row text-center d-flex justify-content-center"> -->
                                                            <div class="col p-1">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="id_proses" value="<?= $row['id_proses']; ?>">
                                                                    <input type="hidden" name="nip_npak" value="<?= $nip_npak; ?>">
                                                                    <input type="hidden" name="status_verifikasi" value="1">
                                                                    <input type="hidden" name="level_proses" value="3">
                                                                    <input type="hidden" name="keterangan" value=" ">
                                                                    <button type="submit" class="btn btn-outline-success btn-sm btn-block" name="terima" onclick="return confirm('Anda yakin menerima pengajuan ini?')">
                                                                    <i class = "fa fa-check-circle"></i> Terima</button>
                                                                </form>
                                                            </div>
                                                            <div class="col p-1 pr-3">
                                                                <button type="submit" class="btn btn-outline-danger btn-sm btn-block" name="verifikasi" value="verifikasi" data-toggle="modal" data-target="#modaltolak<?php echo $row['id_upload'];?>">
                                                                    <i class = "fas fa-times-circle"></i> Tolak</button>
                                                            </div>
                                                            <!-- </div> -->
                                                            <!-- </div> -->
                                                            <?php
                                                        include "tombol.php";
                                                        include "modal_alumni.php"; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php   endforeach;   ?>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">

                                    <table id="examplee" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NAMA</th>
                                                <th>NIP/NPAK</th>
                                                <th>WAKTU PENGAJUAN</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $ijazah = query("SELECT * FROM tb_alumni
                                        INNER JOIN tb_upload
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        WHERE level_proses='1' AND jenis_berkas = 'Transkip Nilai';");
                                                foreach ($ijazah as $row) :
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $row["nama"]; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["nim"]; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["waktu_up"]; ?>
                                                    </td>
                                                    <td>
                                                        <!-- tombol modal -->
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                            <i class="fa fa-edit"></i> Detail</a>
                                                        <a class="btn btn-success" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                            <i class="fa fa-edit"></i> Terima</a>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#modaldetail<?= $row['nim']; ?>">
                                                            <i class="fa fa-edit"></i> Tolak</a>
                                                        <?php
                                                        include "tombol.php";
                                                        include "modal_alumni.php";
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php   endforeach;   ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

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