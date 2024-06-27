<?php
include 'includes/session.php';

if(isset($_POST['delete'])){
    $id = $_POST['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku = '$id'";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Buku berhasil dihapus';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Pilih buku yang akan dihapus terlebih dahulu';
}

header('location: buku.php');
?>
