<?php
session_start();

// Jika sudah login, arahkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Proses login sederhana
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === "admin" && $password === "12345") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Marvel Catalog</title>
    <link rel="stylesheet" href="2409106021_RenayaPutriAlika.css">
</head>
<body>
<header>
    <h1>Marvel Collectibles Catalog</h1>
</header>

<main>
    <section id="login" class="card" style="max-width:400px; margin:auto; text-align:center;">
        <h2>Login ke Dashboard</h2>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2025 Marvel Collectibles Catalog</p>
</footer>
</body>
</html>
