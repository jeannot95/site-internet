<?php

namespace Jeu\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="jeu_user")
 * @ORM\Entity(repositoryClass="Jeu\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	*@ORM\OneToMany(targetEntity="Jeu\UserBundle\Entity\Commande", mappedBy="user", cascade={"remove"})
	*@ORM\JoinColumn(nullable=true)
	*/
	private $commandes;
	
	/**
	*@ORM\OneToMany(targetEntity="Jeu\UserBundle\Entity\UserAdresses", mappedBy="user", cascade={"remove"})
	*@ORM\JoinColumn(nullable=true)
	*/
	private $adresses;	

	public function __construct()
	{
		$this->commandes = new ArrayCollection();
		$this->adresses = new ArrayCollection();
	}		
	
    /**
     * Add commande
     *
     * @param \Jeu\UserBundle\Entity\Commande $commande
     *
     * @return User
     */
    public function addCommande(\Jeu\UserBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Jeu\UserBundle\Entity\Commande $commande
     */
    public function removeCommande(\Jeu\UserBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adress
     *
     * @param \Jeu\UserBundle\Entity\UtilisateurAdresses $adress
     *
     * @return User
     */
    public function addAdress(\Jeu\UserBundle\Entity\UserAdresses $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \Jeu\UserBundle\Entity\UtilisateurAdresses $adress
     */
    public function removeAdress(\Jeu\UserBundle\Entity\UserAdresses $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
