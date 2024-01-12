<?php

include('setting.php');
$conn = new mysqli($host, $username, $psw, $database);

if ($conn->connect_error)
    die("connection failed");
else
    echo "success";

$sql = "SELECT * FROM messages";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "subject: " . $row["subject"] . " - body: " . $row["body"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
