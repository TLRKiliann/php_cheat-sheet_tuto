<?php $title = "Second title";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$somevar = "Je suis service var du footer";

$home = '../index.php';
$service = 'service.php';
$about = 'about.php';
$contact = 'contact.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <?php require '../components/header.php'; ?>
  </head>
  <body>
    
    <nav class="navbar">
      <?php require 'navbar.php' ?>
    </nav>
    
    <h1>Now, you are on second page !</h1>
    <h2>Good job !!!</h2>
    
    <div>
      <a href="../index.php">Go to Home !</a>
    </div>
    
    <footer>
      <?php require 'footer.php'; ?>
    </footer>

  </body>

</html>
