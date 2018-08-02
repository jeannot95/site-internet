<?php

namespace Jeu\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicJeu
 *
 * @ORM\Table(name="public_jeu")
 * @ORM\Entity(repositoryClass="Jeu\ArticleBundle\Repository\PublicJeuRepository")
 */
class PublicJeu
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

	/**
	* @ORM\OneToMany(targetEntity="Jeu\ArticleBundle\Entity\Article", mappedBy="publicJeu")
	*/
	private $articles;
	
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
     * Set name
     *
     * @param string $name
     *
     * @return PublicJeu
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \Jeu\ArticleBundle\Entity\Article $article
     *
     * @return PublicJeu
     */
    public function addArticle(\Jeu\ArticleBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Jeu\ArticleBundle\Entity\Article $article
     */
    public function removeArticle(\Jeu\ArticleBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
