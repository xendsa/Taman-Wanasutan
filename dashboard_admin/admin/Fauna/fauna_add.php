<?php
include 'includes/session.php';

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $habitat = $_POST['habitat'];
    $status_konservasi = $_POST['status_konservasi'];
    $gambar = $_FILES['gambar']['name'];
    
    if(!empty($gambar)){
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/'.$gambar);
    }

    $stmt = $conn->prepare("INSERT INTO fauna (nama, deskripsi, jumlah, habitat, status_konservasi, gambar) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $nama, $deskripsi, $jumlah, $habitat, $status_konservasi, $gambar);
   if($stmt->execute()){
        $_SESSION['success'] = 'Fauna added successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: /fauna.php');
?>