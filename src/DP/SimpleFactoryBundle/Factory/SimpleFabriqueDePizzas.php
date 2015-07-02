<?php

namespace DP\SimpleFactoryBundle\Factory;

class SimpleFabriqueDePizzas
{
    /**
     * @var string Namespace of the entities
     */
    const ENTITY_NAMESPACE = 'DP\SimpleFactoryBundle\Entity';
    /**
     * Fabrique de pizza
     * @param string $type
     * @param array $options
     * @return Pizza
     */
    public static function creerPizza($type,$options = array())
    {    
        $pizzaClassName = self::ENTITY_NAMESPACE . '\Pizza' . ucwords(strtolower($type));
        if(!class_exists($pizzaClassName)){
            throw new \Exception('Pizza ' . $type . ' is not defined.');
        }
        $pizza = new $pizzaClassName($options);
        return $pizza;
    }

}