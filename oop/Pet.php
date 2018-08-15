<?php

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

class Cat extends Pet {

    public function setOwner($owner) {
        if ($owner !== 'jeff') {
            throw new Exception('You cant own a cat unless you are jeff');
        }

        parent::setOwner($owner);
    }

    public function makeNoise()
    {
        echo 'MEOWWWW!';
    }
}

class Dog extends Pet {

    public function makeNoise()
    {
        echo "BARK!";
    }
}

class Goat extends Pet {

    public function makeNoise()
    {
        // TODO: Implement makeNoise() method.
    }
}

$cat = new Cat("dave");
echo $cat->getOwner();
$cat2 = new Cat("jimbo");