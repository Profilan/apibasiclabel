<?php
namespace Webshop\V1\Rest\Verkooporder;


use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ArraySerializable  as ArraySerializableHydrator;
use Zend\Stdlib\ArrayUtils;
use Traversable;
use InvalidArgumentException;
use Doctrine\Common\Collections\ArrayCollection;
use DoctrineModule\Paginator\Adapter\Collection;
use Application\Entity\MapperInterface;
use Zend\Filter\Word\UnderscoreToCamelCase;

/**
 * Mapper implementation using a file returning PHP arrays
 */
class VerkooporderMapper implements MapperInterface
{
    /**
     * 
     * @var EntityManager
     */
    var $entityManager;

    /**
     * @var ArraySerializableHydrator
     */
    protected $hydrator;
    
    /**
     * 
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
        
        $this->hydrator = new ArraySerializableHydrator();
    }
    
    
    /**
     * @param array|Traversable|\stdClass $data 
     * @return VerkooporderEntity
     */
    public function create($data)
    {
        if ($data instanceof Traversable) {
            $data = ArrayUtils::iteratorToArray($data);
        }
        if (is_object($data)) {
            $data = (array) $data;
        }
        
        if (!is_array($data)) {
            throw new InvalidArgumentException(sprintf(
                'Invalid data provided to %s; must be an array or Traversable',
                __METHOD__
                ));
        }
        
        $item = new VerkooporderEntity();
        
        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        
        return $item;
    }
    

    /**
     * @param string $id
     * @return VerkooporderEntity
     */
    public function fetch($id)
    {
        $item = $this->entityManager->getRepository('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity')->findBy(array(
               'ordernr' => $id 
            ))[0];
        
        
        
        return $item; 
    }
    
    /**
     * @return VerkooporderCollection
     */
    public function fetchAll($params = array())
    {
        $filter = new UnderscoreToCamelCase();
        
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('o')
            ->from('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity', 'o');
        
        if (count($params) > 0) {
            $conditions = array();
            foreach ($params as $k => $v) {
//                $conditions[lcfirst($filter->filter(strtolower($k)))] = $v;
                if ($k == 'DATE_START' || $k == 'DATE_END') {
                    $val = urldecode($v);
                    if ($k == 'DATE_START') {
                        $qb->andWhere('o.sysmodified >= :startdate')->setParameter('startdate', $val);
                    }
                    if ($k == 'DATE_END') {
                        $qb->andWhere('o.sysmodified <= :enddate')->setParameter('enddate', $val);
                    }
                    $qb->orderBy('o.sysmodified');
                } else {
                    $key = lcfirst($filter->filter(strtolower($k)));
                    $qb->andWhere('o.'.$key.' = :'.$key)->setParameter($key, $v);
                }
            }
           
//            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity')->findBy($conditions);
        } else {
//            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity')->findAll();
        }
        
//        var_dump($qb->getDQL());die();
        
        $query = $qb->getQuery();
        
        $items = $query->getResult();
        
        $collection = new ArrayCollection($items);
        
        return new VerkooporderCollection(new Collection($collection));
    }
    
    /**
     * @param string $id
     * @param array|Traversable|\stdClass $data
     * @return VerkooporderEntity
     */
    public function update($id, $data)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity', $id);

        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        return $item;
    }
    
    /**
     * @param string $id
     * @return bool
     */
    public function delete($id)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity', $id);
        
        $this->entityManager->remove($item);
        $this->entityManager->flush();
    
        return true;
    }
    
    /**
     * Translates a string with underscores into camel case (e.g. first_name -&gt; firstName)
     * @param    string   $str                     String in underscore format
     * @param    bool     $capitalise_first_char   If true, capitalise the first char in $str
     * @return   string                              $str translated into camel caps
     */
    protected function to_camel_case($str, $capitalise_first_char = false) 
    {
        if($capitalise_first_char) {
            $str[0] = strtoupper($str[0]);
        }
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $str);
    }
}
