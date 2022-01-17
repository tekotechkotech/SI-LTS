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
                            <h1 class="m-0"> Legalisasi Online <small><?=$bio["username"]?></small></h1>
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

                            
                        <?php
          $result2 = mysqli_query($conn,"SELECT(SELECT COUNT(nim) FROM tb_upload where nim='$nim') as nim;");
          $bio2     = mysqli_fetch_array($result2);
          ?>

                            <div class="col-lg-9">
                                <!-- small box -->
                                <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="legal_tambah.php" type="button" class="btn btn-primary btn-sm"  style="float: left; width: 180px;">
                                <i class="fas fa-file-medical"></i> Ajukan Legalisasi</a>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Jeni Berkas</th>
                                            <th rowspan="2">Waktu Pengajuan</th>
                                            <th colspan="5">PROSES</th>
                                            
                                            </tr><tr>
                                            <th>Pengajuan</th>
                                            <th>Verifikasi</th>
                                            <th>Legalisasi</th>
                                            <th>Print</th>
                                            <th>Ambil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $alumni = query("SELECT * FROM tb_upload
                                        INNER JOIN  tb_alumni
                                        ON tb_upload.nim = tb_alumni.nim
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_upload = tb_upload.id_upload
                                        WHERE tb_alumni.nim = $nim
                                        ");
                                                foreach ($alumni as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $row["jenis_berkas"]; ?></td>
                                                <td><?= $row["waktu_up"]; ?></td>
                                                <?php
                                                $idpros=$row["id_proses"];
                                        $alu = query("SELECT * FROM tb_hproses
                                        INNER JOIN tb_proses
                                        ON tb_proses.id_proses = tb_hproses.id_proses
                                        WHERE tb_hproses.id_proses = '$idpros'
                                        ORDER BY tb_hproses.level_proses ASC;");
                                                foreach ($alu as $rows) :
                                                    
                                                    if ($rows["acc"] == "0") {
                                                        $icon = "fas fa-tasks";
                                                        $acc = " Belum";
                                                        $warna = "warning";
                                                    } elseif ($rows["acc"] == "1") {
                                                        $icon = "fas fa-check";
                                                        $acc = " Sudah";
                                                        $warna = "success";
                                                    } elseif ($rows["acc"] == "2") {
                                                        $icon = "fas fa-times";
                                                        $acc = " Ditolak";
                                                        $warna = "dark";
                                                    } else {
                                                        $icon = " ";
                                                        $acc = " ";
                                                        $warna = "";
                                                    }
                                        ?>
                                        <td>
                                        <h6><span class="badge badge-<?=$warna?>"><i class="<?=$icon?>"></i> <?=$acc?></span></h6>
                                        </td>
                                        
                                        
                                                <?php
                                            endforeach;
                                        ?>
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