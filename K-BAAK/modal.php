
<!-- ##################################### MODAL DETAIL BERKAS ################################################ -->
<div class="modal fade" id="modaldetailberkas<?php echo $row['id_upload'];?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Legalisasi <?php echo $row['jenis_berkas'];?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <?php
                    $id = $row['id_upload'];
                    $pgw = query("SELECT * FROM tb_upload INNER JOIN tb_alumni ON tb_upload.nim = tb_alumni.nim WHERE id_upload = '$id'");
                    foreach ($pgw as $cb) :
                    ?>
                    <div class="row text-center">
                        <div class="card">
                        <img src="../file/ijazah/ijazah.jpeg" class="card-img-top" >
                        </div>
                        <div class="col-2 text-left">
                            <ul>
                                <li class=""><b>NIM</b></li>
                                <li class=""><b>Nama</b></li>
                            </ul>
                        </div>
                        <div class="col text-left">
                            <ul>
                                <li class=" text-success"><b><?= $cb["nim"]; ?></b></li>
                                <li class=" text-success"><b><?= $cb["nama"]; ?></b></li>
                            </ul>
                        </div>
                        <div class="col-3 text-left">
                            <ul>
                                <li class=""><b>Jurusan/Prodi</b></li>
                                <li class=""><b>Tahun Kelulusan</b></li>
                            </ul>
                        </div>
                        <div class="col-2 text-left">
                            <ul>
                                <li class="pr-4  text-success text-right"><b><?= $cb["prodi"]; ?></b></li>
                                <li class="pr-4  text-success text-right"><b><?= $cb["thn_lulus"]; ?></b></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    <div class="col text-right">
                        <a href="c_tolak.php" class="btn btn-warning">Tolak</a>
                        <a href="c_verifikasi.php" class="btn btn-success">Verifikasi <?= $row['jenis_berkas'];?></a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->