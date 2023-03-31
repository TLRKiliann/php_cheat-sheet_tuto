<?php $title = "Second title";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$footervar = "Service";

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
    
    <main>
      <h1>Service</h1>
      
      <h2>$_SERVER = supervariable</h2>

      <textarea id="txta--service" name="txta--service" rows="35" cols="150">
        <?php print_r($_SERVER); ?>
      </textarea>
      
      <div class="div--link">
        <a href="../index.php">Go to Home !</a>
      </div>
    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>

  </body>

</html>
