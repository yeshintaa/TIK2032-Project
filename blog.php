<?php
include 'connect.php';

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs</title>
  <link rel="stylesheet" href="style.css">
  </head>
<body>

<header>
  <h1>Blogs</h1>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<main class="blog">
    <div class="container section">
        <div class="section-cards">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="section-card">
                        <span><?php echo substr($row["title"], 0, 1); ?></span>
                        <h2><?php echo $row["title"]; ?></h2>
                        <p><?php echo $row["content"]; ?></p>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Tidak ada artikel yang ditemukan.</p>";
            }
            $conn->close();
            ?>
        </div>
    </div>
</main>

</body>
</html>
