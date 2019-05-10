<?php

class Resistance
{
    private $type;
    private $value;

    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    /**
    * getting the resistance of the pokemon that is attacked
    *
    * @return $this->type
    */
    public function getResistance()
    {
        return $this->type;
    }

    /**
    * getting the value of the resistance
    *
    * @return $this->value
    */
    public function getResistanceValue()
    {
        return $this->value;
    }

}
