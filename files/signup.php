<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In / Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <form class="form" action="signupcode.php" method="post">
            <h2>Please SignUp Here!</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">SignUp</button>
            <p class="signup-link">New Here? <a href="signin.php">Sign in</a></p>
        </form>
    </div>
</body>
</html>