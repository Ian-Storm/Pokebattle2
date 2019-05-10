<?php

class Weakness
{
    private $type;
    private $multiplier;

    public function __construct($type, $multiplier)
    {
        $this->type = $type;
        $this->multiplier = $multiplier;
    }

    /**
    * getting the weakness of the pokemon that is attacked
    *
    * @return $this->type
    */
    public function getWeakness()
    {
        return $this->type;
    }

    /**
    * getting the value of the multiplier of the weakness
    *
    * @return $this->muliplier
    */
    public function getWeaknessMultiplier()
    {
        return $this->multiplier;
    }
}
