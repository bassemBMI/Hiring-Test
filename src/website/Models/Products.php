<?php
namespace SSENSE\HiringTest\Models;

class Products extends BaseModel
{
    const DEFAULT_RESULTS_PER_PAGE = 10;
    /**
     * Name of the table to use for the queries
     * 
     * @var string
     */
    protected $tableName = 'products';
    
    public function getCanadianProducts($parameters)
    {
        
        $limit = (!empty($parameters['limit'])) ? $parameters['limit'] : self::DEFAULT_RESULTS_PER_PAGE;
        $page = (!empty($parameters['page'])) ? $parameters['page'] : 1;
        $offset = $this->calculateOffset($limit, $page);
        
        $currencies = $this->em->createQueryBuilder('c')
                          ->select(array('p','px'))
                          ->from('SSENSE\HiringTest\Entity\Products','p')
                          ->leftJoin('p.stock','s')
                          ->leftJoin('p.price','px')
                          ->leftJoin('px.country','ct')
                          ->leftJoin('ct.currency','cur')
                          ->where('s.quantity > 0')
                          ->andWhere('cur.code = :code')
                          ->setParameter('code','CAD')
                          //->groupBy('px.id')
                          ->setMaxResults($limit)
                          ->setFirstResult($offset)
                          ->getQuery();
        
        return $currencies->getResult();
    }
}
