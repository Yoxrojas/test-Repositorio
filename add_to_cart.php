<?php
session_start();
include 'db.php';
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de login con un mensaje de alerta
    echo "<script>alert('Please log in to add items to the cart.'); window.location.href = 'login.php';</script>";
    exit;
}

if (isset($_GET['id'])) {
    $book_id = $_GET['id'];

    // Consulta para obtener la información del libro, incluyendo el stock
    $sql = "SELECT * FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $book_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();

        // Verifica si hay stock disponible
        if ($book['stock'] > 0) {
            // Agrega el libro al carrito en la base de datos o en el sistema de carrito que estés utilizando
            // Código para agregar al carrito...
            
            // Redirige a la página principal
            header("Location: index.php");
            exit;
        } else {
            // Si no hay stock, muestra una alerta y regresa a la página principal
            echo "<script>alert('This book is out of stock.'); window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Book not found.'); window.location.href = 'index.php';</script>";
    }
}
?>

<?php
include 'footer.php';
?>