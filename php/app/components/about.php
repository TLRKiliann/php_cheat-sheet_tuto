<?php
$home = '../index.php';
$service = 'service.php';
$about = 'about.php';
$contact = 'contact.php';


$title = "About";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$somevar = "Je suis about dans le footer";
?>

<!DOCTYPE html>

<html>
  <head>
    <?php require 'header.php'; ?>  
  </head>

  <body>

    <nav class="navbar">
      <?php require 'navbar.php'; ?>
    </nav>

    <h1>About</h1>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
