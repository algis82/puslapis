<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "Svetainiu klientai mobl");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli -> connect_error) {

  echo "Atsiprasome, bet svetaine susidure su problema.\n";

  exit;
}
mysqli_query($mysqli,"INSERT INTO klientai (vardas, telefonas, email, message )
VALUES('$_POST[vardas]', '$_POST[telefonas]', '$_POST[email]', '$_POST[message]')");
 ?>
