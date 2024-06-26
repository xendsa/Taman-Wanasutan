<?php
include 'includes/session.php';

if(isset($_POST['add'])){
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal_ditambahkan = $_POST['tanggal_ditambahkan'];
  $jenis_arsip = $_POST['jenis_arsip'];
  $gambar = $_FILES['gambar']['name'];
  $target = 'uploads/' . basename($gambar);

  $sql = "INSERT INTO arsip (nama, deskripsi, tanggal_ditambahkan, jenis_arsip, gambar) VALUES ('$nama', '$deskripsi', '$tanggal_ditambahkan', '$jenis_arsip', '$gambar')";
  if($conn->query($sql)){
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
    $_SESSION['success'] = 'Arsip berhasil ditambahkan';
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
