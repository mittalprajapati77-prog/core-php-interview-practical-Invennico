<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-header bg-success text-white">
    <h4>Add User</h4>
</div>

<div class="card-body">
<form method="post" action="store.php">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Role</label>
<input type="text" name="role" class="form-control">
</div>

<button class="btn btn-primary">Save</button>
<a href="index.php" class="btn btn-secondary">Back</a>

</form>
</div>
</div>
</div>

</body>
</html>
