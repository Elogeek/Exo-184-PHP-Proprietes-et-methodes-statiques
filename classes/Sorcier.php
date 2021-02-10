<?php

class Sorcier extends Personnage {

    protected static int $sorcier = 0;

    public function __construct() {
      parent::__construct();
        $this->x = 125;
        $this->y = 125;
    }

    //add sorciers
    public static function addSorcier() {
        self::$sorcier++;
    }

}