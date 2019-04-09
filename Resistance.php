<?php

class Resistance {
	private $type;
	private $value;

	public function __construct($type, $value)
	 {
	 	$this->type = $type;
	 	$this->value = $value;
	 }

	public function getResistance() {
		return $this->type;
	}

	public function getResistanceValue() {
		return $this->value;
	}

}