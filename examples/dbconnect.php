<?php
$servername = "localhost";
$username = "id13212736_root";
$password = "Team2internship@1";
$dbname = "id13212736_event";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>