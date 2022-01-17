<!-- ##################################### MODAL DETAIL ################################################ -->
<div class="modal fade" id="modaldetail<?php echo $row['id_proses'];?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Legalisasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                    $pro = $row['id_proses'];
                    $alu = query("SELECT * FROM tb_upload
                    INNER JOIN  tb_alumni
                    ON tb_upload.nim = tb_alumni.nim
                    INNER JOIN tb_proses
                    ON tb_proses.id_upload = tb_upload.id_upload WHERE tb_proses.id_proses = '$pro'");
                    foreach ($alu as $cb) :
                    ?>
                    <div class="row container">
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="float-left">NIM</span><span class="float-right"><b><?= $cb["nim"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Nama</span><span class="float-right"><b><?= $cb["nama"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Jenis Kelamin</span><span class="float-right"><b><?= $cb["jk"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Prodi</span><span class="float-right"><b><?= $cb["prodi"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Tahun Lulus</span><span class="float-right"><b><?= $cb["thn_lulus"]; ?></b></span></li>
                            </ul>
                            <br>
                            <ul class="list-group">
                                <li class="list-group-item"><span class="float-left">Jenis Berkas</span><span class="float-right"><b><?= $cb["jenis_berkas"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Waktu Pengajuan</span><span class="float-right"><b><?= $cb["waktu_up"]; ?></b></span></li>
                            </ul>
                        </div>
                        <?php
                            $idpros=$row["id_proses"];
                        endforeach; ?>

<div class="col-6">
                            <?php
                                        $alus = query("SELECT * FROM
                                        tb_hproses
                                        WHERE tb_hproses.id_proses = '$idpros'
                                        ORDER BY tb_hproses.level_proses ASC;");
                                                foreach ($alus as $rows) :
                                                    
                                                    
                                                    if ($rows["level_proses"] == "1") {
                                                        $proses = "Upload Berkas";
                                                    } elseif ($rows["level_proses"] == "2") {
                                                        $proses = "Verifikasi BAAK";
                                                    } elseif ($rows["level_proses"] == "3") {
                                                        $proses = "Legalisasi Wakil Direktur 1";
                                                    } elseif ($rows["level_proses"] == "4") {
                                                        $proses = "Menunggu Diambil";
                                                    } elseif ($rows["level_proses"] == "5") {
                                                        $proses = "Sudah Diambil";
                                                    }

                                                    if ($rows["acc"] == "0") {
                                                        $icon = "far fa-clock";
                                                        $warna = "disabled";
                                                        $waktu = "Menunggu Konfirmasi";
                                                        $subjek = $rows["nip_npak"];
                                                    } elseif ($rows["acc"] == "1") {
                                                        if ($rows["level_proses"] == "1") {
                                                            $warna = "info";
                                                            $icon = "fas fa-cloud-upload-alt";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "2") {
                                                            $warna = "primary";
                                                            $icon = "fas fa-check";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "3") {
                                                            $warna = "success";
                                                            $icon = "fas fa-signature";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "4") {
                                                            $warna = "warning";
                                                            $icon = "fas fa-clipboard-check";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "5") {
                                                            $warna = "orange";
                                                            $icon = "fas fa-handshake";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        }
                                                    } elseif ($rows["acc"] == "2") {
                                                        $icon = "fas fa-times-circle";
                                                        $warna = "secondary";
                                                        $waktu = "Ditolak";
                                                        $subjek = $rows["nip_npak"];
                                                    }else {
                                                        $icon = "far fa-times-circle";
                                                        $proses = "Tidak $proses";
                                                        $warna = "secondary' disabled";
                                                        $waktu = "Telah Ditolak";
                                                        $subjek = $rows["nip_npak"];
                                                    }
                                                    

                                                    ?>

                                <div class="row">
                                    <div class="col">
                                        <div class='info-box bg-<?=$warna?>'>
                                            <span class="info-box-icon"><i class="<?= $icon?>"></i></span>

                                            <div class="info-box-content">
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="info-box-text"><?= $proses ?></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="info-box-number"><?= $subjek ?></span>
                                                    </div>
                                                </div>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 100%"></div>
                                                </div>
                                                <span class="progress-description"><?=$waktu?>
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <?php
                                endforeach;
                                ?>
                                </div>
                    </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- ##################################### MODAL DETAIL TOLAK ################################################ -->
<div class="modal fade" id="tolakdetail<?= $row['id_proses'];?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Legalisasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                    $pro = $row['id_proses'];
                    $alu = query("SELECT * FROM tb_upload
                    INNER JOIN  tb_alumni
                    ON tb_upload.nim = tb_alumni.nim
                    INNER JOIN tb_proses
                    ON tb_proses.id_upload = tb_upload.id_upload WHERE tb_proses.id_proses = '$pro'");
                    foreach ($alu as $cb) :
                    ?>
                    <div class="row container">
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="float-left">NIM</span><span class="float-right"><b><?= $cb["nim"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Nama</span><span class="float-right"><b><?= $cb["nama"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Jenis Kelamin</span><span class="float-right"><b><?= $cb["jk"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Prodi</span><span class="float-right"><b><?= $cb["prodi"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Tahun Lulus</span><span class="float-right"><b><?= $cb["thn_lulus"]; ?></b></span></li>
                            </ul>
                            <br>
                            <ul class="list-group">
                                <li class="list-group-item"><span class="float-left">Jenis Berkas</span><span class="float-right"><b><?= $cb["jenis_berkas"]; ?></b></span></li>
                                <li class="list-group-item"><span class="float-left">Waktu Pengajuan</span><span class="float-right"><b><?= $cb["waktu_up"]; ?></b></span></li>
                            </ul>
                            <br>
                            <div class="card bg-danger">
                                <h6 class="p-3 text-center">PENGAJUAN LEGALISASI DITOLAK</h6>
                                <?php
                        endforeach;
                        $result = mysqli_query($conn,"SELECT * FROM tb_hproses
                        WHERE id_proses='$pro' AND acc='2';");
                        $tc     = mysqli_fetch_array($result);

                        ?>
                        <div class="container">
                        <div class="card bg-light">
                        <ul class="list-group bg">
                            <li class="list-group-item"><span class="float-left">Alasan Ditolak</span><span class="float-right"><b><?= $tc["keterangan"]; ?></b></span></li>
                        </ul></div></div>
                    </div>
                    </div>

<div class="col-6">
                            <?php
                                        $alus = query("SELECT * FROM
                                        tb_hproses
                                        WHERE tb_hproses.id_proses = '$pro'
                                        ORDER BY tb_hproses.level_proses ASC;");
                                                foreach ($alus as $rows) :
                                                    
                                                    
                                                    if ($rows["level_proses"] == "1") {
                                                        $proses = "Upload Berkas";
                                                    } elseif ($rows["level_proses"] == "2") {
                                                        $proses = "Verifikasi BAAK";
                                                    } elseif ($rows["level_proses"] == "3") {
                                                        $proses = "Legalisasi Wakil Direktur 1";
                                                    } elseif ($rows["level_proses"] == "4") {
                                                        $proses = "Menunggu Diambil";
                                                    } elseif ($rows["level_proses"] == "5") {
                                                        $proses = "Sudah Diambil";
                                                    }

                                                    if ($rows["acc"] == "0") {
                                                        $icon = "far fa-clock";
                                                        $warna = "disabled";
                                                        $waktu = "Menunggu Konfirmasi";
                                                        $subjek = $rows["nip_npak"];
                                                    } elseif ($rows["acc"] == "1") {
                                                        if ($rows["level_proses"] == "1") {
                                                            $warna = "info";
                                                            $icon = "fas fa-cloud-upload-alt";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "2") {
                                                            $warna = "primary";
                                                            $icon = "fas fa-check";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "3") {
                                                            $warna = "success";
                                                            $icon = "fas fa-signature";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "4") {
                                                            $warna = "warning";
                                                            $icon = "fas fa-clipboard-check";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        } elseif ($rows["level_proses"] == "5") {
                                                            $warna = "orange";
                                                            $icon = "fas fa-handshake";
                                                            $subjek = $rows["nip_npak"];
                                                            $waktu = $rows["waktu_hproses"];
                                                        }
                                                    } elseif ($rows["acc"] == "2") {
                                                        $icon = "fas fa-times-circle";
                                                        $warna = "secondary";
                                                        $waktu = "Ditolak";
                                                        $subjek = $rows["nip_npak"];
                                                    }else {
                                                        $icon = "far fa-times-circle";
                                                        $proses = "Tidak $proses";
                                                        $warna = "secondary' disabled";
                                                        $waktu = "Telah Ditolak";
                                                        $subjek = $rows["nip_npak"];
                                                    }
                                                    

                                                    ?>

                                <div class="row">
                                    <div class="col">
                                        <div class='info-box bg-<?=$warna?>'>
                                            <span class="info-box-icon"><i class="<?= $icon?>"></i></span>

                                            <div class="info-box-content">
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="info-box-text"><?= $proses ?></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="info-box-number"><?= $subjek ?></span>
                                                    </div>
                                                </div>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 100%"></div>
                                                </div>
                                                <span class="progress-description"><?=$waktu?>
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <?php
                                endforeach;
                                ?>
                                </div>
                    </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
