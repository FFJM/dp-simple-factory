<?php

namespace DP\SimpleFactoryBundle\Entity\AbstractClasses;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class Pizza
{

    public function __construct()
    {
        $this->garnitures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var string $nom
     * @ORM\Column(name="nom", type="string",length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @var string $pate
     * @ORM\Column(name="pate", type="string",length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $pate;

    /**
     * @var string $sauce
     * @ORM\Column(name="sauce", type="string",length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $sauce;
    
    /**
     * @var array
     *
     * @ORM\Column(name="garnitures", type="simple_array")
     */
    protected $garnitures;
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return Pizza
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pate
     *
     * @param string $pate
     * @return Pizza
     */
    public function setPate($pate)
    {
        $this->pate = $pate;

        return $this;
    }

    /**
     * Get pate
     *
     * @return string 
     */
    public function getPate()
    {
        return $this->pate;
    }

    /**
     * Set sauce
     *
     * @param string $sauce
     * @return Pizza
     */
    public function setSauce($sauce)
    {
        $this->sauce = $sauce;

        return $this;
    }

    /**
     * Get sauce
     *
     * @return string 
     */
    public function getSauce()
    {
        return $this->sauce;
    }
    
    /**
     * Set garnitures
     *
     * @param array $garnitures
     * @return Pizza
     */
    public function setGarnitures($garnitures)
    {
        $this->garnitures = $garnitures;

        return $this;
    }

    /**
     * Get garnitures
     *
     * @return array 
     */
    public function getGarnitures()
    {
        return $this->garnitures;
    }

    public function cuire()
    {
        return "Cuisson 25 minutes à 180°";
    }

    public function couper()
    {
        return "Découpage en parts triangulaires";
    }

    public function emballer()
    {
        return "Emballage dans une boîte officielle";
    }

}