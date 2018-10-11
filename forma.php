<?php
    require __DIR__ . '/dma/app.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Užsakymo forma</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
      <body>
      <div class="col s12 m4">
      <div class="container">
      <form id="container"action="forma.php" method="post">
      <p class="center"><h5>Buhalterinės apskaitos užsakymo forma</h5></p>
      <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus /></p>
      <p><input type="email" name="email" placeholder="Jūsų el.pašto adresas" required /></p>
      <p><input type="number" name="telefonas" placeholder="Jūsų telefono nr." required /></p>
      <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
      <p><button name="submit" type="submit" id="contect-submit">Siųsti užsakymą</button></p>
      <p class="center"><a href="buhalterineapskaita.php">Grįžti</a></p>
      </form>
    </div>
    </div>
    </body>
  </html>
