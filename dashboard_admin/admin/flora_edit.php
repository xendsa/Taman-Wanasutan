<?php
include 'includes/session.php';

if(isset($_POST['id_flora'])){
    $id_flora = $_POST['id_flora'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];

    $sql = "UPDATE flora SET nama = '$nama', deskripsi = '$deskripsi', jumlah = '$jumlah', habitat = '$habitat', status_konservasi = '$status_konservasi' WHERE id_flora = '$id_flora'";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Flora updated successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Select flora to edit first';
}

header('location: flora.php');
?>
