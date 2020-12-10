<?php
require_once(__DIR__.'/../vendor/autoload.php');

// Feature 1
// créer des joueurs
$joueur = \Cardofony\Cardofony::newPlayer("Julien");
assert($joueur instanceof \Cardofony\Player);
assert($joueur->getName() == "Julien");

// Feature 2
// créer une tabke
$table = \Cardofony\Cardofony::newTable();
assert($table instanceof \Cardofony\Table);

//Feature 2.1
// un joueur peut rejoindre une table
$table->addPlayer($joueur);
assert($table->hasPlayer($joueur));

$participants = $table->getPlayers();
assert(in_array($joueur, $participants));
