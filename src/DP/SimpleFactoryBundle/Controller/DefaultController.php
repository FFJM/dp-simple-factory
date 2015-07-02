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
        $errors = array();
        $pizzeria = new Pizzeria();
        $typesPizza = array('fromage', 'poivrons', 'fruitsDeMer', 'vegetarienne');

        foreach ($typesPizza as $type) {
            try {
                $pizzas[] = $pizzeria->commanderPizza($type);               
            } catch (\Exception $exc) {
                $errors[] = $exc->getMessage();
            }
        }
        
        return $this->render(
                        'DPSimpleFactoryBundle:Default:index.html.twig',
                         array('pizzas' => $pizzas,
                               'errors' => $errors,)
                        );
    }

}