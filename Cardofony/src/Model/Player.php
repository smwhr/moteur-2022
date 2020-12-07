<?php

namespace Cardofony\Model;

class Player{
  //une implementation générale de ce qu'est un jouer dans mon moteur
  protected $name;

  public function __construct($name){
    $this->name = $name;
  }
}

