<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
    // redirect to login page
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/index.css">
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
        <h1>Welcome</h1>
        <p>Great things to come...</p>
    </div>
</body>
</html>