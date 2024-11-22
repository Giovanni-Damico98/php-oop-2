<?php
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Toy.php";

$catsCategory = new Category("Cats", "");
$dogsCategory = new Category("Dogs", "");

$table = new Product();
$plasticBone = new Toy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

</body>

</html>