<?php
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(100) NOT NULL,
size VARCHAR(6) NOT NULL,
price INT(6) NOT NULL,
store_name VARCHAR(100) NOT NULL,
is_discounted VARCHAR(10) DEFAULT 0,
link VARCHAR(500),
category VARCHAR(20),
description VARCHAR(1000),
brand VARCHAR(20),
img_loc VARCHAR(1000),

reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Product created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>