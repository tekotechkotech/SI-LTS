
    <!-- ##################################### MODAL DETAIL ################################################ -->
    <div class="modal fade" id="modaldetailberkas<?php echo $row['id_upload'];?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Biodata Alumni</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <div class="modal-body">
                    <?php
                    $nim = $row['nim'];
                    $alu = query("SELECT * FROM tb_alumni WHERE nim = '$nim'");
                    foreach ($alu as $cb) :
                    ?>
                        <div class="row container">
                            <div class="col d-flex align-items-center">
                                <img src="../dist/img/alumni/<?= $cb["foto"]; ?>" alt="Foto" width="250" class="rounded-circle">
                            </div>
                            <div class="col-7">
                                
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>

                </div>
                <div class="modal-footer justify-content-between">
                    <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    <button data-toggle="modal" data-target="#modaledit<?= $row['nim']; ?>" class="btn btn-success">Edit Data</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
