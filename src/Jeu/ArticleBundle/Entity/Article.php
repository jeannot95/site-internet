<?php

namespace Jeu\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Jeu\ArticleBundle\Repository\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Article
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_sortie", type="datetime")
     */
    private $dateDeSortie;
	
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime")
     */
    private $dateEnregistrement;	

    /**
     * @var int
     *
     * @ORM\Column(name="age_min", type="integer")
     */
    private $ageMin;

    /**
     * @var int
     *
     * @ORM\Column(name="age_max", type="integer")
     */
    private $ageMax;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_joueur_min", type="integer")
     */
    private $nbJoueurMin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_joueur_max", type="integer")
     */
    private $nbJoueurMax;

	/**
	* @ORM\OneToOne(targetEntity="Jeu\ArticleBundle\Entity\Image", cascade={"persist", "remove"})
	* @Assert\Valid()
	*/
	private $image;

	/**
	* @ORM\ManyToMany(targetEntity="Jeu\ArticleBundle\Entity\Categorie", cascade={"persist"})
	* 
	*/
	private $categories;

	/**
	* @ORM\ManyToOne(targetEntity="Jeu\ArticleBundle\Entity\PublicJeu", inversedBy="articles", cascade={"persist"})
	* 
	*/
	private $publicJeu;
	
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateDeSortie
     *
     * @param \DateTime $dateDeSortie
     *
     * @return Article
     */
    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;

        return $this;
    }

    /**
     * Get dateDeSortie
     *
     * @return \DateTime
     */
    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }

    /**
     * Set ageMin
     *
     * @param integer $ageMin
     *
     * @return Article
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    /**
     * Get ageMin
     *
     * @return int
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * Set ageMax
     *
     * @param integer $ageMax
     *
     * @return Article
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * Get ageMax
     *
     * @return int
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Article
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set nbJoueurMin
     *
     * @param integer $nbJoueurMin
     *
     * @return Article
     */
    public function setNbJoueurMin($nbJoueurMin)
    {
        $this->nbJoueurMin = $nbJoueurMin;

        return $this;
    }

    /**
     * Get nbJoueurMin
     *
     * @return int
     */
    public function getNbJoueurMin()
    {
        return $this->nbJoueurMin;
    }

    /**
     * Set nbJoueurMax
     *
     * @param integer $nbJoueurMax
     *
     * @return Article
     */
    public function setNbJoueurMax($nbJoueurMax)
    {
        $this->nbJoueurMax = $nbJoueurMax;

        return $this;
    }

    /**
     * Get nbJoueurMax
     *
     * @return int
     */
    public function getNbJoueurMax()
    {
        return $this->nbJoueurMax;
    }
	
	public function setImage(Image $image = null)
	{
	$this->image = $image;
	}

	public function getImage()
	{
	return $this->image;
	}	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
		$this->dateEnregistrement = new \Datetime();
    }

    /**
     * Add category
     *
     * @param \Jeu\ArticleBundle\Entity\Categorie $category
     *
     * @return Article
     */
    public function addCategory(\Jeu\ArticleBundle\Entity\Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Jeu\ArticleBundle\Entity\Categorie $category
     */
    public function removeCategory(\Jeu\ArticleBundle\Entity\Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set publicJeu
     *
     * @param \Jeu\ArticleBundle\Entity\PublicJeu $publicJeu
     *
     * @return Article
     */
    public function setPublicJeu(\Jeu\ArticleBundle\Entity\PublicJeu $publicJeu = null)
    {
        $this->publicJeu = $publicJeu;

        return $this;
    }

    /**
     * Get publicJeu
     *
     * @return \Jeu\ArticleBundle\Entity\PublicJeu
     */
    public function getPublicJeu()
    {
        return $this->publicJeu;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Article
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
}
