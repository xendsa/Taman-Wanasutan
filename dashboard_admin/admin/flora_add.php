<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

    // Validasi jenis file gambar
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr) ){
        move_uploaded_file($_FILES['gambar']['tmp_name'],$target_dir.$gambar);
    }

    $sql = "INSERT INTO flora (nama, deskripsi, jumlah, habitat, status_konservasi, gambar) VALUES ('$nama', '$deskripsi', '$jumlah', '$habitat', '$status_konservasi', '$gambar')";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Flora berhasil ditambahkan';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
header('location: flora.php');
?>
