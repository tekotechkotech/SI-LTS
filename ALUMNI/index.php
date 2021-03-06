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


        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
        <?php 
  include "../template/t_atas.php" ;

  include "../template/navbar.php" ;
  
  $a=$bio["no_hp"];
  $b=$bio["email"];
  $c=$bio["alamat"];

  $result = mysqli_query($conn,"SELECT * FROM tb_tracers where nim='$nim'");
  $cek_trace = mysqli_num_rows($result);

    if($cek_trace < 1 ){
        if($a=="" && $b=="" && $c=="" )  {
            $data="Silahkan Lengkapi data diri anda terlebih dahulu";
            $iss="a";
        }else {
            $data = "Silahkan Tambahkan Tracer Study anda terlebih dahulu";
            $tc="a";
        }
    }

    
  ?>
<!--  -->


<!-- Modal -->
<div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
      </div>
      <div class="modal-body text-center">
        <?=$data?>
      </div>
      <div class="modal-footer text-center">
          
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      <?php
      
    if (isset($iss)) {?>
        <button type="button" class="btn btn-success btn-sm">Lengkapi Data Diri</button>
        <?php
    } else {
        ?>
        <button type="button" class="btn btn-primary btn-sm">Tambahkan Tracer Study</button>
        <?php
    }
        

        ?>
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
                                            <a class="dropdown-item" href="profil_editpass.php">Ganti Password</a>
                                            <a class="dropdown-item" href="profil_edit.php">Edit Profil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col-md-6 -->
                        <?php
                        $result2 = mysqli_query($conn,"SELECT * FROM tb_tracers where nim='$nim' AND id_tracer IN (SELECT MAX(id_TRACER) FROM `tb_tracers`);");
                        $bio2    = mysqli_fetch_array($result2);
                        ?>

                            <div class="col-lg-4">
                                <!-- small box -->
                                <div class="small-box bg-info grd">
                                    <div class="inner">
                                        <div class="container">
                                            <?php
                                            $result = mysqli_query($conn,"SELECT * FROM tb_tracers where nim=$nim");
                                            $cek = mysqli_num_rows($result);
                                            
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
                                    <?php
                                    if (isset($iss)) {
                                        $to="index.php";
                                    } else {
                                        $to="tracer.php";
                                    }
                                    ?>
                                    <a href="<?=$to?>" class="small-box-footer ">Tracer Study <i class="fas fa-arrow-circle-right"></i></a>
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

          $result5 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_proses INNER JOIN tb_upload
          ON tb_proses.id_upload = tb_upload.id_upload
          WHERE nim='$nim' AND level_proses!=5 AND level_proses!=6 ) as proccess;");
          $pro     = mysqli_fetch_array($result5);
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
                                         <?=$ban["banned"]?> Ditolak - <?=$pro["proccess"]?> Diproses - <?=$check["success"]?> Diterima 
                                        </p>
                                    </div>
                                    </div>
                                    <div class="icon">
                                    <i class="fas fa-file-signature"></i>
                                    </div>
                                    
                                    <?php
                                    if (isset($iss)) {
                                        $too="index.php";
                                    } elseif (isset($tc)) {
                                        $too="index.php";
                                    }else {
                                        $too="legal.php";
                                    }
                                    ?>

                                    <a href="<?=$too?>" class="small-box-footer">Legalisasi Online <i class="fas fa-arrow-circle-right"></i></a>
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

<!-- SWEETALERT NOTIFIKASI -->

 

        <?php
include "../template/footer.php" ;
// include "../template/t_bawah.php" ;
?>


<script src="../dist/js/jquery.slim.min.js"></script>
    <script src="../dist/js/bootstrap.bundle.min.js"></script>

<?php
    if (isset($data)){?>
<script>
    $('#MyModal').modal('show');
</script>
<?php
}?>

            </body>
    </html>