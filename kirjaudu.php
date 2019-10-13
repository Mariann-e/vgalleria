<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kirjaudu sisään</title>
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
  <label for="ss">Salasana</label><br>
  <input type="text" id="ss" name="ss" value="" placeholder="salasana" required><br>
</form>

	<?php include "footer.php"; ?>
