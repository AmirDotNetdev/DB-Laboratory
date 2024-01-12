<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";

$sql = "SELECT products.name, customers.first_name
FROM products INNER JOIN orderitems
    ON products.id = orderitems.product_id
        INNER JOIN orders
            ON orders.id = orderitems.order_id
                INNER JOIN customers
                    ON customers.id = orders.customer_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "product: " . $row["name"] . " - customer: " . $row["first_name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
