<?php
$url = "https://fakestoreapi.com/products";

$response = file_get_contents($url);

if ($response === FALSE) {
    die("API not responding");
}

$products = json_decode($response, true);

if (!is_array($products)) {
    die("Invalid API data");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<style>
.card{
    width:200px;
    padding:10px;
    margin:10px;
    border:1px solid #ccc;
    float:left;
    text-align:center;
}
</style>
</head>
<body>

<h2>Products from API</h2>

<?php
foreach($products as $p){
?>
<div class="card">
    <img src="<?= $p['image'] ?>" width="100"><br>
    <strong><?= $p['title'] ?></strong><br>
    ₹<?= $p['price'] ?>
</div>
<?php } ?>

</body>
</html>
