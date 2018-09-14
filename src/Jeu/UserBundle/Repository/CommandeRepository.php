<?php

namespace Jeu\UserBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CommandeRepository extends \Doctrine\ORM\EntityRepository
{
    public function byFacture($user,$page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.user = :user')
            ->andWhere('u.valider = 1')
            ->andWhere('u.reference != 0')
            ->orderBy('u.id','DESC')
            ->setParameter('user', $user)
			->getQuery();
		//return $qb->getQuery()->getResult();
		$qb
		  ->setFirstResult(($page-1) * $nbPerPage)
		  ->setMaxResults($nbPerPage)
		;
		return new Paginator($qb, true);
    }
    public function byDateCommand($date)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.date > :date')
            ->andWhere('u.valider = 1')
            ->orderBy('u.id')
            ->setParameter('date', $date);
        return $qb->getQuery()->getResult();
    }

	public function getCommandes($page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('a')
		  ->getQuery()
		;

		$query
		  // On définit l'annonce à partir de laquelle commencer la liste
		  ->setFirstResult(($page-1) * $nbPerPage)
		  // Ainsi que le nombre d'annonce à afficher sur une page
		  ->setMaxResults($nbPerPage)
		;

		// Enfin, on retourne l'objet Paginator correspondant à la requête construite
		// (n'oubliez pas le use correspondant en début de fichier)
		return new Paginator($query, true);
	} 	

	public function getMeilleur()
	{
		$qb = $this->createQueryBuilder('a');
		$qb
			->select('a.commande')
			->where('a.valider = 1')
			;
		
		
		return $qb
			->getQuery()
            ->getResult();	
	}		
	
}
