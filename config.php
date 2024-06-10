<?php
$servername = "bhrsfatmg38w70zmojcc-mysql.services.clever-cloud.com";
$username = "ueppu9jnleyhzpky";
$password = "W4L3E6VLImweqvYuIBnQ";
$dbname = "bhrsfatmg38w70zmojcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
