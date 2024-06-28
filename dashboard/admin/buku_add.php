<?php
include 'includes/session.php';

if(isset($_POST['add'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $target = 'uploads/' . basename($gambar);

    $sql = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, genre, deskripsi, gambar) 
            VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$genre', '$deskripsi', '$gambar')";
    if($conn->query($sql)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
        $_SESSION['success'] = 'Buku berhasil ditambahkan';
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
