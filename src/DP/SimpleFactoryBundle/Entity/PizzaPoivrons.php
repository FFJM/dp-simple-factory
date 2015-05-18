<?php

namespace DP\SimpleFactoryBundle\Entity;

use DP\SimpleFactoryBundle\Entity\AbstractClasses\Pizza;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza entity.
 *
 * @ORM\Table(name="pizza_poivrons")
 * @ORM\Entity()
 */
class PizzaPoivrons extends Pizza
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
        $this->setNom("Pepperoni Pizza");
        $this->setPate("Pâte fine");
        $this->setSauce("Sauce Marinara");
        $this->garnitures->add("Sliced Pepperoni");
        $this->garnitures->add("Sliced Onion");
        $this->garnitures->add("Grated parmesan cheese");
    }
}
