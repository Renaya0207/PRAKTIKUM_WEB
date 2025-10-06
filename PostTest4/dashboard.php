<?php
session_start();

// Cegah akses tanpa login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Tangani navigasi dengan $_GET
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'katalog';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Marvel Catalog</title>
    <link rel="stylesheet" href="2409106021_RenayaPutriAlika.css">
    <script src="2409106021_RenayaPutriAlika.js" defer></script>
</head>
<body>
<header>
    <h1>Marvel Collectibles Dashboard</h1>
    <nav>
        <ul>
            <li><a href="dashboard.php?page=katalog">Koleksi</a></li>
            <li><a href="dashboard.php?page=tentang">Tentang</a></li>
            <li><a href="dashboard.php?page=kontak">Kontak</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Selamat datang, <?= $_SESSION['username']; ?>!</h2>

    <?php
    if ($page === 'katalog') {
        include "katalog.php";
    } elseif ($page === 'tentang') {
        echo "<section id='tentang'>
                <h2>Tentang</h2>
                <p><strong>Marvel Collectibles Catalog</strong> adalah katalog online yang menampilkan berbagai koleksi figure, replika, dan merchandise resmi Marvel.</p>
              </section>";
    } elseif ($page === 'kontak') {
        echo "<section id='kontak'>
                <h2>Kontak</h2>
                <form>
                    <label for='name'>Nama:</label>
                    <input type='text' id='name' name='name' required>

                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' required>

                    <label for='message'>Pesan:</label>
                    <textarea id='message' rows='4' required></textarea>

                    <button type='submit'>Kirim</button>
                </form>
              </section>";
    } else {
        echo "<p>Halaman tidak ditemukan.</p>";
    }
    ?>
</main>

<footer>
    <p>&copy; 2025 Marvel Collectibles Catalog</p>
</footer>
</body>
</html>
