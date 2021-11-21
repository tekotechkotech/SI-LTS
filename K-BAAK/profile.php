
<div class="modal fade" id="ganti">
    <div class="modal-dialog modal-s">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ganti Foto Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
            </div>
            <div class="row">
                    <div class="container text-center p-5">
                        <img class="profile-user-img img-circle" src="../dist/img/user4-128x128.jpg">
                    
                </div>
            </div>
            <div class="row">
                <div class="container text-center p-5">
                    <form method="post">
                        <input type="file" name="crop_image" class="crop_image" id="upload_image" />
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    </div>

    <?php
$hal = "prof";
include "../template/sidebar.php" ;
include "../template/cropper.php" ;

?>

        <head>
            <title>Profile</title>
        </head>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <img src="../dist/img/bg.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-md-2 d-flex">
                                    <img data-toggle="modal" data-target="#modal-tambah" class="profile-user-img img-fluid img-circle profile d-flex align-items-center" href="/SI-LTS/P-BAAK/index.php" style="width: 100px;" src="../dist/img/user4-128x128.jpg">
                                </div>
                                <div>
                                    <h2 class="pt-3"><b>Nina Mcintire</b></h2>
                                    <h5 class="card-title badge badge-success">Wakil Direktur 1</h5>
                                </div>
                                <div class="col ml-auto d-flex align-items-center">
                                    <div class="btn-group ml-auto">
                                        <button class="btn btn-secondary ml-auto" data-toggle="dropdown"><i class="fas fa-cog"></i> Settings <i class="fas fa-caret-down"></i></button>

                                        </button>
                                        <div class="dropdown-menu" role="settings">

                                            <a type="button" class="dropdown-item" data-toggle="modal" data-target="#ganti">Ganti Foto Profil</a>


                                            <!-- ALMOST EASY -->


                                            <!-- /.modal -->

                                            <!-- ALMOST EASY -->

                                            <a class="dropdown-item" href="#">Ganti Password</a>
                                            <a class="dropdown-item" href="#">Edit Profil</a>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-success"><i class="fas fa-user-edit"></i> Edit Profile</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">

                                    <p class="text-muted text-center"><b>Biodata</b></p>
                                    <ul class="list-group list-group-unbordered mb-3">

                                        <li class="list-group-item">
                                            <b>NIP/NPAK</b> <a class="float-right">190102024</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jenis Kelamin</b> <a class="float-right">Laki-laki</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">faizzz571@gmail.com</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>No. HP</b> <a class="float-right">0851-5501-8828</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->


                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <?php
include "../template/footer.php" ;
include "../template/t_bawah.php" ;
?>

            </body>

            </html>