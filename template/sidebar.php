<?php

include '../build/functions.php';
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="login"){
//melakukan pengalihan
header("location:index.php");
}

$username   = $_SESSION['username'];
$password    = $_SESSION['password'];
$nip_npak    = $_SESSION['nip_npak'];

$result = mysqli_query($conn,"SELECT * FROM tb_pegawai where nip_npak='$nip_npak'");
$bio= mysqli_fetch_array($result);

$nip_npak=$bio["nip_npak"];
$nip_npak=$bio["nip_npak"];



include "../template/t_atas.php" ;
include "../template/header.php" ;

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../dist/logopnc.png" alt="Logo PNC" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SI-LTS PNC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $bio["username"];?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if ($hal=="dash") echo "active";?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link <?php if ($hal=="prof") echo "active";?>">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php if ($hal=="alu" || $hal=="pega") echo"menu-open";?>">
                    <a href="#" class="nav-link <?php if ($hal=="alu" || $hal=="pega") echo "active";?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="data_alumni.php" class="nav-link <?php if ($hal=="alu") echo "active";?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_pegawai.php" class="nav-link <?php if ($hal=="pega") echo "active";?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item <?php if ($hal=="blm" || $hal=="sdh" || $hal=="tlk") echo"menu-open";?>">
                        <a href="#" class="nav-link <?php if ($hal=="blm" || $hal=="sdh" || $hal=="tlk") echo "active";?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Data Berkas Legalisasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="data_belum_legal.php" class="nav-link <?php if ($hal=="blm") echo "active";?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Belum Diverifikasi</p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="data_sudah_legal.php" class="nav-link <?php if ($hal=="sdh") echo "active";?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Diverifikasi</p>
                            </a>
                            </li><li class="nav-item">
                            <a href="data_ditolak_legal.php" class="nav-link <?php if ($hal=="tlk") echo "active";?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ditolak</p>
                            </a>
                            </li>
                        </ul>
                </li>   
                <li class="nav-item">
                    <a href="data_ts.php" class="nav-link <?php if ($hal=="ts") echo "active";?>">
                        <i class="nav-icon fa fa-graduation-cap"></i>
                        <p>
                            Data Tracer Study
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>