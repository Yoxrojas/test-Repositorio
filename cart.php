<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Your Shopping Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Book</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sample Book</td>
                    <td>$19.99</td>
                    <td>1</td>
                    <td>$19.99</td>
                </tr>
                <!-- Más artículos se agregarán aquí -->
            </tbody>
        </table>
        <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
    </div>
</body>
</html>