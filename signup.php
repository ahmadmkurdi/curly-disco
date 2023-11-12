<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    // Redirect to home page
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];

    $credentialsPath = './assets/json/credentials.json';
    
    // Load existing credentials
    $credentials = file_exists($credentialsPath) ? json_decode(file_get_contents($credentialsPath), true) : [];

    // Check if username already exists
    if (isset($credentials[$username])) {
        echo('Username already exists');
        exit();
    } else {
        // Add new user data
        $credentials[$username] = [
            'fullname' => $fullname,
            'password' => $password,
            'sex' => $sex,
            'dob' => $dob
        ];

        // Save to JSON file
        file_put_contents($credentialsPath, json_encode($credentials, JSON_PRETTY_PRINT));

        // Redirect to login page
        header('Location: login.php');
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/auth.css">
    <title>Sign up</title>
</head>
<body>
    <div class="form-container">
        <form id="signupForm" class="form-box" method="post">
            <h2>Sign up</h2>
            <input type="text" placeholder="Username" name="username" required>
            <input type="text" placeholder="Full Name" name="fullname" required>
            <input type="password" placeholder="Password" name="password" required>
            <select name="sex" required>
                <option value="" selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="date" placeholder="Date of Birth" name="dob" required>
            <button type="submit">Submit</button>
        </form>

        <div class="font-sm">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
