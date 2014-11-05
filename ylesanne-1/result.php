<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
  <a href="index.php">Mine tagasi</a>
<?php
    if ($_GET['age'] >= 18) {
        echo "Tere " . $_GET['username'] . "! Olete lehekülje vaatamiseks piisavalt vana.";
    }
    else {
        echo "Tere " . $_GET['username'] . "! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
    }

    ?>

  </body>
</html>
