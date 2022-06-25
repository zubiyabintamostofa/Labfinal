<?php

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];





$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into information(name, email, address, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $address, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}




?>