<?php
include "../config/db.php";
$id=$_GET['id'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-header bg-warning">
    <h4>Edit User</h4>
</div>

<div class="card-body">
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?= $data['name'] ?>">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?= $data['email'] ?>">
</div>

<div class="mb-3">
<label>Role</label>
<input type="text" name="role" class="form-control" value="<?= $data['role'] ?>">
</div>

<button class="btn btn-primary">Update</button>
<a href="index.php" class="btn btn-secondary">Back</a>

</form>
</div>
</div>
</div>

</body>
</html>
