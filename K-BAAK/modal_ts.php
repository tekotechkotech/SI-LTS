<!-- ##################################### MODAL DETAIL ################################################ -->
<div class="modal fade" id="tcdetail<?= $row['id_tracer'];?>">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Tracer Study</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
                    $id=$row['id_tracer'];
$result = mysqli_query($conn,"SELECT * FROM tb_tracers INNER JOIN tb_alumni ON tb_tracers.nim=tb_alumni.nim
WHERE tb_tracers.id_tracer='$id'");
$tc     = mysqli_fetch_array($result);


                        
                    ?>

                <div class="modal-body">
                    <div class="row container">
                        <div class="col-3">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <p class="text-bold text-center">
                                        Profil Akun
                                    </p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                            <b>NIM</b>
                                            <a class="float-right">
                                                <?=$tc["nim"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Nama</b>
                                            <a class="float-right">
                                                <?=$tc["nama"]?>
                                            </a>
                                        </li><li class="list-group-item">
                                            <b>Jenis Kelamin</b>
                                            <a class="float-right">
                                                <?=$tc["jk"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Status</b>
                                            <a class="float-right">
                                                <?=$tc["status"]?>
                                            </a>
                                        </li><li class="list-group-item">
                                            <b>alamat</b>
                                            <a class="float-right">
                                                <?=$tc["alamat"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>No HP</b>
                                            <a class="float-right">
                                                <?=$tc["no_hp"]?>
                                            </a>
                                        </li><li class="list-group-item">
                                            <b>email</b>
                                            <a class="float-right">
                                                <?=$tc["email"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Tahun Lulus</b>
                                            <a class="float-right">
                                                <?=$tc["thn_lulus"]?>
                                            </a>
                                        </li><li class="list-group-item">
                                            <b>Program Studi</b>
                                            <a class="float-right">
                                                <?=$tc["prodi"]?>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>IPK</b>
                                            <a class="float-right">
                                                <?=$tc["ipk"]?>
                                            </a>
                                        </li><li class="list-group-item">
                                            <b>Judul TA</b>
                                            <a class="float-right">
                                                <?=$tc["judul_ta"]?>
                                            </a>
                                        </li>
                                    </ul>
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
                Detail Tracer Study
            </h6>
        </div>
        <span class="text-center pt-3"> Diinput pada tanggal <?= $tc['tgl_input'];?> </span>
        <hr>
        <div class="card-body box-profile">
            <div class="row pb-2">
                <div class="col-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Nama Perusahaan</span>
                            <span class="info-box-number"><?=$tc['nama_perusahaan'];?></span>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Alamat Perusahaan</span>
                            <span class="info-box-number"><?=$tc['alamat_perusahaan'];?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-8">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Bagian Unit</span>
                            <span class="info-box-number"><?=$tc['bagian_unit'];?></span>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Tahun Awal Kerja</span>
                            <span class="info-box-number"><?=$tc['tahun_mulai_kerja'];?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            if ($tc['gaji_awal']==1) {
                $gaji_awal = "Dibawah Rp. 1.500.000";
            }elseif ($tc['gaji_awal']==2) {
                $gaji_awal = "Rp. 1.500.000 - Rp. 3.500.000";
            }elseif ($tc['gaji_awal']==3) {
                $gaji_awal = "Rp. 3.500.000 - Rp. 5.500.000";
            }elseif ($tc['gaji_awal']==4) {
                $gaji_awal = "Rp. 5.500.000 - Rp. 7.500.000";
            }elseif ($tc['gaji_awal']==5) {
                $gaji_awal = "Diatas Rp. 7.500.000";
            }

            if ($tc['gaji_sekarang']==1) {
                $gaji_now = "Dibawah Rp. 1.500.000";
            }elseif ($tc['gaji_sekarang']==2) {
                $gaji_now = "Rp. 1.500.000 - Rp. 3.500.000";
            }elseif ($tc['gaji_sekarang']==3) {
                $gaji_now = "Rp. 3.500.000 - Rp. 5.500.000";
            }elseif ($tc['gaji_sekarang']==4) {
                $gaji_now = "Rp. 5.500.000 - Rp. 7.500.000";
            }elseif ($tc['gaji_sekarang']==5) {
                $gaji_now = "Diatas Rp. 7.500.000";
            }
            ?>

            <div class="row pb-2">
                <div class="col">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Gaji Awal</span>
                            <span class="info-box-number"><?=$gaji_awal?></span>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text">Gaji Sekarang</span>
                            <span class="info-box-number"><?=$gaji_now;?></span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pb-2">
                <div class="col">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-number">Relevansi dengan Kurikulum Kampus</span>
                            <span class="info-box-text">
                        <?=$tc['relevansi'];?></span>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-number">Kursus Setelah Lulus</span>
                            <span class="info-box-text"><?=$tc['kursus'];?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-number">Saran / Usulan Untuk Kampus</span>
                            <span class="info-box-text"><?=$tc['saran_usulan'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

</div>
<!-- /.card -->
</div>
<!-- /.col-md-6 -->
                    </div>



                </div>
                <div class="modal-footer justify-content-between">
                    <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    <!-- <button data-toggle="modal" data-target="#modaledit<?= $row['nim']; ?>" class="btn btn-success">Edit Data</button> -->
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->