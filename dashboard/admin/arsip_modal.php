<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Tambah Arsip</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="arsip_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_ditambahkan" class="col-sm-3 control-label">Tanggal Ditambahkan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal_ditambahkan" name="tanggal_ditambahkan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_arsip" class="col-sm-3 control-label">Jenis Arsip</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jenis_arsip" name="jenis_arsip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-sm-3 control-label">Gambar</label>
                        <div class="col-sm-9">
                            <input type="file" id="gambar" name="gambar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Edit Arsip</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="arsip_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="arsipid" name="id_arsip">
                    <div class="form-group">
                        <label for="edit_nama" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_tanggal_ditambahkan" class="col-sm-3 control-label">Tanggal Ditambahkan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="edit_tanggal_ditambahkan" name="tanggal_ditambahkan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_jenis_arsip" class="col-sm-3 control-label">Jenis Arsip</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_jenis_arsip" name="jenis_arsip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar" class="col-sm-3 control-label">Gambar</label>
                        <div class="col-sm-9">
                            <input type="file" id="edit_gambar" name="gambar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="edit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="arsip_delete.php">
                    <input type="hidden" class="arsipid" name="id_arsip">
                    <div class="text-center">
                        <p>DELETE ARCHIVE</p>
                        <h2 class="bold nama"></h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
