<?php
include "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $role  = $_POST['role'] ?? '';

    // Validation
    if (empty($name) || empty($email)) {
        die("Name and Email are required");
    }

    $sql = "INSERT INTO users (name, email, role) VALUES ('$name', '$email', '$role')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>
