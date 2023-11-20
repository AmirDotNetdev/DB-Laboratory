<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn -> connect_error)
die("connection faild");
else
echo "success";


$first_Name = $_POST['first-Name'];
$last_Name = $_POST['last-Name'];
$phone_Number = $_POST['phone-Number'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql="INSERT INTO users (first-Name,last-Name,phone-Number, email, password) VALUSE ($first_Name,$last_Name,$phone_Number, $email, $password)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>