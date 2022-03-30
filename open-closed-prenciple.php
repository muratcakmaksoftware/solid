<?php

//Open Closed Principle
abstract class Wing
{
    public abstract function flap();
}

class Car extends Wing
{
    private $name;
    private $weight;

    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Değişime kapalı
     */
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
     * Gelişime açık
     */
    public function flap()
    {
        echo 'Car flapped its wings';
    }
}

class Bird extends Wing
{
    private $weight;

    /**
     * Değişime kapalı
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Gelişime açık
     */
    public function flap()
    {
        echo 'Bird flapped its wings';
    }
}

$car = new Car('Murat131');
echo $car->flap().'<br/>';

$bird = new Bird();
$bird->flap();