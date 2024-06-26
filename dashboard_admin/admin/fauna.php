<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Fauna List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Fauna</li>
                    <li class="active">Fauna List</li>
                </ol>
            </section>
            <!-- Main content -->
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>ID Fauna</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Habitat</th>
                                        <th>Status Konservasi</th>
                                        <th>Gambar</th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM fauna";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            ?>
                                        <tr>
                                            <td><?php echo $row['id_fauna']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['deskripsi']; ?></td>
                                            <td><?php echo $row['jumlah']; ?></td>
                                            <td><?php echo $row['habitat']; ?></td>
                                            <td><?php echo $row['status_konservasi']; ?></td>
                                            <td>
                                                <?php
                                                    if(!empty($row['gambar'])){
                                                        echo "<img src='images/".$row['gambar']."' width='50px' height='50px'>";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm edit btn-flat"
                                                    data-id="<?php echo $row['id_fauna']; ?>"><i class="fa fa-edit"></i>
                                                    Edit</button>
                                                <button class="btn btn-danger btn-sm delete btn-flat"
                                                    data-id="<?php echo $row['id_fauna']; ?>"><i
                                                        class="fa fa-trash"></i> Delete</button>
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
        <?php include 'Fauna/fauna_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(document).ready(function() {
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
            url: 'Fauna/fauna_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.empid').val(response.id_fauna);
                $('.reference_number').html(response.id_fauna);
                $('.del_fauna_name').html(response.nama);
                $('#fauna_name').html(response.nama);
                $('#edit_nama').val(response.nama);
                $('#edit_deskripsi').val(response.deskripsi);
                $('#edit_jumlah').val(response.jumlah);
                $('#edit_habitat').val(response.habitat);
                $('#edit_status_konservasi').val(response.status_konservasi);
                $('#current_gambar').attr('src', 'images/' + response.gambar);
            }
        });
    }
    </script>
</body>

</html>