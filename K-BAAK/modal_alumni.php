<!-- ##################################### MODAL TAMBAH ################################################ -->
<?php
if( isset($_POST["submit"]) ){
    tambahalu($_POST);
};?>

    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Alumni</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <!-- modal -->
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="jk">NIM</label>
                                <input type="number" class="form-control" name="nim" Required>
                            </div>
                            <div class="form-group col-6">
                                <label for="jk">Upload Foto</label>
                                <input type="file" class="form-control" name="upload" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="jk">Password</label>
                                <input type="password" class="form-control" name="pass" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="jk">Nama</label>
                                <input type="text" class="form-control" name="nama" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control select2" name="jk" Required>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="jk">Prodi</label>
                                <select class="form-control select2" name="prodi" Required>
                                    <option>D3 Teknik Informatik</option>
                                    <option>D3 Teknik Mesin</option>
                                    <option>D3 Teknik Elektronika</option>
                                    <option>D3 Teknik Listrik</option>
                                    <option>D4 Teknik Pengendalian Pencemaran Lingkungan</option>
                                    <option>D4 Teknik Pengembangan Produk Argoindustri</option>
                                    </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="jk">Tahun Lulus</label>
                                <input type="text" class="form-control" name="thn_lulus" Required="">
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-6">
                                <label for="No">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="No">No HP Aktif</label>
                                <input type="number" name="no_hp" class="form-control">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class=" btn btn-primary" name="submit" value="submit">Tambah data</button>
                </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- ##################################### MODAL DETAIL ################################################ -->
    <div class="modal fade" id="modaldetail<?php echo $row['nim'];?>">
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
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="float-left">NIM</span><span class="float-right"><b><?= $cb["nim"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Nama</span><span class="float-right"><b><?= $cb["nama"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Jenis Kelamin</span><span class="float-right"><b><?= $cb["jk"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Prodi</span><span class="float-right"><b><?= $cb["prodi"]; ?></b></span></li>
                                    <li class="list-group-item"><span class="float-left">Tahun Lulus</span><span class="float-right"><b><?= $cb["thn_lulus"]; ?></b></span></li>
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
                    <button data-toggle="modal" data-target="#modaledit<?= $row['nim']; ?>" class="btn btn-success">Edit Data</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- ##################################### MODAL EDIT ################################################ -->
    <?php
if( isset($_POST["edit"]) ){
    editalu($_POST);
};?>
        <div class="modal fade" id="modaledit<?php echo $row['nim'];?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Biodata Alumni</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                    </div>

                    <div class="modal-body">
                        <?php
                    $nim = $row['nim'];
                    $alu = query("SELECT * FROM tb_alumni WHERE nim = '$nim'");
                    foreach ($alu as $cb) :
                        ?>
                        <form action="" method="post">
                                <div class="row container">
                                    <div class="col d-flex align-items-center">
                                        <img src="../dist/img/alumni/gdung.png" alt="Foto" width="250" class="rounded-circle">
                                    </div>
                                    <div class="col-7">
                                        <ul class="list-group">
                                            <li class="list-group-item"><span class="float-left">NIM</span><span class="float-right"><b><?= $cb["nim"]; ?></b></span></li>
                                                <input type="hidden" name="nim" value="<?= $cb["nim"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">Nama</span>
                                                <input class="form-control" type="text" name="nama" value="<?= $cb["nama"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">Jenis Kelamin</span>
                                                <input class="form-control" type="text" name="jk" value="<?= $cb["jk"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">Prodi</span>
                                                <input class="form-control" type="text" name="prodi" value="<?= $cb["prodi"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">Tahun Lulus</span>
                                                <input class="form-control" type="text" name="thn_lulus" value="<?= $cb["thn_lulus"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">Email</span>
                                                <input class="form-control" type="text" name="email" value="<?= $cb["email"]; ?>"></li>

                                            <li class="list-group-item"><span class="float-left">No HP</span>
                                                <input class="form-control" type="text" name="no_hp" value="<?= $cb["no_hp"]; ?>"></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                    endforeach;
                    ?>

                    </div>
                    <div class="modal-footer justify-content-between">
                        
                    <a href="index.php" class="btn btn-default" data-dismiss="modal">Tutup</a>
                                    <button type="submit" class=" btn btn-success" name="edit" value="edit">Simpan</button>
                                    </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->