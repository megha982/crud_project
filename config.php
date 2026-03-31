<?php
$conn = mysqli_connect("localhost", "root", "", "Assignment");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>