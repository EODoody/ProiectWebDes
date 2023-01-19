<!DOCTYPE html>

<html>
  <head>

    <link rel="stylesheet" href="random.css">

      <!-- Loading Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


    <style>
      /* Add some styling to the navigation bar */
      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: lightgrey;
        height: 60px;
      }
  
      /* Style the left items */
      nav .left-items {
        display: flex;
        align-items: center;
        margin: 20px;
      }
  
      .left-items{
        margin-right: 10px;
      }
      /* Style the login/signup button */
      nav .login-button {
        background-color: white;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 4px;
        display: flex;
        justify-content: end;
      }
  
      /* Add some hover effects to the login/signup button */
      nav .login-button:hover {
        background-color: lightblue;
      }

  


      .fade-out {
           opacity: 0;
           transition: opacity 1s ease-in-out;
      }


    </style>





  </head>
  <body>

    <!-- Create the navigation bar -->
  <nav>
    <!-- Left items -->
    <div class="left-items">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>

    <!-- Login/signup button -->
    <button class="login-button">Login/Signup</button>
  </nav>


    <!-- Login Form 
<div class="container mt-5">
  <h2>Pizzeria Login</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

 Registration Form 
<div class="container mt-5">
  <h2>Pizzeria Registration</h2>
  <form action="register.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm_pwd" placeholder="Confirm password" name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
-->

<!-- Carousel 

<script>
  const carousel = document.getElementById('carouselExampleIndicators');
  const images = carousel.getElementsByTagName('img');
  
  carousel.addEventListener('slide.bs.carousel', function() {
    for (let i = 0; i < images.length; i++) {
      images[i].classList.add('fade-out');
    }
  });
  
  carousel.addEventListener('slid.bs.carousel', function() {
    for (let i = 0; i < images.length; i++) {
      images[i].classList.remove('fade-out');
    }
  });
  
  </script>
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pic1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>









-->
<hr style="margin-bottom: 75px;">


<!--This will be used in another page to show the progress of your order  -->
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" 
  style="width: 75%; color: whitesmoke; font-size: large;">Progress bar </div> 
</div>

<hr style="margin-bottom: 100px;">

<!-- This will link to another page  (button with popover)-->
<div class="d-flex p-2 justify-content-between">
    <button type="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover Header" data-bs-content="I SAID USELESS BUTTON">Useless Button</button>
    <div class="spinner-border text-muted" ></div>
    <a href="https://eodoody.github.io/CV/CV/index.html">Github CV</a>

    <script>
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
      })
      </script>

</div>

<br style="margin-bottom: 100px;">



<hr style="margin-bottom: 100px;">


 <!-- 
  

    while($row = $result->fetch_assoc()) {
      echo "ID CLIENT: ".$row["ID"]."<br>";
    echo "Username: " . $row["username"] . "<br>";
    echo "Password: " . $row["password"] . "<br>";
    echo "<hr>";
    echo "NUME CLIENT:".$row["Last_Name"]."<br>";
    echo "PRENUME CLIENT:".$row["First_Name"]."<br>";
    echo "Email:".$row["email"]."<br>";
    echo "Telefon:".$row["Phone_Number"]."<br>";

 

  <script>
      alert("Hello\n A user has logged in");
     </script>
 -->

 <div class="container">
  <div class="row">
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "pizzeria3.14";

        session_start();

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT Pizza_Image, Pizza_Title, Pizza_Description FROM pm_pizza";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row

          while($row = $result->fetch_assoc()) {

            ob_start();

              echo '<div class="col-sm-4">';
                echo '<div class="card">';
                 // Set the content type header to the appropriate image type
                  
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Pizza_Image'] ).'" class="img-thumbnail" alt="image">';
                  echo '<div class="card-body">';
                    echo '<h5 class="card-title">'. $row["Pizza_Title"] .'</h5>';
                    echo '<p class="card-text">'. $row["Pizza_Description"] .'</p>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';

              ob_end_flush();
          }
      } else {
          echo "0 results";
      }

      
      $conn->close();
    ?>
  </div>
</div>
      
  </body>

</html>