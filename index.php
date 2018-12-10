<?php
$servername = "mysqlant:3306";
$username = "user33R";
$password = "xXnhSQpiBaJIeL8u";


// Create connection

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>