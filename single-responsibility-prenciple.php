<?php

//Single Responsibility Principle
class Car
{
    private $name;
    private $weight;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Bir araç kanat çırpamaz ve kanat çırpmak bir aracın görevi değildir.
     * Bu yüzden tek sorumluluk ilkesine aykırıdır.
     */
    public function flap()
    {

    }
}

class Murat131 extends Car {
    function __construct()
    {
        parent::__construct(__CLASS__);
    }
}

$murat131 = new Murat131();
echo $murat131->getName();