<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Tambah Fauna</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="fauna_add.php" enctype="multipart/form-data">
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
                        <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="habitat" class="col-sm-3 control-label">Habitat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="habitat" name="habitat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_konservasi" class="col-sm-3 control-label">Status Konservasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status_konservasi" name="status_konservasi">
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
                <h4 class="modal-title"><b>Edit Fauna</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="fauna_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="faunaid" name="id_fauna">
                    <div class="form-group">
                        <label for="edit_nama" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_jumlah" class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_habitat" class="col-sm-3 control-label">Habitat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_habitat" name="habitat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_status_konservasi" class="col-sm-3 control-label">Status Konservasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_status_konservasi"
                                name="status_konservasi">
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
                        <button type="submit" class="btn btn-success" name="edit">Update</button>
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
                <form class="form-horizontal" method="POST" action="fauna_delete.php">
                    <input type="hidden" class="faunaid" name="id_fauna">
                    <div class="text-center">
                        <p>DELETE FAUNA</p>
                        <h2 class="bold nama"></h2>
                    </div>
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