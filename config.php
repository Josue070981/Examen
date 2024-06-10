<?php
$servername = "bkbro7pf5w4syliyd6pz-mysql.services.clever-cloud.com";
$username = "ueafwccqncasxtsh";
$password = "TWenVqecz61vuS4XaMIn";
$dbname = "bkbro7pf5w4syliyd6pz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
