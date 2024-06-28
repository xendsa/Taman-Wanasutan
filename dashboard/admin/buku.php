<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Daftar Buku</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Buku</li>
                    <li class="active">Daftar Buku</li>
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
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Tambah Buku</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Genre</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM buku";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['judul']; ?></td>
                                                <td><?php echo $row['penulis']; ?></td>
                                                <td><?php echo $row['penerbit']; ?></td>
                                                <td><?php echo $row['tahun_terbit']; ?></td>
                                                <td><?php echo $row['genre']; ?></td>
                                                <td><?php echo $row['deskripsi']; ?></td>
                                                <td><img src="uploads/<?php echo $row['gambar']; ?>" width="50"></td>
                                                <td>
                                                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['id_buku']; ?>"><i class="fa fa-edit"></i> Edit</button>
                                                    <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id_buku']; ?>"><i class="fa fa-trash"></i> Hapus</button>
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
        <?php include 'buku_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function(){
            $('.edit').click(function(e){
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('.delete').click(function(e){
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id){
            $.ajax({
                type: 'POST',
                url: 'buku_row.php',
                data: {id:id},
                dataType: 'json',
                success: function(response){
                    $('.bukuid').val(response.id_buku);
                    $('#edit_judul').val(response.judul);
                    $('#edit_penulis').val(response.penulis);
                    $('#edit_penerbit').val(response.penerbit);
                    $('#edit_tahun_terbit').val(response.tahun_terbit);
                    $('#edit_genre').val(response.genre);
                    $('#edit_deskripsi').val(response.deskripsi);
                    $('.nama').html(response.judul);
                }
            });
        }
    </script>
</body>

</html>
