<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center">Your Cart</h2>
    <div class="row">
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo '<div class="col-md-3 mb-4">';
                echo '  <div class="card h-100">';
                echo '      <img src="/Final_Project_Progr_ll/IMG_Libros/' . $item['cover_image'] . '" class="card-img-top" alt="' . $item['title'] . '">';
                echo '      <div class="card-body">';
                echo '          <h5 class="card-title">' . $item['title'] . '</h5>';
                echo '          <p class="card-text">Author: ' . $item['author'] . '</p>';
                echo '          <p class="card-text">Price: $' . $item['price'] . '</p>';
                echo '      </div>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">Your cart is empty.</p>';
        }
        ?>
    </div>
</div>

</body>
</html>

<?php
include 'footer.php';
?>