<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn -> connect_error)
die("connection faild");
else
echo "success";


$subject = $_POST['subject'];
$body = $_POST['body'];
$dateCreated = $_POST['dateCreated'];
$answerStatus = $_POST['answerStatus'];

$sql="INSERT INTO messages (first-Name,last-Name,phone-Number, email, password) VALUSE ($subject,$body,$dateCreated, $answerStatus)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>