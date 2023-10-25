<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";


$sql="INSERT INTO product (name,description,price) VALUSE ("khazan","fgdfg",50000)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>