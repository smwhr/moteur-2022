<?php
 require_once("../../vendor/autoload.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le BlackJack</title>
</head>
<body>

  <?php
    $player = Cardofony::newPlayer("You");
    $banque = Cardofony::newPlayer("Banque");


    $table = Cardofony::newTable();
    $table->addPlayer($banque);
    $table->addPlayer($player);

  ?>
  
</body>
</html>