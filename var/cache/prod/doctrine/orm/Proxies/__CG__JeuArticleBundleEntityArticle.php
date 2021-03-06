<?php

namespace Proxies\__CG__\Jeu\ArticleBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \Jeu\ArticleBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'prix', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'dateDeSortie', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'dateEnregistrement', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'ageMin', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'ageMax', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'duree', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'nbJoueurMin', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'nbJoueurMax', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'publicJeu'];
        }

        return ['__isInitialized__', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'prix', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'dateDeSortie', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'dateEnregistrement', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'ageMin', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'ageMax', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'duree', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'nbJoueurMin', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'nbJoueurMax', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'Jeu\\ArticleBundle\\Entity\\Article' . "\0" . 'publicJeu'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeSortie($dateDeSortie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeSortie', [$dateDeSortie]);

        return parent::setDateDeSortie($dateDeSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeSortie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeSortie', []);

        return parent::getDateDeSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMin($ageMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMin', [$ageMin]);

        return parent::setAgeMin($ageMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMin', []);

        return parent::getAgeMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMax($ageMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMax', [$ageMax]);

        return parent::setAgeMax($ageMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMax', []);

        return parent::getAgeMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', [$duree]);

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', []);

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbJoueurMin($nbJoueurMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbJoueurMin', [$nbJoueurMin]);

        return parent::setNbJoueurMin($nbJoueurMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbJoueurMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbJoueurMin', []);

        return parent::getNbJoueurMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbJoueurMax($nbJoueurMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbJoueurMax', [$nbJoueurMax]);

        return parent::setNbJoueurMax($nbJoueurMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbJoueurMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbJoueurMax', []);

        return parent::getNbJoueurMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Jeu\ArticleBundle\Entity\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Jeu\ArticleBundle\Entity\Categorie $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Jeu\ArticleBundle\Entity\Categorie $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicJeu(\Jeu\ArticleBundle\Entity\PublicJeu $publicJeu = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicJeu', [$publicJeu]);

        return parent::setPublicJeu($publicJeu);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicJeu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicJeu', []);

        return parent::getPublicJeu();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEnregistrement($dateEnregistrement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEnregistrement', [$dateEnregistrement]);

        return parent::setDateEnregistrement($dateEnregistrement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEnregistrement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEnregistrement', []);

        return parent::getDateEnregistrement();
    }

}
