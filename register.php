<?php
include "config.php";

  if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];


    $sql = "INSERT INTO `users`(`username`, `email`, `password`)  VALUES ('$username','$email','$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body class="background">
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form action="register.php" method="post">
              <h2 class="title"> REGISTER</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" />
              </div>
              <input type="submit" name="submit" value="Sign Up" class="btn solid" />
              <p class="social-text">Already have an Account? <a href="index.php">Sign In</a></p>
              </form>
              </div>
              </div>
              </div>
</body>
</html>

<?php
    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "ascot"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {

        die("Connection Failed" . $conn->connect_error);

    }
?> 