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
  <form class="" action="addUser.php" method="post">
    <label for="Username">Käyttäjänimi</label><br>
    <input type="text" id="Username" name="Username" value="" placeholder="käyttäjänimi" required><br>
    <label for="Email">Sähköposti</label><br>
    <input type="text" id="Email" name="Email" value="" placeholder="e-mail" required><br>
    <label for="Etunimi">Etunimi</label><br>
    <input type="text" id="Etunimi" name="Etunimi" value="" placeholder="etunimi"><br>
    <label for="Sukunimi">Sukunimi</label><br>
    <input type="text" id="Sukunimi" name="Sukunimi" value="" placeholder="Sukunimi"><br>
    <label for="Salasana">Salasana</label><br>
    <input type="text" id="Salasana" name="Salasana" value="" placeholder="salasana" required><br>
    <input type="Submit" name="Submit" value="Submit"><br>
  </form>
</div>
<br>

	<?php include "footer.php"; ?>
