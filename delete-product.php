<<<<<<< HEAD
<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";


$sql="DELETE FROM product WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


=======
<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw,$database);

if($conn>->connect_error)
die("connection faild");
else
echo "success";


$sql="DELETE FROM product WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


>>>>>>> 6f823102ec8f91203d62aa51844d903b59e9dba7
?>