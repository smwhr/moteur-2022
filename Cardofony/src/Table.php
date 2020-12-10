<?php

namespace Cardofony;

class Table{
  private $player;

  public function addPlayer($player){
    $this->player = $player;
  }

  public function hasPlayer($player){
    return true;
  }

  public function getPlayers(){
    return [$this->player];
  }
}