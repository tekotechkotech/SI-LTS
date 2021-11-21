<!-- ##################################### MODAL DETAIL ################################################ -->
<div class="modal fade" id="modaldetail<?php echo $row['nip_npak'];?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Biodata Pegawai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <div class="modal-body">
                    <?php
                    $nip_npak = $row['nip_npak'];
                    $alu = query("SELECT * FROM tb_pegawai WHERE nip_npak = '$nip_npak'");
                    foreach ($alu as $cb) :
                    ?>
                        <div class="row container">
                            <div class="col d-flex align-items-center">
                                <img src="../dist/img/alumni/gdung.png" alt="Foto" width="250" class="rounded-circle">
                            </div>
                            <div class="col-7">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="float-left">NIM</span><span class="float-right"><b><?= $cb["nip_npak"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Nama</span><span class="float-right"><b><?= $cb["nama"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Jenis Kelamin</span><span class="float-right"><b><?= $cb["jk"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Jabatan</span><span class="float-right"><b><?= $cb["jabatan"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Email</span><span class="float-right"><b><?= $cb["email"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">No HP</span><span class="float-right"><b><?= $cb["no_hp"]; ?></b></span></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>

                </div>
                <div class="modal-footer justify-content-between">
                    <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    <button data-toggle="modal" data-target="#modaledit<?= $row['nip_npak']; ?>" class="btn btn-success">Edit Data</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
