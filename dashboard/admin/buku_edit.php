<?php
include 'includes/session.php';

if(isset($_POST['edit'])){
    $id = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $target = 'uploads/' . basename($gambar);

    if(!empty($gambar)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
        $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', genre = '$genre', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id_buku = '$id'";
    }
    else{
        $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', genre = '$genre', deskripsi = '$deskripsi' WHERE id_buku = '$id'";
    }

    if($conn->query($sql)){
        $_SESSION['success'] = 'Buku berhasil diperbarui';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Isi form terlebih dahulu';
}

header('location: buku.php');
?>
