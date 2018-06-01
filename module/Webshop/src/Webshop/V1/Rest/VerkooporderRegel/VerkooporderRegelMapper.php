<?php
namespace Webshop\V1\Rest\VerkooporderRegel;


use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ArraySerializable  as ArraySerializableHydrator;
use Zend\Stdlib\ArrayUtils;
use Traversable;
use InvalidArgumentException;
use Doctrine\Common\Collections\ArrayCollection;
use DoctrineModule\Paginator\Adapter\Collection;
use Application\Entity\MapperInterface;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\NativeQuery;

/**
 * Mapper implementation using a file returning PHP arrays
 */
class VerkooporderRegelMapper implements MapperInterface
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
     * @return VerkooporderRegelEntity
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
        
        $item = new VerkooporderRegelEntity();
        
        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        
        return $item;
    }
    

    /**
     * @param string $id
     * @return VerkooporderRegelEntity
     */
    public function fetch($id)
    {
        $item = $this->entityManager->getRepository('Webshop\\V1\Rest\Verkooporder\VerkooporderEntity')->findBy(array(
               'ordernr' => $id 
            ))[0];
        
        return $item; 
    }
    
    /**
     * @return VerkooporderRegelCollection
     */
    public function fetchAll($parameters = array())
    {
        /*
        if (count($params) > 0) {
            $conditions = array();
            foreach ($params as $k => $v) {
                $conditions[strtolower($k)] = $v;
            }
//            var_dump($conditions);die();
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\VerkooporderRegel\VerkooporderRegelEntity')->findBy($conditions);
        } else {
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\VerkooporderRegel\VerkooporderRegelEntity')->findAll();
        }
        */
        
        
        $entityClass = 'Webshop\\V1\Rest\VerkooporderRegel\VerkooporderRegelEntity';
        
        $builder = new ResultSetMappingBuilder($this->entityManager);
        $builder->addRootEntityFromClassMetadata($entityClass, 'row');
        
        /**
         *
         * @var \Doctrine\ORM\Query\ResultSetMapping $rsm
         */
        $rsm = $builder->addEntityResult($entityClass, 'row');
        
        $query = 'SET NOCOUNT ON;EXEC BL_sp_WEB_ORSRG';
        
        $queryParams = [];
        if (count($parameters) > 0) {
            
            foreach ($parameters as $k => $v) {
                $queryParams[] = '@' . strtolower($k) . ' = ' .  ':' . strtolower($k);
            }
            
            $query .= ' ' . implode(',', $queryParams);
        }
        
        /**
         *
         * @var NativeQuery $nativeQuery
         */
        $nativeQuery = $this->entityManager->createNativeQuery(
            $query,
            $rsm
            );
        
        $params = [];
        if (count($parameters) > 0) {
            
            foreach ($parameters as $k => $v) {
                $params[strtolower($k)] = urldecode($v);
            }
            
            $nativeQuery->setParameters($params);
        }
        
        $items = $nativeQuery->getArrayResult();
        
        $collection = new ArrayCollection($items);
        
        return new VerkooporderRegelCollection(new Collection($collection));
    }
    
    /**
     * @param string $id
     * @param array|Traversable|\stdClass $data
     * @return VerkooporderEntity
     */
    public function update($id, $data)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\VerkooporderRegel\VerkooporderRegelEntity', $id);

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
        $item = $this->entityManager->find('Webshop\\V1\Rest\VerkooporderRegel\VerkooporderRegelEntity', $id);
        
        $this->entityManager->remove($item);
        $this->entityManager->flush();
    
        return true;
    }
    
}
