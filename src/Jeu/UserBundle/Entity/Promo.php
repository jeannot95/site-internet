<?php

namespace Jeu\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity(repositoryClass="Jeu\UserBundle\Repository\PromoRepository")
 */
class Promo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="promo", type="integer")
     */
    private $promo;

    /**
     * @var int
     *
     * @ORM\Column(name="utilise", type="integer")
     */
    private $utilise = 0;

/* 	public function __construct()
	{
		$this->promo = new random_int('10000000','99999999');
		
	} */	
	
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set promo.
     *
     * @param int $promo
     *
     * @return Promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo.
     *
     * @return int
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set utilise.
     *
     * @param int $utilise
     *
     * @return Promo
     */
    public function setUtilise($utilise)
    {
        $this->utilise = $utilise;

        return $this;
    }

    /**
     * Get utilise.
     *
     * @return int
     */
    public function getUtilise()
    {
        return $this->utilise;
    }
}
