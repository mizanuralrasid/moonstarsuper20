<?php
$conn = new mysqli("localhost", "root", "", "moonstar_exam");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
