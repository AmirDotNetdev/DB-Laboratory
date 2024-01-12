<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error) {
    die("connection failed");
} else {
    echo "success";
    $customer_id = $_POST['customer_id'];
    $datecreated = date('y,m,d');
    $shipper_id = $_POST['shipper_id'];
    $transactionid = $_POST['transactionid'];
    $complete = 0;
    $shiped_date = $_POST['shiped_date'];
    $shipaddress = $_POST['shipaddress'];

    $sql = "INSERT INTO orders (customer_id, shipper_id, transactionid, `complete`, shiped_date, shipaddress, datecreated) VALUES ('$customer_id', '$shipper_id', '$transactionid', '$complete', '$shiped_date', '$shipaddress', '$datecreated')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
