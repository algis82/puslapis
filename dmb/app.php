<?php

if($_SERVER['REQUEST_METHOD']=== 'POST'){
  include('db.php');
  $vardas = mysqli_real_escape_string($conn, $_POST['vardas']);
  $telefonas = mysqli_real_escape_string($conn, $_POST['telefonas']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  if(!empty($vardas) && !empty($telefonas) && !empty($email) && !empty($message)) {
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
$from = "$email";
$to = "algisat@mail.ru";
$subject = "Nauja zinute";
$autorius = 'zinute nuo:' . $vardas . ',' . $email;
$zinute = htmlspecialchars($message);
mail($to,$subject,$autorius,$zinute,$form);
echo "<script>alert('Dekojame.Jusu užsakymas priimtas ');</script>";
}
}
}

 ?>
