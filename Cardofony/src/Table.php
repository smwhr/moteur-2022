<?php

namespace Cardofony;

class Table{
  private $players = [];

  public function addPlayer($player){
    $this->players[] = $player;
  }

  public function hasPlayer($player){
    return in_array($player, $this->players);
  }

  public function getPlayers(){
    return $this->players;
  }
}