<?php

namespace DP\SimpleFactoryBundle\Factory;

use DP\SimpleFactoryBundle\Entity\PizzaFromage;
use DP\SimpleFactoryBundle\Entity\PizzaPoivrons;
use DP\SimpleFactoryBundle\Entity\PizzaFruitsDeMer;
use DP\SimpleFactoryBundle\Entity\PizzaVegetarienne;

class SimpleFabriqueDePizzas
{

    public function creerPizza($type)
    {
        $pizza = null;

        if ("fromage" == $type) {
            $pizza = new PizzaFromage();
        } elseif ("poivrons" == $type) {
            $pizza = new PizzaPoivrons();
        } elseif ("fruitsDeMer" == $type) {
            $pizza = new PizzaFruitsDeMer();
        } else if ("vegetarienne" == $type) {
            $pizza = new PizzaVegetarienne();
        }
        return $pizza;
    }

}