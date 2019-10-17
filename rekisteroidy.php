<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekisteröidy</title>
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
  <br>
  <div id="form">
    <h2>Rekisteröidy</h2>
  <form class="" action="index.html" method="post">
    <label for="Un">Käyttäjänimi</label><br>
    <input type="text" id="Un" name="Un" value="" placeholder="käyttäjänimi" required><br>
    <label for="Em">Sähköposti</label><br>
    <input type="text" id="Em" name="Em" value="" placeholder="e-mail" required><br>
    <label for="En">Etunimi</label><br>
    <input type="text" id="En" name="En" value="" placeholder="etunimi"><br>
    <label for="Sn">Sukunimi</label><br>
    <input type="text" id="Sn" name="Sn" value="" placeholder="sukunimi"><br>
    <label for="Ss">Salasana</label><br>
    <input type="text" id="Ss" name="Ss" value="" placeholder="salasana" required><br>
    <input type="Submit" name="Submit" value="Submit"><br>
  </form>
</div>
<br>

	<?php include "footer.php"; ?>
