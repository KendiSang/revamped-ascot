<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <form action="login.php" method="post">

<?php
 if (isset($_GET['error'])) {
     ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

<body class="different-background">
    <section id="login">
        <div class="forms-container">
          <div class="signin-signup">
              <h2 class="title"> SIGN IN</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" />
              </div>
              <input type="submit" value="Login" class="btn solid" />
  
              <p class="social-text">Don't have an Account? <a href="register.php">Register here</a></p>
              </div>
              </div>
             </section>

</form>
</body>
</html>
