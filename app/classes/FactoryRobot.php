<?php
class FactoryRobot
{
    protected $methods;

    public function addType(RobotInterface $robot)
    {
        $robotType = get_class($robot);
        $this->methods["create$robotType"] = $robot;
    }

    public function __call($name, $args)
    {
        if(!isset($this->methods[$name])){
            throw new Exception("This type is not exist");
        }else{
            $objects = [];
            if(!empty($args)){
                for ($i = 0; $i < $args[0]; $i++) {
                    $objects[] = clone($this->methods[$name]);
               }
            }else{
                $objects[] = clone($this->methods[$name]);
            }
        }
        return $objects;
    }
    
}
