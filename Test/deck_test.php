<?php
require_once(__DIR__.'/../vendor/autoload.php');

// Feature 3
// créer un deck de carte
$deck = \Cardofony\Cardofony::newDeck(Cardofony\Deck::CLASSIC, 52);

assert($deck instanceof \Cardofony\Deck);

// Feature 3.1
// récupérer les cartes et les compter
$cards = $deck->getCards();
assert(count($cards) == 52);

//Feature 3.2
// tirer une carte
$card = $deck->drawCard();
assert($card instanceof \Cardofony\Card);

$remaining_cards = $deck->getCards();
assert(count($cards) == 51);
