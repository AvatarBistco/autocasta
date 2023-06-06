<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "AUTO_CASTA_BD";

$conn = mysqli_connect($host, $username, $password, $dbname);

function query($sql) {
    global $conn;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
    return $result;
}
?>
