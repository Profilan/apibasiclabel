<?php
namespace Webshop\V1\Rest\Artikel;


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
class ArtikelMapper implements MapperInterface
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
        
        $item = new ArtikelEntity();
        
        $item = $this->hydrator->hydrate($data, $item);
        
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        
        return $item;
    }
    

    /**
     * @param string $id
     * @return Artikel
     */
    public function fetch($id)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Artikel\ArtikelEntity', $id);
        
        return $item; 
    }
    
    /**
     * @return ArtikelCollection
     */
    public function fetchAll($params = array())
    {
        if ($params->get('ITEMCODE')) {
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Artikel\ArtikelEntity')->findBy(array(
               'itemcode' => $params->get('ITEMCODE') 
            ));
        } else {
            $items = $this->entityManager->getRepository('Webshop\\V1\Rest\Artikel\ArtikelEntity')->findAll();
        }
        $collection = new ArrayCollection($items);
        
        return new ArtikelCollection(new Collection($collection));
    }
    
    /**
     * @param string $id
     * @param array|Traversable|\stdClass $data
     * @return Entity
     */
    public function update($id, $data)
    {
        $item = $this->entityManager->find('Webshop\\V1\Rest\Artikel\ArtikelEntity', $id);

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
        $item = $this->entityManager->find('Webshop\\V1\Rest\Artikel\ArtikelEntity', $id);
        
        $this->entityManager->remove($item);
        $this->entityManager->flush();
    
        return true;
    }
    
}
