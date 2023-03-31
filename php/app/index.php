<?php 
$name = 'Esteban';
setcookie('user', $name, time() + 60*60*24*30);
//var_dump($_COOKIE['user']);

session_start();
$_SESSION['admin'] = 'koalatree';

$title = "New title";
$style = "styles/style.css";
$favicon = "images/favicon.png";
$footervar = "Home";

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

    <main>
      <h1>Home</h1>
      <h2>Welcome on my php website !</h2>
      <p style="color: orange;">On this page a session & cookie are created. Find them back on contact page !</p>
      <div>
        <a href="components/service.php">Go to service page !</a>
      </div>
    </main>

    <footer>
      <?php require 'components/footer.php'; ?>
    </footer>

  </body>

</html>
