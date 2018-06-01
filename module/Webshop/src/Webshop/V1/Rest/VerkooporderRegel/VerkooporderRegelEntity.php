<?php
namespace Webshop\V1\Rest\VerkooporderRegel;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_vw_WEB_ORSRG")
 */
class VerkooporderRegelEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="ID")
     * 
     * @var int
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", name="ORDERNR")
     *
     * @var string
     */
    protected $ordernr;

    /**
     * @ORM\Column(type="string", name="ITEMCODE")
     *
     * @var string
     */
    protected $itemcode;

    /**
     * @ORM\Column(type="string", name="REFERENTIE")
     *
     * @var string
     */
    protected $referentie;
    
    /**
     * @ORM\Column(type="float", name="QUANTITY")
     *
     * @var float
     */
    protected $quantity;

    /**
     * @ORM\Column(type="float", name="QUANTITY_DELIVERED")
     *
     * @var float
     */
    protected $quantityDelivered;
    
    /**
     * @ORM\Column(type="float", name="PRICE_GROSS")
     *
     * @var float
     */
    protected $priceGross;

    /**
     * @ORM\Column(type="float", name="PRICE_NETT")
     *
     * @var float
     */
    protected $priceNett;

    /**
     * @ORM\Column(type="string", name="DISCOUNT_TYPE")
     *
     * @var string
     */
    protected $discountType;

    /**
     * @ORM\Column(type="string", name="ORDERLINE_DESCRIPTION")
     *
     * @var string
     */
    protected $orderlineDescription;

    /**
     * @ORM\Column(type="datetime", name="DEL_DATE")
     *
     * @var DateTime
     */
    protected $delDate;

    /**
     * @ORM\Column(type="datetime", name="DEL_DATE_DELIVERED")
     *
     * @var DateTime
     */
    protected $delDateDelivered;

    /**
     * @ORM\Column(type="string", name="DEL_METHOD")
     *
     * @var string
     */
    protected $delMethod;
    

    public function __construct()
    {
        $this->referentie = '';
        $this->itemcode = '';
        $this->quantity = 0;
        $this->quantityDelivered = 0;
        $this->priceGross = 0;
        $this->priceNett = 0;
        $this->discountType = '';
        $this->delDate = new \DateTime('0000-00-00 00:00:00');
        $this->delDateDelivered = new \DateTime('0000-00-00 00:00:00');
        $this->orderlineDescription = '';
        $this->delMethod = '';
    }

    public function getArrayCopy()
    {
        return array(
            'ID'                        => $this->getId(),
            'ORDERNR'                   => $this->getOrdernr(),
            'REFERENTIE'                => $this->getReferentie(),
            'ITEMCODE'                  => $this->getItemcode(),
            'QUANTITY'                  => $this->getQuantity(),
            'QUANTITY_DELIVERED'        => $this->getQuantityDelivered(),
            'PRICE_GROSS'               => $this->getPriceGross(),
            'PRICE_NETT'                => $this->getPriceNett(),
            'DISCOUNT_TYPE'             => $this->getDiscountType(),
            'ORDERLINE_DESCRIPTION'     => $this->getOrderlineDescription(),
            'DEL_DATE'                  => $this->getDelDate(),
            'DEL_DATE_DELIVERED'        => $this->getDelDateDelivered(),
            'DEL_METHOD'                => $this->getDelMethod(),
        );
    }

    public function exchangeArray($data)
    {
        if (isset($data['REFERENTIE'])) {
            $this->setReferentie($data['REFERENTIE']);
        }
        if (isset($data['ITEMCODE'])) {
            $this->setItemcode($data['ITEMCODE']);
        }
        if (isset($data['QUANTITY'])) {
            $this->setQuantity($data['QUANTITY']);
        }
        if (isset($data['QUANTITY_DELIVERED'])) {
            $this->setQuantityDelivered($data['QUANTITY_DELIVERED']);
        }
        if (isset($data['PRICE_GROSS'])) {
            $this->setPriceGross($data['PRICE_GROSS']);
        }
        if (isset($data['PRICE_NETT'])) {
            $this->setPriceNett($data['PRICE_NETT']);
        }
        if (isset($data['DISCOUNT_TYPE'])) {
            $this->setDiscountType($data['DISCOUNT_TYPE']);
        }
        if (isset($data['ORDERLINE_DESCRIPTION'])) {
            $this->setOrderlineDescription($data['ORDERLINE_DESCRIPTION']);
        }
        if (isset($data['DEL_DATE'])) {
            $this->setDelDate($data['DEL_DATE']);
        }
        if (isset($data['DEL_DATE_DELIVERED'])) {
            $this->setDelDateDelivered($data['DEL_DATE_DELIVERED']);
        }
        if (isset($data['DEL_METHOD'])) {
            $this->setDelMethod($data['DEL_METHOD']);
        }
    }

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $ordernr
     */
    public function getOrdernr()
    {
        return $this->ordernr;
    }

    /**
     * @param string $ordernr
     */
    public function setOrdernr($ordernr)
    {
        $this->ordernr = $ordernr;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getReferentie()
    {
        return $this->referentie;
    }

    /**
     *
     * @param $referentie
     */
    public function setReferentie($referentie)
    {
        $this->referentie = $referentie;
        return $this;
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
     * @return the float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     *
     * @return the float
     */
    public function getQuantityDelivered()
    {
        return $this->quantityDelivered;
    }

    /**
     *
     * @param float $quantityDelivered            
     */
    public function setQuantityDelivered($quantityDelivered)
    {
        $this->quantityDelivered = $quantityDelivered;
        return $this;
    }
 
    /**
     *
     * @return the float
     */
    public function getPriceGross()
    {
        return $this->priceGross;
    }

    /**
     *
     * @param float $priceGross
     */
    public function setPriceGross($priceGross)
    {
        $this->priceGross = $priceGross;
        return $this;
    }

    /**
     *
     * @return the float
     */
    public function getPriceNett()
    {
        return $this->priceNett;
    }

    /**
     *
     * @param float $priceNett
     */
    public function setPriceNett($priceNett)
    {
        $this->priceNett = $priceNett;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     *
     * @param $discountType
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getOrderlineDescription()
    {
        return $this->orderlineDescription;
    }

    /**
     *
     * @param $orderlineDescription
     */
    public function setOrderlineDescription($orderlineDescription)
    {
        $this->orderlineDescription = $orderlineDescription;
        return $this;
    }

    /**
     *
     * @return the DateTime
     */
    public function getDelDate()
    {
        if ($this->delDate != null) {
            return $this->delDate->format('Y-m-d H:i:s');
        } else {
            return null;
        }
    }


    /**
     *
     * @param DateTime $delDate
     */
    public function setDelDate($delDate)
    {
        $this->delDate = new \DateTime($delDate);
        return $this;
    }

    /**
     *
     * @return the DateTime
     */
    public function getDelDateDelivered()
    {
        if ($this->delDateDelivered != null) {
            return $this->delDateDelivered->format('Y-m-d H:i:s');
        } else {
            return null;
        }
    }

    /**
     *
     * @param DateTime $delDateDelivered            
     */
    public function setDelDateDelivered($delDateDelivered)
    {
        $this->delDateDelivered = new \DateTime($delDateDelivered);
        return $this;
    }
 
    /**
     * @return the $delMethod
     */
    public function getDelMethod()
    {
        return $this->delMethod;
    }

    /**
     * @param string $delMethod
     */
    public function setDelMethod($delMethod)
    {
        $this->delMethod = $delMethod;
        return $this;
    }

}
