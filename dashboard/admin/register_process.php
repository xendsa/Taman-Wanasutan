<?php
session_start();

// Periksa apakah tombol register diklik
if (isset($_POST['register'])) {
    // Sertakan file koneksi ke database
    require_once('../conn_register.php');

    // Pastikan koneksi ke database berhasil
    if (!$koneksi) {
        $_SESSION['error'] = "Koneksi database gagal.";
        header("Location: registrasi.php");
        exit();
    }

    // Ambil data dari form registrasi
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];

    // Validasi password
    if (empty($password)) {
        $_SESSION['error'] = "Password tidak boleh kosong.";
        header("Location: registrasi.php");
        exit();
    }

    // Proses upload foto
    if (isset($_FILES["photo"]) && !empty($_FILES["photo"]["tmp_name"])) {
        $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

        // Query untuk menyimpan data ke dalam database
        $query = "INSERT INTO admin (username, password, firstname, lastname, photo, created_on) VALUES ('$username', '$password', '$firstname', '$lastname', '$photo', NOW())";

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
