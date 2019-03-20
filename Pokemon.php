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

	 public function __toString() {
        return json_encode($this);
    }

    function attack($attack, $other){
    	$dmg = $attack->dmg;

    	//if type attacker = weakness other then dmg x weakness multiplier
    	if ($this->type->type == $other->weakness->type) {
    	//dmg x weakness multiplier
    		$dmg = $attack->dmg * $other->weakness->multiplier;
    	} elseif ($this->type->type == $other->resistance->type) {
    		//dmg x resistance 
    		$dmg = $attack->dmg - $other->resistance->value;
    	}  
    	$this->calculation($dmg, $other);
    } 

    function calculation($dmg, $other){
    	$other->health -= $dmg;
    }

}