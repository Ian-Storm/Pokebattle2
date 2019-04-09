<?php

class Weakness {
	private $type;
	private $multiplier;

	public function __construct($type, $multiplier)
	 {
	 	$this->type = $type;
	 	$this->multiplier = $multiplier;
	 }

	public function getWeakness() {
		return $this->type;
	}

	public function getWeaknessMultiplier() {
		return $this->multiplier;
	}
}