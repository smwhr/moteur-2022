<?php
 require_once("../../vendor/autoload.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Bataille</title>
</head>
<body>

  <?php
  $julien = new Bataille\Model\Player("Julien");
  var_dump($julien);
  ?>
  
</body>
</html>