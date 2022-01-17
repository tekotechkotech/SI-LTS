<?php
include "../template/alumni.php" ;


if( isset($_POST["submit"]) ){
    ajulegal($_POST);}
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
                            <h1 class="m-0"> Tambah Legalisasi, <small><?=$bio['username']?></small></h1>
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

                                <div class="card-header">
                                    <h6 class="text-bold text-center">
                                        Form Legalisasi
                                    </h6>
                                </div>
                                <div class="card-body box-profile">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="nim" value="<?=$bio['nim'];?>">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <label>Jenis Berkas</label>
                                            <select name="jenis" class="form-control">
                                                <option selected>Pilih Jenis Berkas</option>
                                                <option value="Ijazah">Ijazah</option>
                                                <option value="Transkip Nilai">Transkip Nilai</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col">
                                            <label>Upload Berkas</label><div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="upload">
                                            <label class="custom-file-label" for="customFile">Pilih Berkas</label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col"> <label>Keterangan</label>
                                            <textarea type="text" name="keterangan" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="modal-footer bg-gray-light">
                                    <button type="submit" class="btn btn-success" name="submit" value="submit">
                                        <i class="fas fa-save"></i> Ajukan Legalisasi
                                    </button>
                                </div>
                                </form>
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