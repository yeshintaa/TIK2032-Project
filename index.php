
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Welcome to Shinta's Portfolio</h1>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<main>
  <section>
    <p>Selamat datang!</p>
    <div id="clock" class="clock"></div>
    
    <h2>Kritik dan Saran</h2>
    <form action="database.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="kritik_saran">Kritik/Saran:</label><br>
        <textarea id="kritik_saran" name="kritik_saran" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Kirim">
    </form>
  </section>
</main>

<footer>
  <p>&copy; 2024 Shinta's Portfolio</p>
</footer>

<script src="script.js"></script>
</body>
</html>
