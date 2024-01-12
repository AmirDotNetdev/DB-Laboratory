<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";

$companyname = $_POST["companyname"];
$address = $_POST["address"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phonenumber = $_POST["phonenumber"];

$sql = "INSERT INTO shippers (companyname, address, firstname, lastname, phonenumber) VALUES ('" . $companyname . "', '" . $address . "', '" . $firstname . "', '" . $lastname . "', '" . $phonenumber . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
