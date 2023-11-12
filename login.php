<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    // Redirect to home page
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $credentialsPath = './assets/json/credentials.json';

    // Check if credentials file exists
    if (!file_exists($credentialsPath)) {
        echo('Credentials file not found.');
        exit();
    }

    // Load existing credentials
    $credentials = json_decode(file_get_contents($credentialsPath), true);

    // Check if the username exists and password matches
    if (isset($credentials[$username]) && $credentials[$username]['password'] === $password) {
        // Handle login success
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $credentials[$username]['fullname'];

        // Redirect to home page
        header('Location: index.php');
    } else {
        // Handle login failure
        echo('Invalid username or password.');
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/auth.css">
    <title>Login</title>
</head>
<body>
    <div class="form-container">
        <form id="signupForm" class="form-box" method="post">
            <h2>Login</h2>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Submit</button>
        </form>

        <div class="font-sm">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>
    </div>
</body>
</html>
