<?php
include 'connect.php';

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="gallery.php">Gallery</a></li>
                <li class="link"><a href="blog.php">Blog</a></li>
                <li class="link"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="blog">
        <div class="containerblog">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="cardblog">
                        <div class="contentblog">
                            <h3><?php echo $row["title"]; ?></h3>
                            <p><?php echo $row["content"]; ?></p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "Tidak ada artikel yang ditemukan.";
            }
            $conn->close();
            ?>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
