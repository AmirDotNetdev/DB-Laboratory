<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";
$order_id = $_POST["order_id"];
$product_id = $_POST["product_id"];
$quantity = $_POST["quantity"];
$discount = $_POST["discount"];

$getprice = "select price from products WHERE id = ". $product_id;
$result = $conn->query($getprice);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $price = $row["price"];
} else {
    echo "Error: Product not found.";
    $conn->close();
    exit;
}
if ($discount > 0) {
    $total_price = $quantity * $price * (1 - $discount / 100);
} else {
    $total_price = $quantity * $price;
}


$sql = "INSERT INTO orderitems (order_id, product_id, quantity, total, discount) VALUES ('" . $order_id . "', '" . $product_id . "', '" . $quantity . "', '" . $total_price . "', '" . $discount . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
