<?php

class Robot1 extends Robot 
{
    function __construct(int $weight = NULL,int $height= NULL,int $speed= NULL ) {
        $this->weight = !is_null($weight) ? $weight : rand(10,100);
        $this->height = !is_null($height) ? $height : rand(10,100);
        $this->speed = !is_null($speed) ? $speed : rand(10,100);
    }
    
    public function __clone() {
        $this->weight = !is_null($weight) ? $weight : rand(10,100);
        $this->height = !is_null($height) ? $height : rand(10,100);
        $this->speed = !is_null($speed) ? $speed : rand(10,100);
    }
}
