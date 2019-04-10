<?php

class Charmeleon extends Pokemon
{

    public function __construct($name)
    {
        $type = new Type('Fire');
        $attacks = array(new attack('Headbutt', 10), new attack('Flare', 30));
        $weakness = new Weakness('Water', 2);
        $resistance = new Resistance('Lightning', 10);

        parent::__construct($name, $type, 60, $attacks, $weakness, $resistance);
    }
}
