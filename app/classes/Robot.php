<?php

class Robot implements RobotInterface
{
    protected $weight, $speed, $height;
    
    function getWeight()
    {
        return $this->weight;
    }
    function getSpeed()
    {
        return $this->speed;
    }
    function getHeight()
    {
        return $this->weight;
    }

}
