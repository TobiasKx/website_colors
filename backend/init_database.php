<?php 
$servername = "localhost";
$username="root";
$password= "admin";
$database= "world";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE website_colors";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

// Create Table
$mysqli = new mysqli("localhost", $username, $password, $database);
$query="
	CREATE TABLE website_colors.user(
    name char,
    password char,
    fav_color char
);";
?>