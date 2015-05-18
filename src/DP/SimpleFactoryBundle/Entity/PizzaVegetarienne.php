<?php

namespace DP\SimpleFactoryBundle\Entity;

use DP\SimpleFactoryBundle\Entity\AbstractClasses\Pizza;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza entity.
 *
 * @ORM\Table(name="pizza_vegetarienne")
 * @ORM\Entity()
 */
class PizzaVegetarienne extends Pizza
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
        $this->setNom("Pizza Végétarienne");
        $this->setPate("Crust");
        $this->setSauce("Sauce Marinara");
        $this->garnitures->add("Shredded mozzarella");
        $this->garnitures->add("Grated parmesan");
        $this->garnitures->add("Sliced mushrooms");
        $this->garnitures->add("Sliced red pepper");
        $this->garnitures->add("Sliced black olives");
    }
}
