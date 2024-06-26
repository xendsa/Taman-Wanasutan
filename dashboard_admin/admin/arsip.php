<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Daftar Arsip</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Arsip</li>
                    <li class="active">Daftar Arsip</li>
                </ol>
            </section>
            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                <div class="row">
                    <div class="col-xs-12
         <div class=" box">
                        <div class="box-header with-border">
                            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                    class="fa fa-plus"></i> Tambah Arsip</a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th>Jenis Arsip</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                    $sql = "SELECT * FROM arsip";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                    <tr>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['deskripsi']; ?></td>
                                        <td><?php echo $row['tanggal_ditambahkan']; ?></td>
                                        <td><?php echo $row['jenis_arsip']; ?></td>
                                        <td><img src="uploads/<?php echo $row['gambar']; ?>" width="50"></td>
                                        <td>
                                            <button class="btn btn-success btn-sm edit btn-flat"
                                                data-id="<?php echo $row['id_arsip']; ?>"><i class="fa fa-edit"></i>
                                                Edit</button>
                                            <button class="btn btn-danger btn-sm delete btn-flat"
                                                data-id="<?php echo $row['id_arsip']; ?>"><i class="fa fa-trash"></i>
                                                Hapus</button>
                                        </td>
                                    </tr>
                                    <?php
                    }
                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'arsip_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
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
    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'arsip_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.arsipid').val(response.id_arsip);
                $('#edit_nama').val(response.nama);
                $('#edit_deskripsi').val(response.deskripsi);
                $('#edit_tanggal_ditambahkan').val(response.tanggal_ditambahkan);
                $('#edit_jenis_arsip').val(response.jenis_arsip);
                $('.nama').html(response.nama);
            }
        });
    }
    </script>
</body>

</html>