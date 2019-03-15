<?php

class Pokemon {
	public $name;
	public $type;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	 public function __construct($name, $type, $hp, $attacks, $weakness, $resistance)
	 {
	 	$this->name = $name;
        $this->type = $type;
        $this->hp = $hp;
        $this->health = $hp;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
	 }

}