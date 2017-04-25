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

$count=0;

$query = "SELECT * FROM product WHERE";

if(isset($_GET["name"]) && $_GET["name"] != ''){
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  $name = $_GET["name"];

  $query = $query." name like '%$name%' ";
  $count = $count + 1;
}


if(isset($_GET["size"]) && $_GET["size"] != '' ){
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  #echo "size";
  $size = $_GET["size"];
  $query = $query." size = '$size' ";
  $count = $count + 1;
}


if (isset($_GET["brand"]) && $_GET["brand"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  #echo "brand";
  $brand = $_GET['brand'];
  $query = $query." brand = '$brand' ";
  $count = $count + 1;
}


if (isset($_GET["category"]) && $_GET["category"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  # code...
  #echo "category";
  $category = $_GET["category"];
  //echo "$category";
  $query = $query." category = '$category' ";
  $count = $count + 1;
}

if (isset($_GET["is_discounted"]) && $_GET["is_discounted"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  # code...
  #echo "discount";
  $is_discounted = $_GET["is_discounted"];
  $query = $query." is_discounted = '$is_discounted' ";
  $count = $count + 1;
}

if (isset($_GET["store_name"]) && $_GET["store_name"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  # code...
  #echo "store_name";
  $store_name = $_GET["store_name"];
  $query = $query." store_name = '$store_name' ";
  $count = $count + 1;
}


if (isset($_GET["price_max"]) && $_GET["price_max"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  # code...
  #echo "store_name";
  $price_max = $_GET["price_max"];
  $query = $query." price <= '$price_max' ";
  $count = $count + 1;
}


if (isset($_GET["price_min"]) && $_GET["price_min"] != '') {
  if ($count>0) {
  # code...
  $query = $query." and";
  $count = $count + 1;
}
  # code...
  #echo "store_name";
  $price_min = $_GET["price_min"];
  $query = $query." price >= '$price_min' ";
  $count = $count + 1;
}



//$query = $query. "name = '$name' and  pwd = '$pwd'";

 if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      #echo "Exists";
      #$row = $result->fetch_assoc();
      #echo "<br> name: ". $row["name"]. " - Password: ". $row["pwd"]. " ";
      /*
      $sth = mysqli_query("SELECT ...");
      $rows = array();
      while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
        */
      $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
      echo "json_encode($rows);";

}
print json_encode($rows);



    }
  else
      echo "Doesn't exist";
  }
else
    echo "Query Failed.";



$conn->close();
?>