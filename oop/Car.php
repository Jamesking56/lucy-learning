<?php

class Car extends Vehicles {
    public function setOwner($owner){
      
        parent::setOwner($owner);
    }
    public function wheels(){
        echo '4 Wheels';
    }
}
 