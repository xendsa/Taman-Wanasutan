<?php
include 'includes/session.php';

if(isset($_POST['edit'])){
    $id = $_POST['id_fauna'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];
    $gambar = $_FILES['gambar']['name'];
    $target = 'uploads/' . basename($gambar);

    if(!empty($gambar)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
        $sql = "UPDATE fauna SET nama = '$nama', deskripsi = '$deskripsi', jumlah = '$jumlah', habitat = '$habitat', status_konservasi = '$status_konservasi', gambar = '$gambar' WHERE id_fauna = '$id'";
    }
    else{
        $sql = "UPDATE fauna SET nama = '$nama', deskripsi = '$deskripsi', jumlah = '$jumlah', habitat = '$habitat', status_konservasi = '$status_konservasi' WHERE id_fauna = '$id'";
    }

    if($conn->query($sql)){
        $_SESSION['success'] = 'Fauna berhasil diperbarui';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Isi form terlebih dahulu';
}

header('location: fauna.php');
?>