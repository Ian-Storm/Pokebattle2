<?php

class Pokemon {
	private $name;
	private $type;
	private $health;
	private $attacks;
	private $weakness;
	private $resistance;

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

    public function attack($other){
        $attack = $this->getAttack();
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

    private function calculation($dmg, $other){
    	$other->health -= $dmg;
    }

    public function getHealth(){
        return $this->health;
    }

    public function getAttack(){
        return $this->attacks[1];
    }

    private function setHealth($health){
        $this->health = $health;
    }

}