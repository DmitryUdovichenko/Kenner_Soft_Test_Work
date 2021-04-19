<?php
class MergeRobot implements RobotInterface 
{
    protected $robots = [];

    public function addRobot($robots)
    {    
        if(!is_array($robots)){
            $robots = [$robots];
        }
        foreach ($robots as $robot) {
            if(!($robot instanceof RobotInterface)){
                throw new Exception("This is not Robot");
            }
        } 
        $this->robots = array_merge($this->robots,$robots);
    }

    public function getWeight()
    {
        return array_sum(array_map(function ($robot) {
            return $robot->getWeight();
        }, $this->robots));
    }

    public function getSpeed()
    {
        return min(array_map(function ($robot) {
            return $robot->getSpeed();
        }, $this->robots));
    }

    public function getHeight()
    {
        return array_sum(array_map(function ($robot) {
            return $robot->getHeight();
        }, $this->robots));
    }

}
