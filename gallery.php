<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
    // redirect to login page
    header('Location: login.php');
}

if(!file_exists('./assets/json/gallery.json')) {
    echo('Gallery file not found.');
    exit();
}

$gallery = json_decode(file_get_contents('./assets/json/gallery.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- END FONTS -->
</head>
<body>
    <div class="welcome">
        Welcome <?php echo $_SESSION['fullname']; ?>! | <a href="logout.php">Logout</a>
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>BMW 🇩🇪</h1>
        <div class="gallery">
            
        <?php
            foreach ($gallery['images'] as $index => $image) {
                $thumbnailId = $index + 1; // Incrementing ID for each image
                $imagePath = "assets/images/" . $image; // Constructing the image path
                $altText = "Image " . $thumbnailId; // Alt text for the image
        ?>
                <a href="#thumbnail-<?php echo $thumbnailId; ?>">
                    <div class="thumbnail">
                        <img src="<?php echo $imagePath; ?>" alt="<?php echo $altText; ?>">
                    </div>
                </a>
                <div id="thumbnail-<?php echo $thumbnailId; ?>" class="backdrop">
                    <a href="#" class="close-button"></a>
                    <img class="fullscreen-img" src="<?php echo $imagePath; ?>" alt="<?php echo $altText; ?>">
                </div>
        <?php
            }
        ?>
        </div>
    </div>
</body>
</html>
