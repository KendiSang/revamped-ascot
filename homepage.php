<?php
include "form.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $contact = $_POST['contact'];

    $email = $_POST['email'];

    $guest = $_POST['guest'];
    
    $date = $_POST['date'];

    $time = $_POST['time'];

    $sql = "INSERT INTO `reservation`(`name`, `contact`, `email`, `guest`, `date`, `time`)  VALUES ('$name', '$contact', '$email','$guest', '$date', '$time')";

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
    <title>Ascot Fine Dining</title>
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/apple-touch-icon.ico" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css"
    />
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- Template Main CSS File -->
    <link href="style.css" type="text/css"  rel="stylesheet" />
    
</head>
<body>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div
    class="container-fluid container-xl d-flex align-items-center justify-content-between"
  >
    <div class="logo">
      <img src="White logo - no background.png"

      class="ascot-logo">
    </div>

    <nav id="navbar" class="login">
      <ul>
        <a href="index.php"
                 class="btn-login">LOGIN</a>
      </ul>
      </div>
    </nav>
    </div>
    </header>

    <!-- ======= Landing Page ======= -->
    <section id= "home-page">
        <div class="home">
          <div class="container">
            <h2>
              <span>Kitchen & Bar</span>
            </h2><br>
            <p>
              Elevate your dining experience to new heights of sophistication and flavor at Ascot Fine Dining. Step into a realm where culinary mastery meets refined ambiance, where each dish is crafted with passion and precision to tantalize your senses and leave an indelible mark on your palate.
            </p>
            <div> 
              <a href="#reservation"
                 class="btn-book">Book Table</a>
            </div>
            </div>
      </div>
</section>

       <!-- ======= Reservation Page ======= -->
<section id="reservation" class="reservation">
    <div class="reservation">
      <form action="homepage.php" method="post" class="form">
        <h5> Make a reservation</h5>
    
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" name="name" placeholder="Name" />
        </div>
        <div class="input-field">
          <i class="fas fa-contact"></i>
          <input type="contact" name="contact" placeholder="Contact" />
        </div>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Email" />
        </div>
        <div class="input-fieldguest">
          <label for="text">Guests</label>
          <input type="number" name="guest" placeholder="Guests" value="0" min="0"/>
        </div>
        <div class="input-field">
          <input type="date" name="date" placeholder="yyyy-mm-dd" value="" min="2024-04-01" max="2025-12-31" />
        </div>
        <div class="input-field">
          <label for="time">Time</label>
          <input type="time" name="time" value="Time" min="12:00" max="21:00" />
        </div>
        <input type="submit" name="submit" value="Submit" class="btn solid" />
        </form>
  </div>
</section>
    
</body>
</html>