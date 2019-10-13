<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <p>
    <h2>VARAA NÄYTTELYAIKA TEOKSILLESI</h2>
  </p>
  <p>
    Täytä alla oleva hakemus. Vastaanotamme hakemukset puolivuotta ennen varsinaista näyttelyä.
  </p>
    <form class="" action="index.html" method="post">
      <label for="Nayttelynimi">Näyttelyn nimi</label><br>
      <input type="text" id="Nayttelynimi" name="Nayttelynimi" value="" placeholder="Näyttelyn nimi" required><br>
      <label for="AlkPVM">Näyttelyn alkamispäivämäärä</label><br>
      <input type="date" id="AlkPVM" name="AlkPVM" value="" min=2019><br>
      <label for="LopPVM">Näyttelyn loppumispäivämäärä</label><br>
      <input type="date" id="LopPVM" name="LopPVM" value="" min=2019><br>
      <label for="Kuvaus">Vapaamuotoinen kuvaus:</label><br>
      <textarea id="Kuvaus" name="Kuvaus" rows="8" cols="80"></textarea><br>
       <input type="Submit" name="Submit" value="Submit"><br>
    </form>
    	<?php include "footer.php"; ?>
