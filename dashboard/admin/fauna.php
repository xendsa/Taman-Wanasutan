<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Fauna
                </h1>
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Habitat</th>
                                        <th>Status Konservasi</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * FROM fauna";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['id_fauna']."</td>
                          <td>".$row['nama']."</td>
                          <td>".$row['deskripsi']."</td>
                          <td>".$row['jumlah']."</td>
                          <td>".$row['habitat']."</td>
                          <td>".$row['status_konservasi']."</td>
                          <td>
                            <img src='uploads/".$row['gambar']."' height='30px' width='30px'>
                          </td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id_fauna']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id_fauna']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
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
        <?php include 'fauna_modal.php'; ?>
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
            url: 'fauna_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.faunaid').val(response.id_fauna);
                $('#edit_nama').val(response.nama);
                $('#edit_deskripsi').val(response.deskripsi);
                $('#edit_jumlah').val(response.jumlah);
                $('#edit_habitat').val(response.habitat);
                $('#edit_status_konservasi').val(response.status_konservasi);
                $('.nama').html(response.nama);
            }
        });
    }
    </script>
</body>

</html>