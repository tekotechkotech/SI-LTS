<!-- ##################################### MODAL TAMBAH ################################################ -->

<div class="modal fade" id="ee">
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
