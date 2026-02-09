<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-header bg-primary text-white">
    <h4>Users Management</h4>
</div>

<div class="card-body">
<a href="create.php" class="btn btn-success mb-3">+ Add User</a>

<table class="table table-bordered table-hover">
<tr class="table-dark">
<th>Name</th><th>Email</th><th>Role</th><th>Action</th>
</tr>

<?php
$data = mysqli_query($conn,"SELECT * FROM users");
while($row=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['role'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>
<?php } ?>

</table>
</div>
</div>
</div>

</body>
</html>
