<?php
$host = 'localhost';
$user = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP
$database = 'task_manager'; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>