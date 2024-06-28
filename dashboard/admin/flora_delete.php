<?php
include 'includes/session.php';

if(isset($_POST['id_flora'])){
    $id_flora = $_POST['id_flora'];

    $sql = "DELETE FROM flora WHERE id_flora='$id_flora'";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Data flora berhasil dihapus';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
header('location: flora.php');
?>