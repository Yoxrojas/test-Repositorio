<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include 'db.php'; // Asegúrate de que este archivo esté configurado correctamente

    // Consulta para obtener todos los libros
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Biblioteca Digital</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="genres.php">Genres</a></li>
                <li class="nav-item"><a class="nav-link" href="topsales.php">Top Sales</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Cátalogo General</h1>
        <div class="row">
            <?php
            // Verifica si hay resultados y muestra cada libro en una tarjeta
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-3 mb-4">';
                    echo '  <div class="card h-100">';
                    echo '      <img src="' . $row['cover_image'] . '" class="card-img-top" alt="' . $row['title'] . '">';
                    echo '      <div class="card-body">';
                    echo '          <h5 class="card-title">' . $row['title'] . '</h5>';
                    echo '          <p class="card-text">Author: ' . $row['author'] . '</p>';
                    echo '          <p class="card-text">Price: $' . $row['price'] . '</p>';
                    echo '      </div>';
                    echo '      <div class="card-footer text-center">';
                    echo '          <a href="add_to_cart.php?id=' . $row['id'] . '" class="btn btn-primary">Add to Cart</a>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-center">No books found.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>Author: " . $row['author'] . "</p>";
        echo "<p>Genre: " . $row['genre'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No books found.";
}
?>

</body>

</html>