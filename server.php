<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "XO";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_GET['i'])) {
    $sql = "SELECT MAX(Step) as MaxStep FROM history";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $order = $row['MaxStep'];
        $order += 1;
    }
    $i = $_GET['i'];
    $j = $_GET['j'];
    $player = $_GET['p'];
    $sql = "INSERT INTO `history`(`Step`, `Player`, `Position`,`Position2`) VALUES ('$order', '$player','$i','$j') ";
    mysqli_query($conn, $sql);
}
