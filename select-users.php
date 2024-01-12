<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn->connect_error)
die("connection faild");
else
echo "success";


$sql="SELECT * FROM customers";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " firstname: " . $row["first_name"]. "lastname" . $row["last_name"]. "phonenumber:". $row["phone_number"]. "email:". $row["email"]. "address :". $row["address"] . "<br>";
  }
} else {
  echo "0 results";
}
  
  $conn->close();
?>