<?php
require_once(__DIR__.'/../vendor/autoload.php');

// Feature 1
// créer des joueurs
$joueur = \Cardofony\Cardofony::newPlayer("Julien");
assert($joueur instanceof \Cardofony\Player);
assert($joueur->getName() == "Julien");


$joueur2 = \Cardofony\Cardofony::newPlayer("Caroline");
assert($joueur2 instanceof \Cardofony\Player);
assert($joueur2->getName() != "Julien");
assert($joueur2->getName() == "Caroline");

// Feature 2
// créer une table
$table = \Cardofony\Cardofony::newTable();
assert($table instanceof \Cardofony\Table);

//Feature 2.1
// un joueur peut rejoindre une table
$table->addPlayer($joueur);
assert($table->hasPlayer($joueur));
assert(!$table->hasPlayer($joueur2));

$table->addPlayer($joueur2);
assert($table->hasPlayer($joueur2));

//Feature 2.2
// lister les joueurs d'une table
$participants = $table->getPlayers();
assert(count($participants) == 2);
assert(in_array($joueur, $participants));
assert(in_array($joueur2, $participants));



echo "Ok !\n";
