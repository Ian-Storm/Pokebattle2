<?php

class Pokemon
{
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

    /**
    * this gets the attack that is used of the pokemon and applies weakness or resistance when neccesary 
    *
    * @param pokemon $pokemon
    */
    public function attack($pokemon)
    {
        $attack = $this->getAttack();
        $dmg = $attack->getAttackDmg();

        /** if type attacker = weakness pokemon then dmg x weakness multiplier */
        if ($this->type->getType() == $pokemon->weakness->getWeakness()) {
            /** dmg x weakness multiplier */
            $dmg = $attack->getAttackDmg() * $pokemon->weakness->getWeaknessMultiplier();
        } elseif ($this->type->getType() == $pokemon->resistance->getResistance()) {
            /** dmg x resistance value */
            $dmg = $attack->getAttackDmg() - $pokemon->resistance->getResistanceValue();
        }
        $this->calculation($dmg, $pokemon);
    }

    /**
    * calculating the pokemon health after the damage it would have taken
    *
    * @param dmg $dmg
    * @param pokemon $pokemon
    */
    private function calculation($dmg, $pokemon)
    {
        $pokemon->health -= $dmg;
    }

    /**
    * getting the health of the pokemon
    *
    * @return $this->health
    */
    public function getHealth()
    {
        return $this->health;
    }

    /**
    * getting the attack of the pokemon
    *
    * @return $this->attacks[1]
    */
    public function getAttack()
    {
        return $this->attacks[1];
    }

    /**
    * setting the health of the pokemon
    *
    * @return $this->health
    */
    private function setHealth($health)
    {
        $this->health = $health;
    }

}