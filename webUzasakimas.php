
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
      <form id="container"action="webUzasakimas.php" method="post">
      <p class="center"><h5>Užsakymo forma</h5></p>
      <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus /></p>
      <p><input type="email" name="email" placeholder="Jūsų el.pašto adresas" required /></p>
      <p><input type="number" name="telefonas" placeholder="Jūsų telefono nr." required /></p>
      <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
      <p><button name="submit" type="submit" id="contect-submit">Siųsti užsakymą</button></p>
      <a class="waves-effect waves-light "href="programavimas.php">grįžti</a>

      </form>
    </div>
    </div>
    </body>
  </html>
