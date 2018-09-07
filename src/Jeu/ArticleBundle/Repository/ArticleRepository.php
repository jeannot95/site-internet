<?php

namespace Jeu\ArticleBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
 	public function findByCriteria($catname,$pubjeu)
	{
		$qb = $this->createQueryBuilder('a');
		
		$qb
            ->innerJoin('a.categories', 'c')
            ->addSelect('c')
            ->innerJoin('a.publicJeu', 'd')
            ->addSelect('d')
            ->innerJoin('a.image', 'e')
            ->addSelect('e')
            // ->innerJoin('a.avis', 'b')
            // ->addSelect('b')			
			;
			
        $qb->where($qb->expr()->in('c.id', ':cat'))
			->setParameter('cat',$catname)
			//->orWhere($qb->expr()->in('d.id', $pubjeu))
			->orWhere($qb->expr()->in('d.id', ':pub'))
			->setParameter('pub',$pubjeu)
			;
        return $qb
			->getQuery()
            ->getArrayResult();						
	}

 	public function findCat($cat)
	{
		// $qb = $this->createQueryBuilder('c')
					// ->innerJoin('c.categories', 'a')		
					// ->where('c.categories= :categories')
					// ->setParameter('categories', $cat);
		 
		// return $qb->getQuery()
				  // ->getArrayResult();
		 $qb = $this->createQueryBuilder('a');
		
		$qb
            ->innerJoin('a.categories', 'c')
			->addSelect('c')
			->where($qb->expr()->in('c.id', $cat) );
				return $qb->getQuery()
						->getArrayResult();			
	} 
	
 	public function findPub($pub)
	{
		$qb = $this->createQueryBuilder('c')      
					->where('c.publicJeu= :publicJeu')
					->setParameter('publicJeu', $pub);
		 
		return $qb->getQuery()
				  ->getArrayResult();						
	} 	
	
	public function suggestion($id,$cat){
		$qb = $this->createQueryBuilder('a');
		$qb
					->innerJoin('a.categories', 'c')
					->addSelect('c')
					->innerJoin('a.image', 'd')
					->addSelect('d')					
					->where($qb->expr()->not($qb->expr()->eq('a.id', $id)))
					->andwhere($qb->expr()->in('c.id', ':cat'))
					->setParameter('cat',$cat)
					->setMaxResults(3);
		return $qb->getQuery()
			->getResult();	
	}
	
	public function getJeux($page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('a')
			->leftJoin('a.image', 'i')
			->addSelect('i')
			->leftJoin('a.categories', 'c')
			->addSelect('c')
			->leftJoin('a.publicJeu', 'd')
			->addSelect('d')
			// ->leftJoin('a.publicJeu', 'd')
			// ->addSelect('d')
			->orderBy('a.dateDeSortie', 'DESC')
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
	
	public function findArray($array)
	{
		$qb = $this->createQueryBuilder('a');
		$qb
			->Select('a')
			->Where($qb->expr()->in('a.id', ':array'))
			->setParameter('array', $array);
			
		return 	$qb->getQuery()->getResult();
	}	

    public function recherche($chaine,$page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('u');
            $qb->select('u')
            ->where($qb->expr()->like('u.titre', ':chaine'))
            ->orderBy('u.id')
            ->setParameter('chaine', '%'.$chaine.'%');
			$qb 
			->setFirstResult(($page-1) * $nbPerPage)
			->setMaxResults($nbPerPage)
		;
        //return $qb->getQuery()->getResult();
		return new Paginator($qb, true);
    }
	
    public function RandomProducts($nbProduits, $categorie)
    {
        $qbList=$this->createQueryBuilder('u');
        // get all the relevant id's from the entity
        $qbList ->select('u')
			->leftJoin('u.categories', 'b')
			->addSelect('b')
            ->where($qbList->expr()->in('b.id', ':categorie'))
            ->setParameter('categorie', $categorie);
        // $list is not a simple list of values, but an nested associative array
        $list=$qbList->getQuery()->getScalarResult();
        $qbcount=$this->createQueryBuilder('c')
			->select('c')
            ->addselect('COUNT(c)')
			->leftJoin('c.categories', 'd')
			->addSelect('d')
            ->where('d.id = :categorie')
            ->setParameter('categorie', $categorie)
            ->getQuery()
            ->getSingleScalarResult();
        // get rid of the nested array from ScalarResult
        $rawlist=array();
        foreach ($list as $keyword=>$value)
        {
            // entity id's have to figure as keyword as array_rand() will pick only keywords - not values
            $id=$value['id'];
            $rawlist[$id]=null;
        }
        if ($qbcount >= $nbProduits)
        {
            $nbSlotsOnPage = 4;
        }else{
            $nbSlotsOnPage = $qbcount;
        }
        $total=min($nbSlotsOnPage,count($rawlist));
        // pick only a few (i.e.$total)
        $keylist=array_rand($rawlist,$total);
        $qb=$this->createQueryBuilder('uw');
        if (is_array($keylist))
        {
            foreach ($keylist as $keyword=>$value)
            {
                $qb ->setParameter('keyword'.$keyword,$value)
                    ->orWhere('uw.id = :keyword'.$keyword)
                ;
            }
        }else{
            $qb ->setParameter('keyword'.$keylist, $keylist)
                ->Where('uw.id = :keyword'.$keylist)
            ;
        }
        $result=$qb->getQuery()->getResult();
        // if mixing the results is also required (could also be done by orderby rand();
        shuffle($result);
        return $result;
    }
	
 	public function getImage()
	{
		$qb = $this->createQueryBuilder('a');
		$qb
			->leftJoin('a.image','u')
			->addSelect('u');		
		return $qb
			->getQuery()
            ->getResult();	
	}	 
	
}
















