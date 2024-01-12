<?php

$database = "labratory-db";
$username = "root";
$psw = "";
$host = "localhost";
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";

$first_Name = $_POST["firstName"];
$last_Name = $_POST['last-Name'];
$phone_Number = $_POST['phone-Number'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

// Fix the typo in "VALUES" and enclose variables in single quotes
$sql = "INSERT INTO customers (first_Name, last_Name, phone_Number, email, password, address) VALUES ('$first_Name', '$last_Name', '$phone_Number', '$email', '$password', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
