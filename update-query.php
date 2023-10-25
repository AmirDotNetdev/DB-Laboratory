<?php
include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";

$sql="UPDATE product SET status='deleted' WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo " record updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>