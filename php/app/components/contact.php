<?php
$home = '../index.php';
$service = 'service.php';
$about = 'about.php';
$contact = 'contact.php';


$title = "Contact";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$somevar = "Je suis contact footer";
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

    <h1>Contact</h1>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>