<?php

namespace DP\SimpleFactoryBundle\Entity;

use DP\SimpleFactoryBundle\Entity\AbstractClasses\Pizza;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza entity.
 *
 * @ORM\Table(name="pizza_fruits_mer")
 * @ORM\Entity()
 */
class PizzaFruitsDeMer extends Pizza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
        $this->setNom("Pizza Fruits de mer");
        $this->setPate("Pâte fine");
        $this->setSauce("White garlic sauce");
        $this->garnitures->add("Clams");
        $this->garnitures->add("Grated parmesan cheese");
    }
}
