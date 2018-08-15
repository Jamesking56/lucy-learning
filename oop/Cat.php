<?php

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