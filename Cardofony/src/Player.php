<?php

namespace Cardofony;

class Player{
  //une implementation générale de ce qu'est un jouer dans mon moteur
  protected $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function getName(){
    return "Julien";
  }
}

