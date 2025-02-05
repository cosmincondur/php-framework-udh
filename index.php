<?php

$dsn = "mysql:host=localhost;dbname=pfu_dave_hall;charset=utf8;port:3306";

$pdo = new PDO($dsn, "root", "");

$stmt = $pdo->query("SELECT * FROM product");

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <?php foreach ($products as $product): ?>
        <h2><?= $product["name"] ?></h2>
        <p><?= $product["description"] ?></p>
    <?php endforeach; ?>
</body>
</html>