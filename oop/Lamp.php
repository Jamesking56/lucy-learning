<?php

class Lamp
{
    // Fields
    private $colour;

    private $status = false;

    // Constructor
    public function __construct($colour)
    {
        $this->colour = $colour;
    }

    // Methods
    public function switchOn() {
        echo "Switched on!";
        $this->status = true;
    }

    public function switchOff() {
        $this->status = false;
    }

    public function getColour() {
        return $this->colour;
    }

    public function setColour($colour) {
        $this->colour = $colour;
    }
}

$lamp1 = new Lamp("black");
$lamp1->switchOn();
$lamp2 = new Lamp("red");
$lamp2->switchOn();