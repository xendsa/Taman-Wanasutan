<?php
session_start();

// Periksa apakah tombol register diklik
if (isset($_POST['register'])) {
    // Sertakan file koneksi ke database
    require_once('../conn.php');

    // Ambil data dari form registrasi
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // Proses upload foto
    if(isset($_FILES["photo"]) && !empty($_FILES["photo"]["name"])) { // Tambahkan pengecekan apakah file foto terkirim
        $target_dir = "uploads/"; // Direktori tempat menyimpan foto
        $photo = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

        // Periksa apakah file gambar benar-benar gambar atau bukan
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            // File adalah gambar
            $uploadOk = 1;
        } else {
            // File bukan gambar
            $_SESSION['error'] = "File bukan gambar.";
            header("Location: registrasi.php");
            exit();
        }

        // Periksa apakah file sudah ada
        if (file_exists($photo)) {
            $_SESSION['error'] = "File sudah ada.";
            header("Location: registrasi.php");
            exit();
        }

        // Proses upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo)) {
            // File berhasil diupload
            // Query untuk menyimpan data ke dalam database
            $query = "INSERT INTO admin (username, firstname, lastname, photo, created_on) VALUES ('$username', '$firstname', '$lastname', '$photo', NOW())";

            // Eksekusi query
            if (mysqli_query($koneksi, $query)) {
                // Registrasi berhasil
                $_SESSION['success'] = "Registrasi berhasil. Silakan login.";
                header("Location: login.php");
                exit();
            } else {
                // Registrasi gagal
                $_SESSION['error'] = "Registrasi gagal. Silakan coba lagi.";
                header("Location: registrasi.php");
                exit();
            }
        } else {
            // File gagal diupload
            $_SESSION['error'] = "Terjadi kesalahan saat mengupload file.";
            header("Location: registrasi.php");
            exit();
        }
    } else {
        // Jika field untuk foto tidak diisi atau tidak terkirim
        $_SESSION['error'] = "Mohon pilih file foto.";
        header("Location: registrasi.php");
        exit();
    }
} else {
    // Jika pengguna mencoba mengakses halaman ini secara langsung
    header("Location: registrasi.php");
    exit();
}
?>
