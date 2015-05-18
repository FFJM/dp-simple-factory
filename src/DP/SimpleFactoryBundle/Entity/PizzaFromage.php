<?php

namespace DP\SimpleFactoryBundle\Entity;

use DP\SimpleFactoryBundle\Entity\AbstractClasses\Pizza;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza entity.
 *
 * @ORM\Table(name="pizza_fromage")
 * @ORM\Entity()
 */
class PizzaFromage extends Pizza
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
        $this->setNom("Pizza Fromage");
        $this->setPate("Pâte fine");
        $this->setSauce("Sauce Marinara");
        $this->garnitures->add("Parmesan");
        $this->garnitures->add("Mozarella");
    }
}
