<?php $title = "New title";
$style = "styles/style.css";
$favicon = "images/favicon.png";
$somevar = "Je suis la var du footer";

$home = "index.php";
$service = "components/service.php";
$about = "components/about.php";
$contact = "components/contact.php";
?>

<!DOCTYPE html>

<html>
  <head>
    <?php require 'components/header.php'; ?>
  </head>
  <body>

    <nav class="navbar">
      <?php require 'components/navbar.php' ?>
    </nav>

    <h1>Hello Esteban !</h1>
    <h2>Very nice ! no ?</h2>

    <div>
      <a href="components/service.php">Go to service page !</a>
    </div>

    <footer>
      <?php require 'components/footer.php'; ?>
    </footer>

  </body>

</html>
