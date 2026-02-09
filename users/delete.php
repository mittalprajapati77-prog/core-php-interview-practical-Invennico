<?php
include "../config/db.php";

if (!isset($_GET['id'])) {
    die("User ID not found");
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

if (mysqli_num_rows($result) == 0) {
    die("User does not exist");
}

mysqli_query($conn, "DELETE FROM users WHERE id = $id");

header("Location: index.php");
exit;
?>
