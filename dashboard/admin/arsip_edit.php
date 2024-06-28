<?php
include 'includes/session.php';

if(isset($_POST['edit'])){
  $id = $_POST['id_arsip'];
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal_ditambahkan = $_POST['tanggal_ditambahkan'];
  $jenis_arsip = $_POST['jenis_arsip'];
  $gambar = $_FILES['gambar']['name'];
  $target = 'uploads/' . basename($gambar);

  if(!empty($gambar)){
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
    $sql = "UPDATE arsip SET nama = '$nama', deskripsi = '$deskripsi', tanggal_ditambahkan = '$tanggal_ditambahkan', jenis_arsip = '$jenis_arsip', gambar = '$gambar' WHERE id_arsip = '$id'";
  }
  else{
    $sql = "UPDATE arsip SET nama = '$nama', deskripsi = '$deskripsi', tanggal_ditambahkan = '$tanggal_ditambahkan', jenis_arsip = '$jenis_arsip' WHERE id_arsip = '$id'";
  }

  if($conn->query($sql)){
    $_SESSION['success'] = 'Arsip berhasil diperbarui';
  }
  else{
    $_SESSION['error'] = $conn->error;
  }
}
else{
  $_SESSION['error'] = 'Isi form terlebih dahulu';
}

header('location: arsip.php');
?>
