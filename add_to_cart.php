<?php
include 'session_config.php'; // Inicia la sesión
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$book_id = $_GET['id'];

$sql = "SELECT stock FROM books WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $book_id);
$stmt->execute();
$result = $stmt->get_result();
$book = $result->fetch_assoc();

if ($book && $book['stock'] > 0) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $book_id;

    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('No hay stock disponible para este libro'); window.location.href='index.php';</script>";
}
?>