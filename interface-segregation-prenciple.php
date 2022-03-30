<?php

//Interface Segregation Principle
interface Wing
{
    public function flap();
}

interface FlyingWing
{
    public function fly();
}

interface Live
{
    public function eat();

    public function walk();
}

class Bird implements Live,Wing,FlyingWing
{
    public function walk()
    {
        echo 'Bird walking';
    }

    public function eat()
    {
        echo 'Bird eating';
    }

    public function flap()
    {
        echo 'Bird flapped its wings';
    }
    //Kuş uçabilir ama tavuk uçamaz bu yüzden onda fly metodu yoktur ve ona göre interface ayrılmıştır.
    public function fly()
    {
        echo 'Bird flying';
    }
}

class Chicken implements Live,Wing
{
    public function walk()
    {
        echo 'Chicken walking';
    }

    public function eat()
    {
        echo 'Chicken eating';
    }

    public function flap()
    {
        echo 'Chicken flapped its wings';
    }
}

$bird = new Bird();
$bird->walk();
echo '<br/>';
$bird->flap();
echo '<br/>';
$bird->fly();
echo '<br/>';

$chicken = new Chicken();
$chicken->walk();
echo '<br/>';
$chicken->flap();



