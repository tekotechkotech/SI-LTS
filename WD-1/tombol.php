
    <!-- ##################################### MODAL EDIT ################################################ -->
    <?php
if( isset($_POST["tolak"]) ){
    verifikasi($_POST);
};
if( isset($_POST["terima"]) ){
    verifikasi($_POST);
};?>
        <div class="modal fade" id="modaltolak<?php echo $row['id_upload'];?>">
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tolak Legalisasi Alumni</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                    </div>

                    <div class="modal-body">


                    <form action="" method="post">
                      <input type="hidden" name="id_proses" value="<?= $row['id_proses']; ?>">
                      <input type="hidden" name="nip_npak" value="<?= $nip_npak; ?>">
                      <input type="hidden" name="status_verifikasi" value="2">
                      <input type="hidden" name="level_proses" value="2">
                      <label for="">Alasan menolak</label> 
                      <input type="text" name="keterangan" class="form-control" required>
                    </div>
                    <div class="modal-footer justify-content-between">
                      
                    <a href="index.php" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</a>
                    <button type="submit" class="btn btn-outline-danger btn-sm" name="tolak" onclick="return confirm('Anda yakin menolak pengajuan ini?')">
                          <i class = "fas fa-times-circle"></i> Tolak</button>
                      </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->