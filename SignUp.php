<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>

<div class="SignUp-container">
    <h2>SignUp</h2>
  
    <form action="SignUp.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class = "form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <button type="submit">SignUp</button>
        </div>
        <div class="form-group">
           <p> <input type="checkbox" id="remember" name="remember"> Remember Me</p> 
        </div>
    </form>
    <div class="LogIn">
       <p> Have an account?  <a href="index.php">Log In</a> </p>
    </div>
    </form>
</div>

</body>
</html>
