<?php

class personnage
{

    public function __getHealth()
    {
        return $this->_health;
    }
    public function __getExp()
    {
        return $this->_exp;
    }
    public function setDamage($perso2)
    {
        $perso2->_health -= $this->_force;
        if(!$perso2->_health){
            $this->_exp = $this->_exp + 1;
            unset($Monsters->_faction);
        }
    }

}

class dwarf extends personnage
{
    protected $_faction;
    protected $_health = 450;
    protected $_force = 400;
    protected $_spec;
    protected $_damage;
    protected $_exp = 1;
}

class black_mage extends personnage 
{
    protected $_faction;
    protected $_health = 400;
    protected $_force = 200;
    protected $_spec;
    protected $_damage;
    protected $_exp = 1;
}

$Heroes = [];
$Heroes[] = new dwarf();

$Monsters = [];
$Monsters[] = new black_mage();

echo $Heroes[0]->__getExp()." ";
echo $Monsters[0]->__getHealth()." ";
$Heroes[0]->setDamage($Monsters[0]);
echo $Monsters[0]->__getHealth()." "."<br/>";
echo $Heroes[0]->__getExp()." ";
echo $Heroes[0]->__getHealth()." ";
$Monsters[0]->setDamage($Heroes[0]);
echo $Heroes[0]->__getHealth();

var_dump($Monsters);
// echo $this->_faction." ".$this->_force." ".$this->_health." ".$this->_spec."<br/>";

  




?> 