<?php

namespace Cardofony;

class Cardofony{

  public static function newPlayer($name){
    return new \Cardofony\Player($name);
  }

  public static function newTable(){
    return new \Cardofony\Table();
  }
}