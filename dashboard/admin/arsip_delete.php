<?php
include 'includes/session.php';

if(isset($_POST['delete'])){
  $id = $_POST['id_arsip'];

  $sql = "DELETE FROM arsip WHERE id_arsip = '$id'";
  if($conn->query($sql)){
    $_SESSION['success'] = 'Arsip berhasil dihapus';
  }
  else{
    $_SESSION['error'] = $conn->error;
  }
}
else{
  $_SESSION['error'] = 'Pilih arsip yang akan dihapus terlebih dahulu';
}

header('location: arsip.php');
?>
