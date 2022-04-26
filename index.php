<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Guess the nummber, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Guess the Number Game</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Guess the Number";?></h1></center>

    <?php
      echo '<center><img src= "./images/guess.webp" alt="guessImage" width="45%" height="auto"></center>';
    ?>
 
    <!-- Buttons and Text Field -->
    <br>
    <center><form method= "post">
      Guess the Number (1-6): <input type="number" step="1" min="1"  max="6" name="guess">
      <br>
      <br>
      <input type="submit" value="Calculate Answer" />
    </form></center>

    <?php

    	// get the input from text field
      $randomNumber = rand(1,6);
    	$guess = ($_POST['guess']);
    
      if($guess == $randomNumber) {
        echo "Correct!";
        echo "<h6>The correct answer is " . $randomNumber . "</h6>";
      } else { 
        echo "Wrong!";
        echo "<h6>The correct answer is " . $randomNumber . "</h6>";
      }
    ?>
    
    <br>
    <br>
  </body>
</html>