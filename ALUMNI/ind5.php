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


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <?php 
//   include "../template/t_atas.php" ;

  include "../template/navbar.php" ;
  ?>
<!--  -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lengkapi data diri anda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--  -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Selamat Datang <small><?=$bio["username"]?></small></h1>
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
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="profil.php" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i> Detail
                                        </a>
                                        <button class="btn btn-primary btn-sm" data-toggle="dropdown"><i class="fas fa-cog"></i> Settings <i class="fas fa-caret-down"></i></button>
                                        <div class="dropdown-menu" role="settings">
                                            <a type="button" class="dropdown-item" data-toggle="modal" data-target="#ganti">Ganti Foto Profil</a>
                                            <a class="dropdown-item" href="#">Ganti Password</a>
                                            <a class="dropdown-item" href="#">Edit Profil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                            </div>
                        <!-- /.col-md-6 -->
                        <?php
                        $result2 = mysqli_query($conn,"SELECT * FROM tb_tracers where nim='$nim' AND id_tracer IN (SELECT MAX(id_TRACER) FROM `tb_tracers`);");
                        $bio2     = mysqli_fetch_array($result2);
                        ?>

                            <div class="col-lg-4">
                                <!-- small box -->
                                <div class="small-box bg-info grd">
                                    <div class="inner">
                                        <div class="container">
                                            <?php
                                            $result = mysqli_query($conn,"SELECT * FROM tb_tracers where nim=$nim");
                                            $cek = mysqli_num_rows($result);
                                            $pt=$bio2["nama_perusahaan"];
                                                if($cek > 0 ){?>
                                    <p class="text-right pt-2">Update<b> <?=$bio2["tgl_input"]?></b></p>
                                        
                                        <h1 class="text-bold">
                                        <?=$bio2["nama_perusahaan"]?> <br>
                                        </h1>
                                    
                                        <p>
                                            <?=$bio2["alamat_perusahaan"]?>
                                        </p>                                        
                                        <p class="text-right">
                                            <?=$bio2["tahun_mulai_kerja"]?> - Sekarang</p> <hr>
                                    <p class="text-center">
                                        <?=$bio2["bagian_unit"]?>
                                    </p>
                                                <?php   
                                                }else{
                                            ?>
                                            <h1 class="text-bold text-center">
                                                Tracer Study belum ditambahkan <br>
                                            </h1>
                                                    <?php
                                                }
                                                ?>
                                            
                                        </div>
                                    </div>
                                    <div class="icon">
                                    <i class="fas fa-building"></i>
                                    </div>
                                    <a href="tracer.php" class="small-box-footer ">Tracer Study <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                            
                            <?php
          $result2 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_proses INNER JOIN tb_upload
          ON tb_proses.id_upload = tb_upload.id_upload
          WHERE nim='$nim') as all_legal;");
          $all     = mysqli_fetch_array($result2);

          $result3 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_proses INNER JOIN tb_upload
          ON tb_proses.id_upload = tb_upload.id_upload
          WHERE nim='$nim' AND level_proses=6 ) as banned;");
          $ban     = mysqli_fetch_array($result3);

          $result4 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_proses INNER JOIN tb_upload
          ON tb_proses.id_upload = tb_upload.id_upload
          WHERE nim='$nim' AND level_proses=5 ) as success;");
          $check     = mysqli_fetch_array($result4);
          ?>

                            <div class="col-lg-4">
                                <!-- small box -->
                                <div class="small-box bg-success grds">
                                    <div class="inner">
                                        <div class="container">

                                            <h1>
                                                <?=$all["all_legal"]?>
                                        </h1><p>
                                            Pengajuan Legalisasi
                                        </p>
                                        <hr>
                                        <p class="text-center">
                                        <?=$ban["banned"]?> Ditolak | <?=$check["success"]?> Diterima
                                        </p>
                                    </div>
                                    </div>
                                    <div class="icon">
                                    <i class="fas fa-file-signature"></i>
                                    </div>
                                    <a href="legal.php" class="small-box-footer">Legalisasi Online <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                            

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
// include "../template/t_bawah.php" ;
?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
<script>
    $('#myModal').modal('show');
</script>

    <script>
        $('#exampleModal').modal('show')
    </script>
  </body>
</html>