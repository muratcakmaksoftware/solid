<?php

//Liskov Substitution Principle
interface Wing
{
    public function flap();

    /**
     * Chicken class'ında tavuk uçamaz bu yüzden fly ayrı bir interface alınmıştır.
     */
    //public function fly();
}

interface FlyingWing
{
    public function fly();
}

class Bird implements Wing,FlyingWing
{
    public function flap()
    {
        echo 'Bird flapped its wings';
    }

    public function fly()
    {
        echo 'Bird flying';
    }
}

class Chicken implements Wing
{
    public function flap()
    {
        echo 'Chicken flapped its wings';
    }

    /**
     * Tavuk uçamaz bu yüzden hata fırlatılır ama bu liskov substitution prenciple uymaz.
     * Böyle bir durumda uçmak için ayrı bir interface oluşturup implements etmeliyiz.
     */
    /*public function fly()
    {
        throw new NotImplementedException();
    }*/
}

$bird = new Bird();
$bird->flap();
echo '<br/>';
$bird->fly();
echo '<br/>';

$chicken = new Chicken();
$chicken->flap();

