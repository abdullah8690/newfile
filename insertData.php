<?php
$conQ = new PDO("mysql:host=localhost;dbname=playground","abdullah", "123456");
$sql = ("DELETE FROM products WHERE id=16");

$conQ->exec($sql);

echo " hello ok";


//$sql = "INSERT INTO products( category_id, name, description, image, price, quantity)
//                                    VALUES ('pepsicola','this is new', 'https://media.auchan.fr/MEDIASTEP164660273_2048x2048/B2CD/', '2','15' )";
//$conQ->exec($sql);

//$sql = ("DELETE FROM order_product WHERE product_id=14");
//$sql = ("DELETE FROM products WHERE id=14");

//$sql = ("UPDATE products SET quantity = quantity + 100 WHERE category_id=1;");