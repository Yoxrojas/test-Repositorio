<?php
session_start();
include 'db.php';

$cart_items = $conn->query("SELECT * FROM cart WHERE user_id = {$_SESSION['user_id']}");

while ($item = $cart_items->fetch_assoc()) {
    $conn->query("INSERT INTO orders (user_id, book_id, quantity) VALUES ({$_SESSION['user_id']}, {$item['book_id']}, {$item['quantity']})");
    // Eliminar del carrito después de la compra
}
?>