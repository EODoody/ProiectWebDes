

<!DOCTYPE html>

<html>

  <head>

    <!-- Loading Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="Styles/login-signup.css">
    <link rel="stylesheet" href="Styles/navbar.css">

    <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

  </head>

  <body style="font-family: 'Bree Serif', serif;">

       <!-- Black with grey text NAVBAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="main.php">Dood &pi;zzeria</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="meniu.php">Meniu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="promotii.php">Promotii</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Locatii Dine-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.php"> About our team</a>
          </li>
        </ul>
        </div>
      </nav>
  

    <hr>

    <div class="container mt-5">
      <h2>Pizzeria Login</h2>
      <form action="login.php" method="post" >
        <div class="form-group" >
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <p> Don't have an account? 
      <a href="register_form.php"> Sign up HERE </a>  </p>
    </div>

  </body>

</html>