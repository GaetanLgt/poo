<?php

class Character 
{
    public $name;
    public $vie = 100;
    private $warcry; 
    
    public function __construct(string $name,string $warcry)
    {
        $this->name = $name;
        $this->warcry = $warcry;
    }

    public function getWarcry()
    {
        return $this->warcry;
    }
    public function isAlive()
    {   if($this->vie <=0)
        {
            $name = $this->name;
        return ($name ." est mort");
        };
    }
}   
