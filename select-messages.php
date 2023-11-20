<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";


$sql="SELECT * FROM messages";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "subject: " . $row["subject"]. " - body: " . $row["body"] "<br>";
  }
} else {
  echo "0 results";
}
  
  $conn->close();
?>