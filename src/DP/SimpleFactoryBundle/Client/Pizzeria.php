<?php

namespace DP\SimpleFactoryBundle\Client;

use DP\SimpleFactoryBundle\Factory\SimpleFabriqueDePizzas;

class Pizzeria
{
    /**
     * Passage de commande
     * @param string $type Type de pizza
     * @param array $add ingredients à ajouter
     * @param array $subst ingredients à retirer
     * @return Pizza
     */
    public function commanderPizza($type,$add = array(),$subst = array())
    {
        $pizza = SimpleFabriqueDePizzas::creerPizza($type,array('add'   => $add,
                                                                 'subst'=> $subst));      
        return $pizza;
    }

}