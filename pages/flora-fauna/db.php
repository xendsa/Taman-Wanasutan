<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taman_asri";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getData($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

?>;
