<?php

class Attack {
	public $attack;
	private $dmg;

	public function __construct($attack, $dmg)
	 {
	 	$this->attack = $attack;
	 	$this->dmg = $dmg;
	 }

	public function getAttackDmg() {
		return $this->dmg;
	}
}