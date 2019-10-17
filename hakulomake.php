<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hakulomake</title>
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
      <img src="img/banner.png">
    </div>
    <p>
    <h2>VARAA NÄYTTELYAIKA TEOKSILLESI</h2>
  </p>
  <div id="form">
  <p>
    <h2>Näyttelyhakemus</h2>
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
  </div>
    	<?php include "footer.php"; ?>
