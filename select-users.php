<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";


$sql="SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
  
  $conn->close();
?>