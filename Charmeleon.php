<?php

class Charmeleon extends Pokemon
{

    public function __construct($name)
    {
        $type = new Type('Fire');
        $attacks = array(new Attack('Headbutt', 10), new Attack('Flare', 30));
        $weakness = new Weakness('Water', 2);
        $resistance = new Resistance('Lightning', 10);

        parent::__construct($name, $type, 60, $attacks, $weakness, $resistance);
    }
}
