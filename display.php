<?php
require_once "navbar.php";
require_once "my-functions.php";
require 'database.php';
include "class/item.php";
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


            </div>
        </div>
<?php } ; ?>
    </div>
</div>


<!--this is my footer-->
<?php require "footer.php" ?>
</body>
</html>

