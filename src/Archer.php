<?php
 class Archer extends Character 
 {
     public $power;

     public function __construct($name , $cri ,$power)
     {
         parent::__construct($name ,$cri );
         $this->power = $power;
     }

     public function rangeAttack($cible)
     {
        $cible->vie -= $this->power;
     }
 }