<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teostiedot</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <body>

    <div id="topnav">
      <ul>
        <li style="float:left" class=""><a href="etusivu.php">Virtuaaligalleria <b>MATTE</b></a></li>
        <li style="float:right"><a href="etusivu.php">Paikka taiteelle</a></li>
        <li style="float:right"><a href="rekisteroidy.php">REKISTERÖIDY</a></li>
        <li style="float right"><a href="kirjaudu.php">KIRJAUDU SISÄÄN</a></li>
      </ul>
    </div>

    <div id="banner">
      <img src="img/banner1.png">
    </div>
    <p>
    <h2>VARAA NÄYTTELYAIKA TEOKSILLESI</h2>
  </p>
  <p>
    Näyttelylomakkeesi lisäksi, lähetä meille kaksi esimerkkiteosta. Aihe vapaa.
  </p>
    <form class="" action="index.html" method="post">
      <label for="Teosnimi">Teoksen nimi:</label><br>
      <input type="text" id="Teosnimi" name="Teosnimi" value="" placeholder="Teoksesi nimi" required><br>
      <label for="Tekniikka">Tekniikka:</label><br>
      <input type="text" id="Tekniikka" name="Tekniikka" value="" placeholder="Tekniikka" required><br>
      <label for="Vuosi">Valmistusvuosi:</label><br>
      <input type="text" id="Vuosi" name="Vuosi" value="" placeholder="Valmistusvuosi" required><br>
      <label for="Kuvaus">Vapaamuotoinen kuvaus:</label><br>
      <textarea id="Kuvaus" name="Kuvaus" rows="8" cols="80"></textarea><br>
       <input type="Submit" name="Submit" value="Submit"><br>
    </form>
    	<?php include "footer.php"; ?>
