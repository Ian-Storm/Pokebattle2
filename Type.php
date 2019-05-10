<?php

class Type
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
    * getting the type of the pokemon that is attacked
    *
    * @return $this->type
    */
    public function getType()
    {
        return $this->type;
    }
}
