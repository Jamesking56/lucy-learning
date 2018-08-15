<?php

require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Goat.php';

abstract class Pet {

    private $owner;

    public function __construct($owner)
    {
        $this->owner = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public abstract function makeNoise();
}

$cat = new Cat("dave");
echo $cat->getOwner();
$cat2 = new Cat("jimbo");