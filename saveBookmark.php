<?php

  $name = "";
  $pid = $_GET["pid"];

  $cookie_name = 'name';
  if(isset($_COOKIE[$cookie_name])) {
      $name = $_COOKIE[$cookie_name];
  }

  $servername = "localhost";
  $username = "root";
  $password = "test";
  $db_name = "myDB";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db_name);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else {

      $sql = "Insert into myDB.Bookmarks (username, pid ) VALUES ('$name', '$pid');";

      if ($conn->query($sql) === TRUE) {
          echo "Bookmark Saved!";
      } else {
          echo "Error saving Bookmark: " . $conn->error;
      }
  }

  $conn->close();

?>