<?php
session_start();
include 'db.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para obtener la información del usuario
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifica la contraseña ingresada con la contraseña almacenada
        if (password_verify($password, $user['password'])) {
            // Establece la sesión del usuario
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Invalid credentials.');</script>";
        }
    } else {
        echo "<script>alert('Invalid credentials.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
include 'footer.php';
?>