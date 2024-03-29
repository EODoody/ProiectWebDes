<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> &pi;zzeria Menu</title>
    <!-- include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    
    <link rel="stylesheet" href="Styles/meniu.css">
    

    <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  
  </head>


  <body background="Images/background.jpg">
   
  <!-- Include navbar -->
<?php include 'navbar.php'; ?>




    <div class="container">
      <h1 class="text-center mt-5 text-white">&pi;zzeria Menu</h1>
      <div class="row mt-5">
        
    <?php
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "pizzeria3.14";

        

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT Pizza_ID, Pizza_Image, Pizza_Title, Pizza_Description FROM pm_pizza";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row

          while($row = $result->fetch_assoc()) {

            ob_start();

              echo '<div class="col-sm-4">';
              echo '<br style= "margin-bottom: 2%">';
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