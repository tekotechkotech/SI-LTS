<?php
$hal = "dash";
include "../template/alumni.php" ;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Dashboard <small>Alumni</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Top Navigation</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
                <img class="profile-user-img img-fluid img-circle"
                     src="../dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Riqqotul Khoiriyah</h3>

              <p class="text-muted text-center">190102022</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="float-right">Perempuan</a>
                </li>
                <li class="list-group-item">
                  <b>No HP</b> <a class="float-right">+62 876-9876-0987</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">Riqqotul@gmail.com</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
            
            <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i> Detail
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Edit
                  </a>
                </div>
              </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-md-6 -->

        

        
        <div class="col-lg-4">
                          <!-- small box -->
                          <div class="small-box bg-info grd" >
                              <div class="inner">
                                          <div class="col">
                                          <p class="text-right pt-2">Update<b> <?= date("Y-m-d"); ?></b></p>
                                      </div>
                                  
                                      <div class="col i-wrp"> PT. PERTAMINA JAYA MANDIRI</div>
                                  <br>
                                  <div class="col">
                                  <p>Jl. Mandiri No. 30, Widarapayung Wetan, Binangun, Cilacap</p>
                                  </div>
                                  <div class="col">
                                      <p class="text-right">2021 - Sekarang</p>
                                  </div>
                                  
                                      <hr>
                                      <p class="text-center">Divisi Teknologi</p>
                                  
                              </div>
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                              </div>
                              <a href="#" class="small-box-footer">Tracer Study <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->

        <div class="col-lg-4">
          <div class="card card-primary shadow">
            <div class="card-header">
              <div class="row">
                <div class="col">
                <h5 class="card-title">Legalisasi Ijazah</h5>
                </div>
                <div class="col">
                  <p class="card-text text-right"><?= date("Y-m-d"); ?></p>
                </div>
              </div>
            </div>
            <div class="card-body position-relative">
              <div class="row">
                <div class="col">
                  <h6 class="card-title text-bold">Menunggu Legalisasi</h6>
                </div>
                <div class="col text-right col-4">
                  <a href="#" class="btn btn-primary float-end">Detail</a>
                </div>
              </div>
            </div>
          </div class="row p-5">
          <a href="#" class="btn btn-primary btn-block">Ajukan Legalisasi</a>
        </div>
        <!-- /.col-md-6 -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

                <?php
include "../template/footer.php" ;
include "../template/t_bawah.php" ;
?>