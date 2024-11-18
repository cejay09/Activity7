<?php
session_start();

$message = ""; // Initialize an empty message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Check credentials
    if ($username === 'CEJAY' && $password === 'ADMIN' && $email === 'pelobellocejay@gmail.com') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        // Redirect to dashboard
        header("Location: pages/dashboard.php");
        exit();
    } else {
        $message = "<p class='error-message'>Invalid username, password, or email.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <?php echo $message; ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
        <div class="form-group remember-me">
            <input type="checkbox" id="remember" name="remember"> Remember Me
        </div>
    </form>
    <div class="signup">
        <p>Don't Have an account? <a href="SignUp.php">Sign Up</a></p>
    </div>
    <div class="forgot-password">
        <a href="forgot_password.php">Forgot Password?</a>
    </div>
</div>

<script>
function togglePassword() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.textContent = "🙈";
    } else {
        passwordField.type = "password";
        toggleIcon.textContent = "👁️";
    }
}
</script>

</body>
</html>
