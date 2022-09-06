<?php
class catalogue { public array $Item;

    function __construct(array $Item)
    {
        $this->Item = $Item;
    }
}
?>

<form action="cart.php" method="POST">
    <div class="product">
        <input type="hidden" name="id" value="<?= $product->getId() ?>">
        <input type="hidden" name="category_id" value="<?=$product->getCategoryId()?>">
        <h3><?= $product->getName() ?></h3>
        <img src=" <?= $product->getImageUrl() ?>" width="250"><br><br>
        <p>Price: <?= toEuros($product->getPrice()) ?> €</p>
        <p>Weight: <?= $product->getWeight() ?></p>
        <p>Stock: <?= $product->getQuantity() ?></p>

        <input type="number" name="quantity" value="0" min="0" max="<?= $product->getQuantity(); ?>">

        <?php if( $product->getQuantity() == 0 ): ?>
            <input type="submit" value="Plus disponible !" disabled>
        <?php else: ?>
            <input type="submit" value="Ajouter au panier">
        <?php endif; ?>
    </div>
</form>