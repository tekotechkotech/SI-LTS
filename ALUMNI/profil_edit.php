<?php
include "../template/alumni.php" ;


if( isset($_POST["submit"]) ){
    editprofilalu($_POST);
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
                            <h1 class="m-0"> Edit Profile, <small><?=$bio['username']?></small></h1>
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
                        <div class="col-lg-4">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                            <form action="" method="post">
                                <div class="card-header">
                                    <h6 class="text-bold text-center">
                                        Data Diri Alumni
                                    </h6>
                                </div>
                                <div class="card-body box-profile">
                                        <input type="hidden" name="nim" value="<?=$nim?>">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control " value="<?=$bio['username']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control " value="<?=$bio['nama'];?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control select2" name="jk">
                                            <option selected="selected" value="<?=$bio['jk']?>">Terpilih >> <?=$bio['jk']?></option>
                                            <option value="Laki - laki">Laki - laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status">
                                            <option selected="selected" value="<?=$bio['status']?>">Terpilih >> <?=$bio['status']?></option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->


                            <!-- Profile Image -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">

                                <div class="card-header">
                                    <h6 class="text-bold text-center">
                                        Info Alumni
                                    </h6>
                                </div>
                                <div class="card-body box-profile">

                                    <div class="mb-3">
                                        <label>Tahun Lulus</label>
                                        <input type="text" name="thn_lulus" class="form-control " value="<?=$bio['thn_lulus']?>">

                                    </div>
                                    <div class="mb-3">
                                        <label>Prodi</label>
                                        <input type="text" name="prodi" class="form-control " value="<?=$bio['prodi']?>">

                                    </div>
                                    <div class="mb-3">
                                        <label>IPK</label>
                                        <input type="text" name="ipk" class="form-control " value="<?=$bio['ipk']?>">

                                    </div>
                                    <div class="mb-3">
                                        <label>Judul TA</label>
                                        <input type="text" name="judul_ta" class="form-control " value="<?=$bio['judul_ta']?>">
                                    </div>


                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-4">

                            <!-- Profile Image -->


                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">

                                <div class="card-header">
                                    <h6 class="text-bold text-center">
                                        Kontak Alumni
                                    </h6>
                                </div>
                                <div class="card-body box-profile">
                                    <div class="mb-3"> <label>Alamat</label>
                                        <textarea type="text" name="alamat" class="form-control " ><?=$bio['alamat']?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>No HP</label>
                                        <input type="text" name="no_hp" class="form-control " value="<?=$bio['no_hp']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control " value="<?=$bio['email']?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <button class="btn btn-block bg-success" type="submit" name="submit" value="submit">
                                <i class="fas fa-save"></i> Simpan Data
                            </button>
                        </div>
                        <!-- /.col-md-6 -->
                        </form>
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