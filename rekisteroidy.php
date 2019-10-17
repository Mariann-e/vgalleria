<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekisteröidy</title>
  </head>
    <body>
      <div id="topnav">
        <ul>
          <li><a href="etusivu.php">Virtuaaligalleria MATTE</a></li>
          <li><a href="etusivu.php">Paikka taiteelle</a></li>
          <li><a href="rekisteroidy.php">REKISTERÖIDY</a></li>
          <li><a href="kirjaudu.php">KIRJAUDU SISÄÄN</a></li>
        </ul>
      </div>

  <div id="banner">
    <img src="img/banner.png">
  </div>
  <form class="" action="index.html" method="post">
    <label for="kn">Käyttäjänimi</label><br>
    <input type="text" id="kn" name="kn" value="" placeholder="käyttäjänimi" required><br>
    <label for="sp">Sähköposti</label><br>
    <input type="text" id="sp" name="sp" value="" placeholder="e-mail" required><br>
    <label for="en">Etunimi</label><br>
    <input type="text" id="en" name="en" value="" placeholder="etunimi"><br>
    <label for="sn">Sukunimi</label><br>
    <input type="text" id="sn" name="sn" value="" placeholder="sukunimi"><br>
    <label for="ss">Salasana</label><br>
    <input type="text" id="ss" name="ss" value="" placeholder="salasana" required><br>
    <input type="Submit" name="Submit" value="Submit"><br>
  </form>

	<?php include "footer.php"; ?>
