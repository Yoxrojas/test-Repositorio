<?php
session_start();

// Verifica que se haya pasado un ID de libro
if (isset($_GET['id'])) {
    $book_id = $_GET['id'];
    
    // Elimina el libro del carrito si existe
    if (isset($_SESSION['cart'][$book_id])) {
        unset($_SESSION['cart'][$book_id]);
    }
}

// Redirige de vuelta al carrito para mostrar la actualización
header("Location: cart.php");
exit;
