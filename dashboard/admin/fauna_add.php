<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];
    $gambar = $_FILES['gambar']['name'];
    $target = 'uploads/' . basename($gambar);

    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $target)){
        $sql = "INSERT INTO fauna (nama, deskripsi, jumlah, habitat, status_konservasi, gambar) VALUES ('$nama', '$deskripsi', '$jumlah', '$habitat', '$status_konservasi', '$gambar')";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Fauna berhasil ditambahkan';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }
    else{
        $_SESSION['error'] = 'Gagal mengunggah gambar';
    }
}
else{
    $_SESSION['error'] = 'Isi form terlebih dahulu';
}

header('location: fauna.php');
?>