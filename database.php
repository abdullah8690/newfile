<?php
function connection(){
    return new PDO("mysql:host=localhost;dbname=playground","abdullah", "123456");


}

function selectAllProducts(PDO $conn){
    $query = "SELECT * FROM products";
    $sql = $conn->prepare($query);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

//function productsNoDiscount(PDO $conn){
//    $query = "SELECT * FROM products WHERE discount = 0";
//    $sql = $conn->prepare($query);
//    $sql->execute();
//    return $sql->fetchAll(PDO::FETCH_ASSOC);
//}

function checkout(PDO $conn){
    $customer_id = rand(1, 3);
    $query = "INSERT INTO orders (customer_id, date) VALUES ('$customer_id', CURDATE())";
   $conn->query($query);
    echo "Order created successfully";
    echo "<br>";
}

function createOrderProduct(PDO  $conn, $order_id, $product_id, $quantity)
{
    $query = "INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES ($order_id, $product_id, $quantity)";
    $conn->query($query);
    echo "Order_product created successfully ";
}

function getLastOrderId(PDO  $conn)
{
    $query = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $result =  $conn->query($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}


































