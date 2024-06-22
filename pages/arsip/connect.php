<?php
$server = 'localhost';
$user = 'root';
$pw = '';
$db = 'taman_asri';

$conn = mysqli_connect($server, $user, $pw, $db);

function getArsip()
{
    global $conn; // Menggunakan koneksi global
    $data = array();

    // Query untuk mengambil data dari tabel arsip
    $sql = "SELECT * FROM arsip";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Memasukkan data ke dalam array
        while ($row = $result->fetch_assoc()) {
            $data[] = array(
                'id_arsip' => $row['id_arsip'],
                'nama' => $row['nama'],
                'deskripsi' => $row['deskripsi'],
                'tanggal' => $row['tanggal_ditambahkan'],
                'jenis_arsip' => $row['jenis_arsip']
            );
        }
    } else {
        echo "0 results";
    }

    return $data;
}

function randomData()
{
    global $conn;
    $data = [];

    // Query untuk mengambil data acak
    $sql = "SELECT id_arsip, nama FROM arsip ORDER BY RAND() LIMIT 5";
    $result = $conn->query($sql);

    // Periksa apakah query berhasil dieksekusi dan ada hasil
    if ($result && $result->num_rows > 0) {
        // Ambil data dari hasil query
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

?>