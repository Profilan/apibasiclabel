<?php
namespace POS\V1\Rest\Voorraadcorrectie;


use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ArraySerializable  as ArraySerializableHydrator;
use Zend\Stdlib\ArrayUtils;
use Traversable;
use InvalidArgumentException;
use Doctrine\Common\Collections\ArrayCollection;
use DoctrineModule\Paginator\Adapter\Collection;
use Application\Entity\MapperInterface;

/**
 * Mapper implementation using a file returning PHP arrays
 */
class VoorraadcorrectieMapper implements MapperInterface
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
     * @return Entity
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
        
        $item = new VoorraadcorrectieEntity();
        
        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        
        return $item;
    }
    

    /**
     * @param string $id
     * @return Voorraadcorrectie
     */
    public function fetch($id)
    {
        $item = $this->entityManager->find('POS\V1\Rest\Voorraadcorrectie\VoorraadcorrectieEntity', $id);
        
        return $item; 
    }
    
    /**
     * @return VoorraadcorrectieCollection
     */
    public function fetchAll($params = array())
    {
        if ($params->get('ITEMCODE')) {
            $items = $this->entityManager->getRepository('POS\V1\Rest\Voorraadcorrectie\VoorraadcorrectieEntity')->findBy(array(
               'itemcode' => $params->get('ITEMCODE') 
            ));
        } else {
            $items = $this->entityManager->getRepository('POS\V1\Rest\Voorraadcorrectie\VoorraadcorrectieEntity')->findAll();
        }
        $collection = new ArrayCollection($items);
        
        return new VoorraadcorrectieCollection(new Collection($collection));
    }
    
    /**
     * @param string $id
     * @param array|Traversable|\stdClass $data
     * @return Entity
     */
    public function update($id, $data)
    {
        $item = $this->entityManager->find('POS\V1\Rest\Voorraadcorrectie\VoorraadcorrectieEntity', $id);

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
        $item = $this->entityManager->find('POS\V1\Rest\Voorraadcorrectie\VoorraadcorrectieEntity', $id);
        
        $this->entityManager->remove($item);
        $this->entityManager->flush();
    
        return true;
    }
    
}
