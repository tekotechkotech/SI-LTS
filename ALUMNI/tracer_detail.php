<?php
include "../template/alumni.php" ;

$id=$_GET['id'];
$result2 = mysqli_query($conn,"SELECT * FROM tb_tracers
WHERE id_tracer='$id'");
$tc     = mysqli_fetch_array($result2);

if( isset($_POST["submit"]) ){
    editts($_POST);
};?>
    <!DOCTYPE html>
    <!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SI-LTS | Alumni</title>


        <?php 
  include "../template/t_atas.php" ;
  include "../template/navbar.php" ;
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Edit Tracer Study, <small><?=$bio['username']?></small></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                    <li class="breadcrumb-item"><a href="#">Layout</a>
                                        <li class="breadcrumb-item active">Top Navigation
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">
                                        <?=$bio["nama"]?>
                                    </h3>

                                    <p class="text-muted text-center">
                                        <?=$bio["nim"]?>
                                    </p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Jenis Kelamin</b>
                                            <a class="float-right">
                                                <?=$bio["jk"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>No HP</b>
                                            <a class="float-right">
                                                <?=$bio["no_hp"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b>
                                            <a class="float-right">
                                                <?=$bio["email"]?>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="text-bold text-center">
                                        <?=$bio["thn_lulus"]?>
                                    </div>
                                </div>
                                <!-- /.card-body -->


                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-lg-9">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <!-- <form action="" method="post"> -->
                                    <div class="card-header">
                                        <h6 class="text-bold text-center">
                                            Detail Tracer Study
                                        </h6>
                                    </div>
                                    <span class="text-center pt-3"> Diinput pada tanggal <?= $tc['tgl_input'];?> </span>
                                    <hr>
                                    <div class="card-body box-profile">
                                        <div class="row pb-2">
                                            <div class="col-4">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Nama Perusahaan</span>
                                                        <span class="info-box-number"><?=$tc['nama_perusahaan'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Alamat Perusahaan</span>
                                                        <span class="info-box-number"><?=$tc['alamat_perusahaan'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-8">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Bagian Unit</span>
                                                        <span class="info-box-number"><?=$tc['bagian_unit'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Tahun Awal Kerja</span>
                                                        <span class="info-box-number"><?=$tc['tahun_mulai_kerja'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php
                                        if ($tc['gaji_awal']==1) {
                                            $gaji_awal = "Dibawah Rp. 1.500.000";
                                        }elseif ($tc['gaji_awal']==2) {
                                            $gaji_awal = "Rp. 1.500.000 - Rp. 3.500.000";
                                        }elseif ($tc['gaji_awal']==3) {
                                            $gaji_awal = "Rp. 3.500.000 - Rp. 5.500.000";
                                        }elseif ($tc['gaji_awal']==4) {
                                            $gaji_awal = "Rp. 5.500.000 - Rp. 7.500.000";
                                        }elseif ($tc['gaji_awal']==5) {
                                            $gaji_awal = "Diatas Rp. 7.500.000";
                                        }

                                        if ($tc['gaji_sekarang']==1) {
                                            $gaji_now = "Dibawah Rp. 1.500.000";
                                        }elseif ($tc['gaji_sekarang']==2) {
                                            $gaji_now = "Rp. 1.500.000 - Rp. 3.500.000";
                                        }elseif ($tc['gaji_sekarang']==3) {
                                            $gaji_now = "Rp. 3.500.000 - Rp. 5.500.000";
                                        }elseif ($tc['gaji_sekarang']==4) {
                                            $gaji_now = "Rp. 5.500.000 - Rp. 7.500.000";
                                        }elseif ($tc['gaji_sekarang']==5) {
                                            $gaji_now = "Diatas Rp. 7.500.000";
                                        }
                                        ?>

                                        <div class="row pb-2">
                                            <div class="col">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Gaji Awal</span>
                                                        <span class="info-box-number"><?=$gaji_awal?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Gaji Sekarang</span>
                                                        <span class="info-box-number"><?=$gaji_now;?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row pb-2">
                                            <div class="col">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-number">Relevansi dengan Kurikulum Kampus</span>
                                                        <span class="info-box-text">
                                                    <?=$tc['relevansi'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-number">Kursus Setelah Lulus</span>
                                                        <span class="info-box-text"><?=$tc['kursus'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-2">
                                            <div class="col">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span class="info-box-number">Saran / Usulan Untuk Kampus</span>
                                                        <span class="info-box-text"><?=$tc['saran_usulan'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="modal-footer bg-gray-light">
                                        <a class="btn bg-success" href="tracer_edit.php?id=<?= $tc['id_tracer'];?>"><i class="fas fa-save"></i> Edit data</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
include "../template/footer.php" ;
include "../template/t_bawah.php" ;
?>

            </body>

    </html>