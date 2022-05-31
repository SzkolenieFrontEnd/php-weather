<?php
require_once "./config.php";

$connection = new mysqli(SERVER,USER,PASS,DB);

$name = $_POST['name'];
$color = $_POST['color'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name,age,color) VALUES ('$name','$age','$color')";

if($connection->query($sql)) {
    $msg = "New record created";
};

$connection->close();

header("Location: index.php?addUser=success");