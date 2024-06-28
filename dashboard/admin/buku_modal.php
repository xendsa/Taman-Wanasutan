<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Tambah Buku</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="buku_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul" class="col-sm-3 control-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penulis" class="col-sm-3 control-label">Penulis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penulis" name="penulis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penerbit" name="penerbit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="genre" class="col-sm-3 control-label">Genre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="genre" name="genre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
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
                <h4 class="modal-title"><b>Edit Buku</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="buku_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="bukuid" name="id_buku">
                    <div class="form-group">
                        <label for="edit_judul" class="col-sm-3 control-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_judul" name="judul" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_penulis" class="col-sm-3 control-label">Penulis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_penulis" name="penulis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_penerbit" class="col-sm-3 control-label">Penerbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_penerbit" name="penerbit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_tahun_terbit" name="tahun_terbit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_genre" class="col-sm-3 control-label">Genre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_genre" name="genre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi"></textarea>
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
                <form class="form-horizontal" method="POST" action="buku_delete.php">
                    <input type="hidden" class="bukuid" name="id_buku">
                    <div class="text-center">
                        <p>DELETE BOOK</p>
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
