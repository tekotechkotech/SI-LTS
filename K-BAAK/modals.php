<!-- ##################################### MODAL TAMBAH ################################################ -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="c_tambahpegawai.php" method="post">
                <div class="modal-body">

                    <!-- modal -->
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="jk">NIP/NPAK</label>
                            <input type="number" class="form-control" name="nip_npak" Required>
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
                        <div class="form-group col">
                            <label for="jk">Jabatan</label>
                            <select class="form-control select2" name="jabatan" Required>
                                    <option>Wakil Direktur 1</option>
                                    <option>Ketua BAAK</option>
                                    <option>Pegawai BAAK</option>
                                    </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="jk">Email</label>
                            <input type="text" class="form-control" name="email" Required="">
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
                    <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses">Tambah data</button>
            </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
                    $nip = $row ['nip_npak'];
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE nip_npak = '$nip'");
                    while ($cb = mysqli_fetch_array($data)) {
                    ?>
                    <div class="row text-center">
                        <div class="col-1"></div>
                        <div class="col-3 text-center">
                            <img src="../dist/img/avatar2.png" alt="Foto" width="200" class="rounded-circle">
                        </div>
                        <div class="col-3 text-left">
                            <ul>
                                <li class="p-2"><b>NIP/NPAK</b></li>
                                <li class="p-2"><b>Nama</b></li>
                                <li class="p-2"><b>Jenis Kelamin</b></li>
                                <li class="p-2"><b>Jabatan</b></li>
                                <li class="p-2"><b>Email</b></li>
                                <li class="p-2"><b>No HP</b></li>
                            </ul>
                        </div>
                        <div class="col text-left">
                            <ul>
                                <li class="p-2"><b><?= $cb["nip_npak"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["nama"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["jk"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["jabatan"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["email"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["no_hp"]; ?></b></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    };
                    ?>

            </div>
            <div class="modal-footer justify-content-between">
                <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                <button data-toggle="modal" data-target="#modaledit<?= $row['nip_npak']; ?>" class="btn btn-success">Edit Data</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- ##################################### MODAL edit ################################################ -->

<!-- tampilan modal jadi-->
<div class="modal fade" id="modaledit<?php echo $row['nip_npak']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                    $nip = $row ['nip_npak'];
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE nip_npak = '$nip'");
                    while ($cb = mysqli_fetch_array($data)) {
                    ?>

                    <div class="row text-center">
                        <div class="col-1"></div>
                        <div class="col-3 text-center">
                            <img src="img/wa.jpeg" alt="Foto" width="200" class="rounded-circle">
                        </div>
                        <div class="col-3 text-left">
                            <ul>
                                <li class="p-2"><b>NIP/NPAK</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>Nama</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>Password</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>Jenis Kelamin</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>Jabatan</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>Email</b></li>
                                <li class="pl-2 pt-3 pb-3"><b>No HP</b></li>
                            </ul>
                        </div>
                        <div class="col text-left">
                            <ul>
                                <form action="" method="POST">

                                    <div class="form-group">
                                        <!-- <label for="id_user">ID User</label> -->
                                        <input type="text" class="form-control" disabled id="nip_npak" name="id_user" value="<?= $cb[" nip_npak "]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="Password" name="password" value="<?= $cb[" password "]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $cb[" nama "]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="jk" name="jk" value="<?= $cb[" jk "]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $cb[" jabatan "]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $cb[" email "]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="email" name="email" value="<?= $cb[" no_hp "]; ?>" required>
                                    </div>
                            </ul>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

            </div>
            <div class="modal-footer justify-content-between">
                <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                <button type="edit" id="edit" name="edit" value="edit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- ##################################### MODAL HAPUS ################################################ -->
<!-- TODO: DIBENERIN -->
<div class="modal fade" id="modaldetail<?php echo $row[" nip_npak "]; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                    $nip = $row ['nip_npak'];
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE nip_npak = '$nip'");
                    while ($cb = mysqli_fetch_array($data)) {
                    ?>
                    <div class="row text-center">
                        <div class="col-1"></div>
                        <div class="col-3 text-center">
                            <img src="img/wa.jpeg" alt="Foto" width="200" class="rounded-circle">
                        </div>
                        <div class="col-3 text-left">
                            <ul>
                                <li class="p-2"><b>NIP/NPAK</b></li>
                                <li class="p-2"><b>Nama</b></li>
                                <li class="p-2"><b>Jenis Kelamin</b></li>
                                <li class="p-2"><b>Jabatan</b></li>
                                <li class="p-2"><b>Email</b></li>
                                <li class="p-2"><b>No HP</b></li>
                            </ul>
                        </div>
                        <div class="col text-left">
                            <ul>
                                <li class="p-2"><b><?= $cb["nip_npak"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["nama"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["jk"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["jabatan"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["email"]; ?></b></li>
                                <li class="p-2"><b><?= $cb["no_hp"]; ?></b></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    };
                    ?>

            </div>
            <div class="modal-footer justify-content-between">
                <a href="index.php" type="submit" class="btn btn-default" data-dismiss="modal">Tutup</a>
                <button type="edit" id="edit" name="edit" value="edit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
