<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BookStore</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="genres.php">Genres</a></li>
                <li class="nav-item"><a class="nav-link" href="topsales.php">Top Sales</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-4">Títulos Principales</h1>
        <br>
        <div class="row">
            <!-- Ejemplo de libro destacado -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="IMG_Libros/12_Rules_for_Life_Front_Cover_(2018_first_edition).jpg" class="card-img-top" width="100" height="300" alt="Book Image">
                    <div class="card-body">
                        <h5 class="card-title">12 Reglas para vivir</h5>
                        <p class="card-text">Jordan B.Peterson</p>
                        <p class="card-text">$17.99</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                <img src="IMG_Libros/El_Principito.jpg" class="card-img-top" width="100" height="300" alt="Book Image">
                    <div class="card-body">
                        <h5 class="card-title">El Principito</h5>
                        <p class="card-text">Antoine de Saint-Exupéry</p>
                        <p class="card-text">$8.99</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>