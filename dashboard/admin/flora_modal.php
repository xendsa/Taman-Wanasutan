<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Tambah Flora</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="flora_add.php" enctype="multipart/form-data">
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
                <h4 class="modal-title"><b>Edit Flora</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="flora_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="floraid" name="id_flora">
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
                            <input type="text" class="form-control" id="edit_status_konservasi" name="status_konservasi">
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
                        <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
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
                <h4 class="modal-title"><b>Hapus Flora</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="flora_delete.php">
                    <input type="hidden" class="floraid" name="id_flora">
                    <div class="text-center">
                        <p>Anda yakin ingin menghapus flora <span class="nama"></span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $('.edit').click(function(e) {
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

    $('.delete').click(function(e) {
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'flora_row.php',
            data: { id: id },
            dataType: 'json',
            success: function(response) {
                $('.floraid').val(response.id_flora);
                $('#edit_nama').val(response.nama);
                $('#edit_deskripsi').val(response.deskripsi);
                $('#edit_jumlah').val(response.jumlah);
                $('#edit_habitat').val(response.habitat);
                $('#edit_status_konservasi').val(response.status_konservasi);
                $('.nama').html(response.nama);
            }
        });
    }
});
</script>
