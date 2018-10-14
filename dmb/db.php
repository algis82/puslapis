<?php
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "Svetainiu klientai mobl";

$conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
if($conn->connect_error) {

  echo "Atsiprasome, bet svetaine susidure su problema.\n";
  echo "Klaida: " . $conn->connect_error . "\n";
  exit;
}
mysqli_query($conn,"INSERT INTO klientai (vardas, telefonas, email, message )
VALUES('$_POST[vardas]', '$_POST[telefonas]', '$_POST[email]', '$_POST[message]')");
 ?>
