<?php

namespace Jeu\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristiques
 *
 * @ORM\Table(name="caracteristiques")
 * @ORM\Entity(repositoryClass="Jeu\ArticleBundle\Repository\CaracteristiquesRepository")
 */
class Caracteristiques
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
     * @ORM\Column(name="tactique", type="integer")
     */
    private $tactique;

    /**
     * @var int
     *
     * @ORM\Column(name="rejouabilite", type="integer")
     */
    private $rejouabilite;

    /**
     * @var int
     *
     * @ORM\Column(name="chance", type="integer")
     */
    private $chance;

    /**
     * @var int
     *
     * @ORM\Column(name="diplomatie", type="integer")
     */
    private $diplomatie;

    /**
     * @var int
     *
     * @ORM\Column(name="reflexion", type="integer")
     */
    private $reflexion;

    /**
     * @var int
     *
     * @ORM\Column(name="difficulte", type="integer")
     */
    private $difficulte;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tactique
     *
     * @param integer $tactique
     *
     * @return Caracteristiques
     */
    public function setTactique($tactique)
    {
        $this->tactique = $tactique;

        return $this;
    }

    /**
     * Get tactique
     *
     * @return int
     */
    public function getTactique()
    {
        return $this->tactique;
    }

    /**
     * Set rejouabilite
     *
     * @param integer $rejouabilite
     *
     * @return Caracteristiques
     */
    public function setRejouabilite($rejouabilite)
    {
        $this->rejouabilite = $rejouabilite;

        return $this;
    }

    /**
     * Get rejouabilite
     *
     * @return int
     */
    public function getRejouabilite()
    {
        return $this->rejouabilite;
    }

    /**
     * Set chance
     *
     * @param integer $chance
     *
     * @return Caracteristiques
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return int
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set diplomatie
     *
     * @param integer $diplomatie
     *
     * @return Caracteristiques
     */
    public function setDiplomatie($diplomatie)
    {
        $this->diplomatie = $diplomatie;

        return $this;
    }

    /**
     * Get diplomatie
     *
     * @return int
     */
    public function getDiplomatie()
    {
        return $this->diplomatie;
    }

    /**
     * Set reflexion
     *
     * @param integer $reflexion
     *
     * @return Caracteristiques
     */
    public function setReflexion($reflexion)
    {
        $this->reflexion = $reflexion;

        return $this;
    }

    /**
     * Get reflexion
     *
     * @return int
     */
    public function getReflexion()
    {
        return $this->reflexion;
    }

    /**
     * Set difficulte
     *
     * @param integer $difficulte
     *
     * @return Caracteristiques
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return int
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }
}
