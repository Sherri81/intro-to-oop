<?php

$dsn = "mysql:
        host=localhost;
        dbname=adv_php;
        charset=utf8;
        port=3306";

$pdo = new PDO($dsn, "adv_php_user", "QnepmMdV", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->query("SELECT * FROM `products`");

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>

<body>

  <h1>Products</h1>

  <?php foreach ($products as $product) : ?>
    <h2><?= htmlspecialchars($product["name"]) ?></h2>
    <p><?= htmlspecialchars($product["description"]) ?></p>
  <?php endforeach; ?>

</body>

</html>