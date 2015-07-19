<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgn_newbans";
$dbname2 = "tgn_adminwatch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn2 = new mysqli($servername, $username, $password, $dbname2);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
