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