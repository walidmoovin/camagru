<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camagru</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="/public/images/logo.png" alt="logo">
        </div>
        <div class="content">
            <div class="login">
                <form action="/public/index.php?action=login" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
            <div class="register">
                <form action="/public/index.php?action=register" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 Camagru by Walid</p>
        </div>
    </div>
</body>
</html>