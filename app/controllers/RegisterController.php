<?php
require '../config/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        exit('Please fill all the fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('Invalid email format.');
    }

    if (!preg_match('/^[a-zA-Z0-9_]{5,}$/', $username)) {
        exit('Username is not valid. It must be at least 5 characters long and contain only letters, numbers, and underscores.');
    }

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        exit('Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one number.');
    }       

    // Check if user already exists, hash password, and insert user into database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    if ($stmt->rowCount() > 0) {
        exit('User with this username or email already exists.');
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);
    header("Location: /public/index.php "); 
    exit();
}
?>  
