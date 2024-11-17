<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres - Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">BookStore</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="topsales.php">Top Sales</a></li>
            <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="mt-4">Books by Genre</h1>
        <!-- Botones para filtrar géneros -->
        <form action="genres.php" method="GET" class="mb-4">
            <div class="btn-group" role="group" aria-label="Genre Filters">
                <button type="submit" name="genre" value="fiction" class="btn btn-outline-primary">Fiction</button>
                <button type="submit" name="genre" value="scifi" class="btn btn-outline-secondary">Sci-Fi</button>
                <button type="submit" name="genre" value="mystery" class="btn btn-outline-success">Mystery</button>
                <button type="submit" name="genre" value="biography" class="btn btn-outline-danger">Biography</button>
                <button type="submit" name="genre" value="fantasy" class="btn btn-outline-warning">Fantasy</button>
            </div>
        </form>
        
        <div class="row">
            <!-- Libros filtrados por género -->
            <?php
            // Verificar si se ha seleccionado un género
            if (isset($_GET['genre'])) {
                $selectedGenre = $_GET['genre'];
                echo "<p>Showing books for: <strong>" . ucfirst($selectedGenre) . "</strong></p>";
                
                // Ejemplo de libros según el género seleccionado
                if ($selectedGenre == "fiction") {
                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="IMG_Libros/fiction.jpg" class="card-img-top" alt="Fiction Book">
                            <div class="card-body">
                                <h5 class="card-title">Fictional Story</h5>
                                <p class="card-text">John Doe</p>
                                <p class="card-text">$15.99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>';
                } elseif ($selectedGenre == "scifi") {
                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="IMG_Libros/scifi.jfif" class="card-img-top" alt="Sci-Fi Book">
                            <div class="card-body">
                                <h5 class="card-title">Ciencia-Ficción Adventure</h5>
                                <p class="card-text">Jane Doe</p>
                                <p class="card-text">$12.99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>';
                } elseif ($selectedGenre == "mystery") {
                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="IMG_Libros/mystery.jpg" class="card-img-top" alt="Mystery Book">
                            <div class="card-body">
                                <h5 class="card-title">La chica del tren</h5>
                                <p class="card-text">Paula Hawkins</p>
                                <p class="card-text">$10.99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>';
                } elseif ($selectedGenre == "biography") {
                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="IMG_Libros/biography.jfif" class="card-img-top" alt="Biography Book">
                            <div class="card-body">
                                <h5 class="card-title">Frida Khalo</h5>
                                <p class="card-text">Hayden Herrera</p>
                                <p class="card-text">$18.99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>';
                } elseif ($selectedGenre == "fantasy") {
                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="IMG_Libros/fantasy.jfif" class="card-img-top" alt="Fantasy Book">
                            <div class="card-body">
                                <h5 class="card-title">Alicia en el pais de las maravillas</h5>
                                <p class="card-text">Benjamin Lacobe</p>
                                <p class="card-text">$20.99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                // Si no se ha seleccionado un género, muestra un mensaje de bienvenida o predeterminado
                echo '<p>Please select a genre to browse books.</p>';
            }
            ?>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
