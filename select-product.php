<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn->connect_error)
die("connection faild");
else
echo "success";


$sql="SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"] . " description: " . $row["description"]. "price : ". $row["price"] . "<br>";
  }
} else {
  echo "0 results";
}
  
  $conn->close();


?>