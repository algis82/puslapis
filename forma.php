<?php
    require __DIR__ . '/dmb/app.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>WEB Project - MB Supremus LT</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style media="screen">

  .sticky {
    position: fixed; z-index:999999999;
    top: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 1);
  }
  .navbar-fixed {
    position: absolute;z-index:999999999;
    background-color: rgba(255, 255, 255, 0);
  }
  .titler {
    color: rgba(0, 150, 136, 1);
    font-size: 200%;
  }
  p {
     color: rgb(49, 151, 116);
  }
  h1 {
     text-shadow: 1px 1px 40px #ffffff, 10px 10px 40px #ffffff, -10px 10px 40px #ffffff, 10px -10px 40px #ffffff, -1px 1px 40px #ffffff, 1px -1px 40px #ffffff;
  }
  .h5shrift{
    text-shadow: 1px 1px 40px #000000, 10px 10px 40px #000000, -10px 10px 40px #000000, 10px -10px 40px #000000, -1px 1px 40px #000000, 1px -1px 40px #000000;
  }
  </style>

</head>
<body>
  <nav class="sticky" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" img><img src="img/Untitled2.jpg" width="250px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="programavimas.php"><b>WEB programavimas</b></a></li>
        <li><a href="index.php"><b>Pagrindinis puslapis</b></a></li>
        <li><a href="#"><b>Pastatų energetika</b></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"><b>WEB programavimas</b></a>
        <a href="index.php"><b>Pagrindinis puslapis</b></a>
        <a href="#"><b>Pastatų energetika</b></a></li>
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
    <div class="parallax"><img src="background7.jpg" alt="Unsplashed background img 1"></div>
  </div>



        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="img/logs33.png"></h2>
          </div>
          </div>
          <div class="container">
            <div class="section">

              <div class="row">
                <div class="col s12 center">
                  <center><h3><b>Užsakymo forma</b></h3></center>
                    <select class="browser-default">
                      <option value="" disabled selected>Pasirinkti paslaugą</option>
                      <option value="1">Buhalterinės paslaugos mikro įmonėms</option>
                      <option value="2">Buhalterinės paslaugos smulkioms įmonėms</option>
                      <option value="3">Buhalterinės paslaugos vidutinėms įmonėms
                      </option>
                    </select>

                    <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                    <input type="text" name="vardas" placeholder="Jusu vardas" required autofocus />
                      <label for="first_name">Vardas</label>
                    </div>
                    <div class="input-field col s6">
                      <input type="text" name="last_name" placeholder="Jusu pavardė<" required autofocus />
                      <label for="last_name">Pavardė</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                    <input type="email" name="email" placeholder="Jusu el.pasto adresas" required />
                      <label for="email">El.paštas</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Tel.Nr.</label>
                    </div>
                  </div>
                  </div>
                </form>

                <div >
                  <center><a class="waves-effect waves-light btn-large"<button name="submit" type="submit" id="contect-submit">Patvirtinti užsakymą</button></a></center>
                </div>
                <br>
                <br>

                </div>
              </div>

            </div>
          </div>


        <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 m12 s12">
                <h5 class="white-text">Kontaktai</h5>
                <p class="grey-text text-lighten-4">MB "Supremus LT"<br>Savanorių pr. 129, Vilnius LT- 03150<br>El. paštas: buhalterija@supremus.lt</p>
                <h5 class="white-text">Rekvizitai</h5>
                <p class="grey-text text-lighten-4">AB bankas „Swedbank“<br>Atsiskaitomoji sąskaita: LT03730001111111111<br>Įmonės kodas: 300111111<br>PVM mokėtojo kodas: LT100001111111</p>


              </div>
              <div class="col l6 m12 s12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.802505422834!2d25.23100121584895!3d54.66030198027536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9481c0c27a67%3A0xf8b11c607a099e92!2sSavanori%C5%B3+pr.+129%2C+Vilnius+03150!5e0!3m2!1sen!2slt!4v1537550047621" width="100%" height="350" frameborder="1" style="border: 1px" allowfullscreen></iframe>

              </div>

            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">@Super Puper Blaster Disaster Gang</a>
            </div>
          </div>
        </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
