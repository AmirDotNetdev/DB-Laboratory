<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error) {
    die("connection failed");
} else {
    echo "success";
    $name = $_POST['name'];
    $price = $_POST['price'];
    $availble = $_POST['availble'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $image = $_POST['image'];
    $categorie = $_POST['categorie'];

    $sql = "INSERT INTO products (name, price, availabe, `description`, status, image, categorie) VALUES ('$name', '$price', '$availble', '$desc', '$status', '$image', '$categorie')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
