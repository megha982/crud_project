<?php
include("auth.php");
include("config.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM userinfo WHERE user_id=$id");

header("Location: view_users.php");
?>