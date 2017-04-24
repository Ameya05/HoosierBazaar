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
$sql = "CREATE TABLE Bookmarks (
name VARCHAR(30) NOT NULL PRIMARY KEY,
pid INT(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table bookmark created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>