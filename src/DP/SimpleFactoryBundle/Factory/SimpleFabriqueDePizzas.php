<?php

namespace DP\SimpleFactoryBundle\Factory;

use DP\SimpleFactoryBundle\Entity\PizzaFromage;
use DP\SimpleFactoryBundle\Entity\PizzaPoivrons;
use DP\SimpleFactoryBundle\Entity\PizzaFruitsDeMer;
use DP\SimpleFactoryBundle\Entity\PizzaVegetarienne;

class SimpleFabriqueDePizzas
{
    /**
     * Fabrique de pizza
     * @param type $type
     * @param array $options
     * @return Pizza
     * @todo Mettre de la généricité $Pizzaclass = new Pizzaxxxx
     */
    public static function creerPizza($type,$options = array())
    {       
        switch ($type) {
            case 'fromage':
                $pizza = new PizzaFromage($options);
                break;
            case 'poivrons':
                $pizza = new PizzaPoivrons($options);
                break;
            case 'fruitsDeMer':
                $pizza = new PizzaFruitsDeMer($options);
                break;
            case 'vegetarienne':
                $pizza = new PizzaVegetarienne($options);
                break;              
            default:
                $pizza = null;
                break;
        }
        return $pizza;
    }

}