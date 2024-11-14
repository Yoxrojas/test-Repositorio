<?php
session_start();
include 'db.php';

// Verifica si el carrito tiene elementos
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo '<p class="text-center">Your cart is empty.</p>';
    exit;
}

$cart_items = $_SESSION['cart'];
$books_in_cart = [];
$total = 0;

// Obtener los detalles de los libros del carrito desde la base de datos
foreach ($cart_items as $book_id => $quantity) {
    $query = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $query->bind_param("i", $book_id);
    $query->execute();
    $result = $query->get_result();
    if ($book = $result->fetch_assoc()) {
        $book['quantity'] = $quantity;
        $books_in_cart[] = $book;
        $total += $book['price'] * $quantity;
    }
    $query->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center mb-4">Shopping Cart</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books_in_cart as $book): ?>
                    <tr>
                        <td><img src="/Final_Project_Progr_ll/IMG_Libros/<?php echo htmlspecialchars($book['cover_image']); ?>" width="60" alt="<?php echo htmlspecialchars($book['title']); ?>"></td>
                        <td><?php echo htmlspecialchars($book['title']); ?></td>
                        <td><?php echo htmlspecialchars($book['author']); ?></td>
                        <td>$<?php echo number_format($book['price'], 2); ?></td>
                        <td><?php echo $book['quantity']; ?></td>
                        <td>$<?php echo number_format($book['price'] * $book['quantity'], 2); ?></td>
                        <td>
                            <a href="remove_from_cart.php?id=<?php echo $book['id']; ?>" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <h4>Total: $<?php echo number_format($total, 2); ?></h4>
        <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
    </div>
</div>
</body>
</html>
