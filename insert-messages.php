<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";

$curDate = date('Y-m-d');
$subject = $_POST["subject"];
$body = $_POST["body"];
$customer_id = $_POST["customerid"];
$answer = 0;

$sql = "INSERT INTO messages (subject, body, date_created, answerstatus, customer_id) VALUES ('" . $subject . "', '" . $body . "', '" . $curDate . "', '" . $answer . "', '" . $customer_id . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
