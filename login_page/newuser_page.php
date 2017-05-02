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

$login_succeeded = false;

$name = $_GET["name"];
$pwd = $_GET["pwd"];
$email = $_GET["email"];

$sql = "INSERT INTO Users (name, pwd, email, status)
VALUES ('$name', '$pwd', '$email', 'User');";

if ($conn->multi_query($sql) === TRUE) {
    $login_succeeded = true;
} else {
	#echo 'alert("account already exists!")';
	$message = "account already exists!";
	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if ($login_succeeded)
    header("Location: newcreatedsuccess.html");
else
	#echo 'alert("account already exists!")';
	$message = "account already exists!";
	echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: newuser.html");

?>