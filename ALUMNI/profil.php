<?php
include "../template/alumni.php" ;
?>
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
                            <h1 class="m-0"> Detail Profil, <small><?=$bio["username"]?></small></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                <li class="breadcrumb-item active">Top Navigation</li>
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
                        <div class="col-lg-4">


                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <p class="text-bold text-center">
                                        Profil Akun
                                    </p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>NIM</b>
                                            <a class="float-right">
                                                <?=$bio["nim"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Username</b>
                                            <a class="float-right">
                                                <?=$bio["username"]?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-primary">
                                            <i class="fas fa-user-edit"></i> Ubah Foto
                                        </a>
                                        <a href="profil_editpass.php" class="btn btn-sm bg-teal">
                                            <i class="fas fa-key"></i> Ubah Password
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-4">


                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">

                                    <p class="text-bold text-center">
                                        Data Diri Alumni
                                    </p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Nama</b>
                                            <a class="float-right">
                                                <?=$bio["nama"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jenis Kelamin</b>
                                            <a class="float-right">
                                                <?=$bio["jk"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Status</b>
                                            <a class="float-right">
                                                <?=$bio["status"]?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->


                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">

                                    <p class="text-bold text-center">
                                        Kontak Alumni
                                    </p>


                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Alamat</b>
                                            <a class="float-right">
                                                <?=$bio["alamat"]?>
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
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-4">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">

                                    <p class="text-bold text-center">
                                        Info Alumni
                                    </p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Tahun Lulus</b>
                                            <a class="float-right">
                                                <?=$bio["thn_lulus"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Prodi</b>
                                            <a class="float-right">
                                                <?=$bio["prodi"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>IPK</b>
                                            <a class="float-right">
                                                <?=$bio["ipk"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Judul TA</b>
                                            <a class="float-right">
                                                <?=$bio["judul_ta"]?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->

                            <a href="profil_edit.php" class="btn btn-block bg-success">
                                <i class="fas fa-edit"></i> Edit Profil
                            </a>

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