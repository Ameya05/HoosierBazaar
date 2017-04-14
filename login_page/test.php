<?php
$servername = "iris.ils.indiana.edu";
$username = "rahuvela@iris.ils.indiana.edu";
$password = "VE28)#pappiLAPI";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>