<?php
require_once "navbar.php";
require_once "my-functions.php";
global $products;

if (!isset($_POST['qty'])) {
    header('Location: index.php');
}

$deliveryboy = "LA poste";
if (isset($_POST['deliveryboy'])) {
    $deliveryboy = $_POST['deliveryboy'];
}

$weight = $_POST["weight"];

$quantity = $_POST['qty'];
if (isQuantityValid($quantity)) {
    $price = $_POST['price'];
    $pnam = $_POST["item_name"];
} else {
    checkMyQty($quantity);
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap CSS  -->
    <link href="styles/style.css" rel="stylesheet">
    <title>Panier</title>
</head>
<body>

<!--<header>-->
<!--    --><?php //require_once "navbar.php"; ?>
<!--</header>-->

<main class="text-white text-center mt-5 ">

    <div id="panier"
         class="container justify-content-center  bg-dark border-primary border-top   ">
        <div class="row">
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Produit</h5>
                <h6 class="border-bottom border-primary mb-3"><?= $pnam ?></h6>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
                <h6 class="border-bottom border-primary mb-3"> <?php formatPrice(intval($price)) ?></h6>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Quantité</h5>
                <h6 class="border-bottom border-primary mb-3"> <?php echo $quantity ?></h6>
                <h5 class="mb-3">Total HT </h5>
                <h5 class="mb-3">TVA</h5>
                <h5 class="mb-3">Total TTC </h5>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Total</h5>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total(priceExcludingVAT($price), $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity) - total(priceExcludingVAT($price), $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity)) ?></h6>
            </div>
        </div>
    </div>


    <form action="checkout.php" class="container col-10  d-flex justify-content-center bg-dark mb-0 " method="post">
        <label class="p-2" for="deliveryboy">Choix du transporteur </label>
        <select name="deliveryboy" class="me-5 rounded-pill" style="width: 50%">
            <option value="LA poste">LA poste</option>
            <option value="Amazon">Amazon</option>
            <option value="dhl">DHL</option>
            <option value="chronopost">Chronopost</option>
        </select>

        <!--        <input type="hidden" name="" value="">-->
        <input style="width: 200px" class="btn btn-primary" type="submit" value="Valider">

    </form>

    <div class="container col-10 bg-dark d-flex justify-content-end ">


        <div class="col-4 mt-3">
            <h5 class="mb-3">Total HT <?php formatPrice(total(priceExcludingVAT($price), $quantity)) ?></h5>
            <h5 class="mb-3">
                TVA <?php formatPrice(total($price, $quantity) - total(priceExcludingVAT($price), $quantity)) ?></h5>
        </div>

    </div>
    <form action="checkout.php" method="post">
        <input type="hidden" name="product_id" value="">

    </form>


</main>

<footer>
    <?php
    require_once "footer.php";
    ?>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>


<!-- Bootstrap JavaScript -->

</body>
</html>
