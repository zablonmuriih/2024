<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
    <link rel="stylesheet" href="./styles/loginm.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<div class="wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Login Now</h1>
        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <!-- <i class='bx bxs-envelope' ></i> -->

        <div class="remember-forgot">
            <label><input type="checkbox" name="remember">Remember Me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn" name="login">Login</button>

        <div class="register-link"> 
            <p>Don't have an account yet? <a href="/signup.php">Create an Account</a></p>
        </div>
    </form>
</div>

<?php
// PHP code for processing form submission can be added here
?>

</body>
</html>
