<?php
require_once "navbar.php";
require_once "my-functions.php";
require 'database.php';
include "item.php";
$conn = connection();
$sql = selectAllProducts($conn);
//$sql = productsNoDiscount($conn);
global $products;

?>
<?php include "header.php"; ?>
<body>

<div class="container">
            <h1>Shopping</h1>
    <div class="row">
        <?php foreach ($sql as $kys => $value) { ?>

        <div class="col-md-3">
            <div class="product">
                <img src="<?= $value["image"] ?>" class="img-fluid">
                <h5 class="card-title">Product Name : <?= $value["name"] ?></h5>
                <p class="card-text">Product Price with tax :<?php formatPrice($value['price']) ?></p>
                <p class="card-text">Product Price without tax :<?php formatPrice(priceExcludingVAT($value['price'])) ?></p>
                <?php if ($value["discount"] == null) {
                    echo "<h5 class='text-danger ' >wait for sale</h5>";
                } else { ?>
                    <p> Discount : <?php formatPrice(discountedPrice($value['price'], $value["discount"])) ?></p>
                <?php } ?>

                <form action="checkout.php" method="POST">
                    <label for="quantity">Quantity :</label>
                    <input type="number" name="qty" min="1" max="5" value="1">
                    <input type="hidden" name="item_name" value=" <?= $value['name'] ?>">
                    <input type="hidden" name="image" value=" <?= $value["image"] ?>">
                    <input type="hidden" name="id" value="<?= $value["id"] ?>">
                    <input type="hidden" name='price' value=" <?= $value["price"] ?>">
                    <input type="hidden" name='weight' value=" <?= $value["weight"] ?>">
                    <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                </form>

            </div>
        </div>
<?php } ; ?>
    </div>
</div>


<!--this is my footer-->
<?php require "footer.php" ?>
</body>
</html>

