<?php
include 'includes/session.php';

if(isset($_POST['id_fauna'])){
    $id_fauna = $_POST['id_fauna'];
    
    $stmt = $conn->prepare("DELETE FROM fauna WHERE id_fauna = ?");
    $stmt->bind_param("i", $id_fauna);
    if($stmt->execute()){
        $_SESSION['success'] = 'Fauna deleted successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Select fauna to delete first';
}

header('location: fauna.php');
?>