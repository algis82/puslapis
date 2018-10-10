
<?php
    require __DIR__ . '/dmb/app.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
      <body>
      <div class="col s12 m4">
      <div class="container">
      <form id="container"action="programavimas.php" method="post">
      <p class="center"><h5>Užsakymas forma</h5></p>
      <p><input type="text" name="vardas" placeholder="Jusu vardas" required autofocus /></p>
      <p><input type="email" name="email" placeholder="Jusu el.pasto adresas" required /></p>
      <p><textarea placeholder="Jusu zinute..." name="message" required></textarea></p>
      <p><button name="submit" type="submit" id="contect-submit">Siusti</button></p>
      </form>
    </div>
    </div>
    </body>
  </html>
