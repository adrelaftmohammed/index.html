<?php
$host = "localhost";
$user = "root";
$pass = "0595031617";
$db = "car";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}