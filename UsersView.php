<?php 
require_once "./config.php";

$connection = new mysqli(SERVER,USER,PASS,DB);

$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       include './card.php';
    }
  } else {
    echo "0 results";
}


$connection->close();
