<!-- Add New Fauna Modal -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Fauna</b></h4>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>