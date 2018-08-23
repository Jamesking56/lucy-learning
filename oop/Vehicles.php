<?php

require_once "Car.php";
require_once "Bike.php";

abstract class Vehicles {
    private $owner;
    
    public function __construct($owner){
        $this->owner = $owner;
    }
    
    public function getOwner(){
        return $this->owner;
    } 
    public function setOwner($owner){
        $this->owner = $owner;
    }
    
    public abstract function wheels();
}

$car = new car('Lucy');
echo $car->getOwner();
$bike = new bike('James');
echo $bike->getOwner();
echo $bike->wheels();