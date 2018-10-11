<?php
 include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KUREMAS</title>
  </head>
  <body>
    <body class="brown-text text-lighten">
      <nav class="sticky" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container"href="index.php" img><img src="img/Untitled.jpg" width="250px"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php"><b>Pradžia</b></a></li>
            <li><a href="programavimas.php"><b>Web programavimas</b></a></li>
            <li><a href="buhalterineapskaita.php"><b>Buhalterinė apskaita</b></a></li>
            <li><a href="dddd.php"><b>Pastatų energetika</b></a></li>
            <li><a href="#four">Kontaktai</a></li>
            </ul>

          <ul id="nav-mobile" class="sidenav">
          <li><a href="index.php"><b>Pradžia</b></a></li>
          <a href="programavimas.php"><b>Web programavimas</b></a>
            <a href="buhalterineapskaita.php"><b>Buhalterinė apskaita</b></a>
            <a href="dddd.php"><b>Pastatų energetika</b></a>
            <a href="#four"><b>Kontaktai</b></a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
              <div class="col s12 m6 l12">
                <div class="titler">
                  <h1><br><br>Mūsų veikla</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="img/background9.jpg" alt="Unsplashed background img 1"></div>
    <h1 class="center red-text"> Atsiprašam laikinai nedirba </h1></br>

    <?php
        include_once 'footer.php';
      ?>
  </body>
</html>
