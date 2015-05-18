<?php

namespace DP\SimpleFactoryBundle\Client;

use DP\SimpleFactoryBundle\Factory\SimpleFabriqueDePizzas;

class Pizzeria
{
    /**
     * var \DP\SimpleFactoryBundle\Factory\SimpleFabriqueDePizzas
     *
     */
    private $fabrique;

    public function __construct(SimpleFabriqueDePizzas $fabrique)
    {
        $this->fabrique = $fabrique;
    }

    public function commanderPizza($type)
    {
        $pizza = $this->fabrique->creerPizza($type);
        
        return $pizza;
    }

}