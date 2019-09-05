<?php 
// connection part
$servername = ""; // this is the server name e.g if you're using local server you uses Localhost
$username = ""; // this is the username e.g if you're using local server you uses root
$password = ""; // this is the password, e.g if you're using local server you left it blank.
$databasename = ""; // this is the database name
  $conn = new mysqli($servername, $username, $password, $databasename);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>