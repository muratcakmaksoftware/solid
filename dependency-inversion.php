<?php

//Dependency Inversion Principle

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
}

/**
 * Üst sınıfla alt sınıfın bağımlılığını kaldırmak için soyutlama yapıldı.
 * Burada araba üreticisinin kullanıldığı sınıflar alt sınıflardır.
 */
interface CarManufacturer
{
    public function produce();
}

/**
 * Alt sınıf
 */
class Murat131 extends Car implements CarManufacturer
{
    function __construct()
    {
        parent::__construct(__CLASS__);
    }

    /**
     * Bir aracın üretimi kendine göre değişebilir.
     */
    public function produce()
    {
        echo 'Murat131 produced';
    }
}

/**
 * Alt sınıf
 */
class Mitsubishi extends Car implements CarManufacturer
{
    function __construct()
    {
        parent::__construct(__CLASS__);
    }

    public function produce()
    {
        echo 'Mitsubishi produced';
    }
}

/**
 * Üst sınıf
 */
class CarProductManager
{
    private $carMenufacturer;

    function __construct(CarManufacturer $carMenufacturer)
    {
        $this->carMenufacturer = $carMenufacturer;
    }

    public function produce()
    {
        $this->carMenufacturer->produce();
    }
}

$murat131 = new Murat131();
$carProductManager = new CarProductManager($murat131);
$carProductManager->produce();
echo '<br/>';

$mitsubishi = new Mitsubishi();
$carProductManager = new CarProductManager($mitsubishi);
$carProductManager->produce();