<?php
include 'includes/session.php';

if(isset($_POST['delete'])){
    $id = $_POST['id_fauna'];

    $sql = "DELETE FROM fauna WHERE id_fauna = '$id'";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Fauna berhasil dihapus';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Pilih fauna yang akan dihapus terlebih dahulu';
}

header('location: fauna.php');
?>