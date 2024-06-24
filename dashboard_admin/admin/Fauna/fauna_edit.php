<?php
include 'includes/session.php';

if(isset($_POST['id_fauna'])){
    $id_fauna = $_POST['id_fauna'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];
    $gambar = $_FILES['gambar']['name'];

    if(!empty($gambar)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/'.$gambar);
        $sql = "UPDATE fauna SET nama = '$nama', deskripsi = '$deskripsi', jumlah = '$jumlah', habitat = '$habitat', status_konservasi = '$status_konservasi', gambar = '$gambar' WHERE id_fauna = '$id_fauna'";
    }
    else{
        $sql = "UPDATE fauna SET nama = '$nama', deskripsi = '$deskripsi', jumlah = '$jumlah', habitat = '$habitat', status_konservasi = '$status_konservasi' WHERE id_fauna = '$id_fauna'";
    }

    if($conn->query($sql)){
        $_SESSION['success'] = 'Fauna updated successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Select fauna to edit first';
}

header('location: fauna.php');
?>
