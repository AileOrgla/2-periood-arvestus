<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
  <a href="index.php">Mine tagasi</a>
    <?php $username = $_GET["username"]; ?>
    <?php $age = $_GET["age"];

    if ($age >= 18) {
        echo "Tere {$username}! Olete lehekülje vaatamiseks piisavalt vana.";
    }
    else {
        echo "Tere {$username}! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
    }

    ?>

  </body>
</html>
