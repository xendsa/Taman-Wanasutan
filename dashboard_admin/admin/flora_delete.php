<?php
include 'includes/session.php';

if(isset($_POST['id_flora'])){
    $id_flora = $_POST['id_flora'];
    
    $sql = "DELETE FROM flora WHERE id_flora = '$id_flora'";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Flora deleted successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Select flora to delete first';
}

header('location: flora.php');
?>
