<?php
include 'includes/session.php';

if(isset($_POST['edit'])){
    $id_flora = $_POST['id_flora'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];

    // Upload gambar
    if ($_FILES['gambar']['size'] > 0) {
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

        // Validasi jenis file gambar
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");

        if(in_array($imageFileType,$extensions_arr) ){
            move_uploaded_file($_FILES['gambar']['tmp_name'],$target_dir.$gambar);
        }

        $sql = "UPDATE flora SET nama='$nama', deskripsi='$deskripsi', jumlah='$jumlah', habitat='$habitat', status_konservasi='$status_konservasi', gambar='$gambar' WHERE id_flora='$id_flora'";
    } else {
        $sql = "UPDATE flora SET nama='$nama', deskripsi='$deskripsi', jumlah='$jumlah', habitat='$habitat', status_konservasi='$status_konservasi' WHERE id_flora='$id_flora'";
    }

    if($conn->query($sql)){
        $_SESSION['success'] = 'Data flora berhasil diupdate';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
header('location: flora.php');
?>
