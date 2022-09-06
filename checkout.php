<?php
//include "header.php";
include "database.php";
include "my-functions.php";
$conn = new PDO("mysql:host=localhost;dbname=playground","abdullah", "123456");
checkout($conn);

$product_id = $_POST['id'];
$quantity = intval($_POST['qty']);
$order_id = getLastOrderId($conn);

createOrderProduct($conn,$order_id[0]["id"], $product_id, $quantity);


?>

<div class="product">
    <img src="<?= $_POST["image"] ?>" class="img-fluid">
    <h5 class="card-title">Product Name : <?= $_POST["item_name"] ?></h5>
    <p class="card-text">Product Price with tax :<?php formatPrice($_POST['price']) ?></p>
    <p class="card-text">Product Price without tax :<?php formatPrice(priceExcludingVAT($_POST['price'])) ?></p>
    <h5 class="card-title">Product Name : <?= $_POST["qty"] ?></h5>















































