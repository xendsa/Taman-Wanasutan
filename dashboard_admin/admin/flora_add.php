<?php
include 'includes/session.php';

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];

    $stmt = $conn->prepare("INSERT INTO flora (nama, deskripsi, jumlah, habitat, status_konservasi) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $nama, $deskripsi, $jumlah, $habitat, $status_konservasi);
   if($stmt->execute()){
        $_SESSION['success'] = 'Flora added successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: flora.php');
?>
