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
                            <h1 class="m-0"> Tracer Study <small><?=$bio["username"]?></small></h1>
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
                        
                        <?php
                        $result2 = mysqli_query($conn,"SELECT * FROM tb_tracers where nim='$nim';");
                        $bio2     = mysqli_fetch_array($result2);
                        ?>

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

<!-- SWEETALERT KONFIRMASI HAPUS -->
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.alert_notif').on('click', function() {
      var getLink = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Data Anda Tidak Dapat Dikembalikan ..",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Data ini!',
        cancelButtonText: 'Tidak..',
      }).then((result) => {
        if (result.isConfirmed) {

          window.location.href = getLink

        }
      })
      return false;
    });
  });
</script>

                            
                        <?php
          $result2 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_upload where nim='$nim') as nim;");
          $bio2     = mysqli_fetch_array($result2);
          ?>

                            <div class="col-lg-9">
                                <!-- small box -->
                                <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a type="button" class="btn btn-primary btn-sm" href="tracer_tambah.php" style="float: left; width: 180px;">
                                <i class="fas fa-file-medical"></i> Tambah Tracer Study</a>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>TAHUN MASUK</th>
                                            <th>NAMA PERUSAHAAN</th>
                                            <th>JABATAN</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $pegawai = query("SELECT * FROM tb_tracers where nim=$nim");
                                                foreach ($pegawai as $row) :
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $row["tahun_mulai_kerja"]; ?>
                                                </td>
                                                <td>
                                                    <?= $row["nama_perusahaan"]; ?>
                                                </td>
                                                <td>
                                                    <?= $row["bagian_unit"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <!-- tombol modal -->
                                                    <a class="btn btn-primary btn-sm" href="tracer_detail.php?id=<?= $row['id_tracer'];?>">
                                                    <i class="fas fa-file-invoice"></i>
                                                    </a>
                                                    <a class="btn btn-success btn-sm" href="tracer_edit.php?id=<?= $row['id_tracer'];?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="hapus.php?id=<?=$row['id_tracer'];?>&tb=tb_pegawai&pk=nip_npak&pg=pegawai" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                        endforeach;
                                        ?>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
include "../template/t_bawah.php" ;
?>

            </body>

    </html>