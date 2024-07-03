<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taman-asri";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM fauna";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="grid-item">';
        echo '<img src="'.$row['gambar'].'" alt="'.$row['nama'].'">';
        echo '<div class="description">';
        echo '<h3>'.$row['nama'].'</h3>';
        echo '<p>'.$row['deskripsi'].'</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No images found.";
}

$conn->close();

?>;