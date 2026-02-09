<?php
include "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid Request");
}

$id    = $_POST['id'] ?? '';
$name  = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$role  = $_POST['role'] ?? '';

if (empty($id) || empty($name) || empty($email)) {
    die("All fields are required");
}

$sql = "UPDATE users 
        SET name='$name', email='$email', role='$role' 
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: index.php");
exit;
?>
