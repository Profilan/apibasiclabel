<?php
namespace POS\V1\Rest\Inkooporder;


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
class InkooporderMapper implements MapperInterface
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
     * @return InkooporderEntity
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
        
        $item = new InkooporderEntity();
        
        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        
        return $item;
    }
    

    /**
     * @param string $id
     * @return InkooporderEntity
     */
    public function fetch($id)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Inkooporder\InkooporderEntity', $id);
        
        return $item; 
    }
    
    /**
     * @return InkooporderCollection
     */
    public function fetchAll($params = array())
    {
        if ($params->get('REFERENTIE')) {
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Inkooporder\InkooporderEntity')->findBy(array(
               'referentie' => $params->get('REFERENTIE') 
            ));
        } else {
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Inkooporder\InkooporderEntity')->findAll();
        }
        $collection = new ArrayCollection($items);
        
        return new InkooporderCollection(new Collection($collection));
    }
    
    /**
     * @param string $id
     * @param array|Traversable|\stdClass $data
     * @return InkooporderEntity
     */
    public function update($id, $data)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Inkooporder\InkooporderEntity', $id);

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
        $item = $this->entityManager->find('Webshop\\V1\Rest\Inkooporder\InkooporderEntity', $id);
        
        $this->entityManager->remove($item);
        $this->entityManager->flush();
    
        return true;
    }
    
}
