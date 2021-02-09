<?php


class Princesse extends Personnage {

    private Bool $saved;

    public function __construct($x = 450, $y = 450){
        $this->x = $x;
        $this->y = $y;
        $this->saved = false;
    }

}