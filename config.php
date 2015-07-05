<?php
$servername = "localhost";
$username = "tgn";
$password = "wqtUE4xiZm";
$dbname = "tgn_newbans";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>