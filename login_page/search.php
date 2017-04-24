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

#$name = 'jay';
#$pwd = "password1";

//$query = "SELECT * FROM Users WHERE name = '$name' and  pwd = '$pwd' ";


#$size = 'S';
#$brand = 'Columbia';
#$category = 'Jackets';
#$is_discounted = 'Yes';
#$store_name = 'TIS Bookstore';

$query = "SELECT * FROM product WHERE '1' = '1' ";

if(isset($_GET["name"])){
  $name = $_GET["name"];

  $query = $query."and name like '%$name%' ";
}
if(isset($_GET["size"])){
  $size = $_GET["size"];
  $query = $query."and size = '$size' ";
}
if (isset($_GET["brand"])) {
  # code...
  $brand = $_GET["brand"];
  $query = $query."and brand = '$brand' ";
}
if (isset($_GET["category"])) {
  # code...
  $category = $_GET["category"];
  $query = $query."and category = '$category' ";
}
if (isset($_GET["is_discounted"])) {
  # code...
  $is_discounted = $_GET["is_discounted"];
  $query = $query."and is_discounted = '$is_discounted' ";
}
if (isset($_GET["brand"])) {
  # code...
  $store_name = $_GET["store_name"];
  $query = $query."and store_name = '$store_name' ";
}

//$query = $query. "name = '$name' and  pwd = '$pwd'";

 if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "Exists";
      #$row = $result->fetch_assoc();
      #echo "<br> name: ". $row["name"]. " - Password: ". $row["pwd"]. " ";
    }
  else
      echo "Doesn't exist";
  }
else
    echo "Query Failed.";



$conn->close();
?>