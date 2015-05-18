<?php

namespace DP\SimpleFactoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DP\SimpleFactoryBundle\Factory\SimpleFabriqueDePizzas;
use DP\SimpleFactoryBundle\Client\Pizzeria;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="simple_factory")
     * @Template()
     */
    public function indexAction()
    {
        $pizzas = array();
        $simpleFabriqueDePizzas = new SimpleFabriqueDePizzas();
        $pizzeria = new Pizzeria($simpleFabriqueDePizzas);
        $typesPizza = array('fromage', 'poivrons', 'fruitsDeMer', 'vegetarienne');

        foreach ($typesPizza as $type) {
            $pizzas[] = $pizzeria->commanderPizza($type);
        }
        return array('pizzas' => $pizzas);
    }

}