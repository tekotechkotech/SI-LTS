<?php
include "../template/alumni.php" ;

if( isset($_POST["submit"]) ){
    tambahts($_POST);
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
                            <h1 class="m-0"> Tambah Tracer Study, <small><?=$bio['username']?></small></h1>
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
                            <form action="" method="post">
                                <div class="card-header">
                                    <h6 class="text-bold text-center">
                                        Form Tracer Study
                                    </h6>
                                </div>
                                <div class="card-body box-profile">
                                    <input type="hidden" name="nim" value="<?=$bio['nim'];?>">
                                    <div class="row pb-2">
                                        <div class="col-4">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" name="nama_perusahaan" class="form-control ">
                                        </div>
                                        <div class="col">
                                            <label>Alamat Perusahaan</label>
                                            <textarea type="text" name="alamat_perusahaan" class="form-control" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-3">
                                            <label>Bagian Unit</label>
                                            <input type="text" name="unit" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label>Tahun Awal Kerja</label>
                                            <input type="text" name="tahun_mulai" class="form-control ">
                                        </div>
                                        <div class="col-3">
                                            <label>Gaji Awal</label>
                                            <select class="form-control select2" name="gaji_awal">
                                                <option selected="selected">Pilih Gaji Awal</option>
                                                <option value="1">Dibawah Rp. 1.500.000</option>
                                                <option value="2">Rp. 1.500.000 - Rp. 3.500.000</option>
                                                <option value="3">Rp. 3.500.000 - Rp. 5.500.000</option>
                                                <option value="4">Rp. 5.500.000 - Rp. 7.500.000</option>
                                                <option value="5">Diatas Rp. 7.500.000</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>Gaji Sekarang</label>
                                            <select class="form-control select2" name="gaji_sekarang">
                                                <option selected="selected">Pilih Gaji Sekarang</option>
                                                <option value="1">Dibawah Rp. 1.500.000</option>
                                                <option value="2">Rp. 1.500.000 - Rp. 3.500.000</option>
                                                <option value="3">Rp. 3.500.000 - Rp. 5.500.000</option>
                                                <option value="4">Rp. 5.500.000 - Rp. 7.500.000</option>
                                                <option value="5">Diatas Rp. 7.500.000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-6"> <label>Relevansi dengan Kurikulum Kampus</label>
                                            <textarea type="text" name="relevansi" class="form-control" rows="1"></textarea>
                                        </div>
                                        <div class="col-6">
                                            <label>Kursus Setelah Lulus</label>
                                            <textarea type="text" name="kursus" class="form-control " rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>Saran / Usulan Untuk Kampus</label>
                                            <textarea type="text" name="saran" class="form-control " rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="modal-footer bg-gray-light">
                                    <button type="submit" class=" btn btn-primary" name="submit" value="submit"><i class="fas fa-save"></i> Tambah data</button>
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