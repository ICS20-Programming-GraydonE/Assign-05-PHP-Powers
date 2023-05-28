<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="What movies can you see alone at the movie theatre?">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Graydon Ezzeddin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
    <link rel="manifest" href="./fav/site.webmanifest" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title> Powers! </title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Calculate Powers!</h1>";
?>

<?php
echo "<h3>Enter Base:</h3>";
?>

<!-- form to get the age from the user -->
    <form action="./results.php" method="post" target="results">
      <label for='base'> Please Enter your Base:</label>
      <input type="number" id="base" placeholder="Ex. 10" step="1" name="base"><br><br>

<?php
echo "<h3>Enter Exponent:</h3>";
?>

<!-- form to get the age from the user -->
      <label for='exponent'> Please Enter your Exponent:</label>
      <input type="number" id="exponent" placeholder="Ex. 15" step="1" name="exponent"><br><br>
<!-- Button --> 
    <input type = "submit" value ="Click!">
</form>
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      numbers
    </iframe>
          </center>
  </body>
</html>