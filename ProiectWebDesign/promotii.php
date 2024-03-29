<?php 
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>&pi;zzeria Promotions</title>
    <!-- include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="Styles/promotii.css">
    

    <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">


    <style>
      .col-sm-4{
        display: flex;
        margin-left: 35%;
        margin-bottom: 10%;
        border: 5px;
        border-color: burlywood;
        box-shadow: inset;
      }
    </style>

  </head>

  
  <body background="Images/background.jpg">
   

       <!-- Include navbar -->
    <?php include 'navbar.php'; ?>
  


    <div class="container mt-5">
      <h1 class="text-center text-white">&pi;zzeria Promotions</h1>
      <hr style="margin-bottom: 20px;">
      
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Two for One Tuesday</h5>
              <p class="card-text">On Tuesdays, buy one pizza and get the second one free!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Weekend Special</h5>
              <p class="card-text">On weekends, get 20% off your entire order with promo code WEEKEND20</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Family Pack</h5>
              <p class="card-text">Get a large pizza, garlic bread, and 2 liter soda for just $30 on weekdays</p>
            </div>
          </div>
        </div>
      
    </div>
  </body>
</html>