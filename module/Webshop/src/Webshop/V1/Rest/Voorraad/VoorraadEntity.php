<?php
namespace Webshop\V1\Rest\Voorraad;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_vw_STOCK")
 */
class VoorraadEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="ITEMCODE")
     *
     * @var string
     */
    protected $itemcode;

    /**
     * @ORM\Column(type="string", name="EANCODE")
     *
     * @var string
     */
    protected $eancode;

    /**
     * @ORM\Column(type="string", name="ITEMDESCRIPTION")
     *
     * @var string
     */
    protected $itemdescription;

    /**
     * @ORM\Column(type="string", name="LOCATIECODE")
     *
     * @var string
     */
    protected $locatiecode;

    /**
     * @ORM\Column(type="float", name="VOORRAAD")
     *
     * @var float
     */
    protected $voorraad;

    /**
     * @ORM\Column(type="datetime", name="ATP")
     *
     * @var DateTime
     */
    protected $atp;

    /**
     * @ORM\Column(type="string", name="DEL_TYPE")
     *
     * @var string
     */
    protected $delType;
    
    /**
     * @ORM\Column(type="smallint", name="ACTIVE")
     * 
     * @var int
     */
    protected $active;

    /**
     * @ORM\Column(type="smallint", name="COLLECTION")
     *
     * @var int
     */
    protected $collection;
    
    public function __construct()
    {
        $this->itemcode = '';
        $this->eancode = '';
        $this->itemdescription = '';
        $this->locatiecode = '';
        $this->voorraad = 0;
        $this->atp =  new \DateTime('0000-00-00 00:00:00');
        $this->delType = '';
        $this->active = 1;
        $this->collection = 1;
    }
    
    public function getArrayCopy()
    {
        return array(
          'ITEMCODE'            => $this->getItemcode(),
          'EANCODE'             => $this->getEancode(),
          'ITEMDESCRIPTION'     => $this->getItemdescription(),
          'LOCATIECODE'         => $this->getLocatiecode(),
          'VOORRAAD'            => $this->getVoorraad(),
          'ATP'                 => $this->getAtp(),
          'DEL_TYPE'            => $this->getDelType(),
          'ACTIVE'              => $this->getActive(),
          'COLLECTION'          => $this->getCollection(),
        );
    }
    
    public function exchangeArray($data)
    {
        if (isset($data['ITEMCODE'])) {
            $this->setItemcode($data['ITEMCODE']);
        }
        if (isset($data['EANCODE'])) {
            $this->setEancode($data['EANCODE']);
        }
        if (isset($data['ITEMDESCRIPTION'])) {
            $this->setItemdescription($data['ITEMDESCRIPTION']);
        }
        if (isset($data['LOCATIECODE'])) {
            $this->setLocatiecode($data['LOCATIECODE']);
        }
        if (isset($data['VOORRAAD'])) {
            $this->setStock($data['VOORRAAD']);
        }
        if (isset($data['ATP'])) {
            $this->setAtp($data['ATP']);
        }
        if (isset($data['DEL_TYPE'])) {
            $this->setDelType($data['DEL_TYPE']);
        }
        if (isset($data['ACTIVE'])) {
            $this->setActive($data['ACTIVE']);
        }
        if (isset($data['COLLECTION'])) {
            $this->setCollection($data['COLLECTION']);
        }
    }

    /**
     *
     * @return the string
     */
    public function getItemcode()
    {
        return $this->itemcode;
    }

    /**
     *
     * @param $itemcode
     */
    public function setItemcode($itemcode)
    {
        $this->itemcode = $itemcode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getEancode()
    {
        return $this->eancode;
    }

    /**
     *
     * @param $eancode
     */
    public function setEancode($eancode)
    {
        $this->eancode = $eancode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getItemdescription()
    {
        return $this->itemdescription;
    }

    /**
     *
     * @param $itemdescription
     */
    public function setItemdescription($itemdescription)
    {
        $this->itemdescription = $itemdescription;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getLocatiecode()
    {
        return $this->locatiecode;
    }

    /**
     *
     * @param $locatiecode
     */
    public function setLocatiecode($locatiecode)
    {
        $this->locatiecode = $locatiecode;
        return $this;
    }

    /**
     *
     * @return the float
     */
    public function getVoorraad()
    {
        return $this->voorraad;
    }

    /**
     *
     * @param float $voorraad            
     */
    public function setVoorraad($voorraad)
    {
        $this->voorraad = $voorraad;
        return $this;
    }

    /**
     *
     * @return the DateTime
     */
    public function getAtp()
    {
        if ($this->atp != null) {
            return $this->atp->format('Y-m-d H:i:s');
        } else {
            return null;
        }
    }

    /**
     *
     * @param DateTime $atp            
     */
    public function setAtp($atp)
    {
        $this->atp = new \DateTime($atp);
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelType()
    {
        return $this->delType;
    }

    /**
     *
     * @param $delType
     */
    public function setDelType($delType)
    {
        $this->delType =$delType;
        return $this;
    }
    /**
     * @return the $active
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param $active
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
    /**
     * @return the $collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param number $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }


 
    
}
