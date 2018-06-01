<?php
namespace POS\V1\Rest\Levering;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_WEB_LEVERINGEN")
 */
class LeveringEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="ID")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="REFERENTIE")
     *
     * @var string
     */
    protected $referentie;

    /**
     * @ORM\Column(type="string", name="LOCATIECODE")
     *
     * @var string
     */
    protected $locatiecode;
    
    /**
     * @ORM\Column(type="string", name="ITEMCODE")
     *
     * @var string
     */
    protected $itemcode;

    /**
     * @ORM\Column(type="float", name="QUANTITY")
     *
     * @var float
     */
    protected $quantity;

    /**
     * @ORM\Column(type="datetime", name="DEL_DATE")
     *
     * @var DateTime
     */
    protected $delDate;

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
     * @ORM\Column(type="smallint", name="FULFILLED")
     *
     * @var int
     */
    protected $fulfilled;

    /**
     * @ORM\Column(type="smallint", name="FIN_PAYED")
     *
     * @var int
     */
    protected $finPayed;

    /**
     * @ORM\Column(type="string", name="FIN_PAYMENT_METHOD")
     *
     * @var string
     */
    protected $finPaymentMethod;

    /**
     * @ORM\Column(type="datetime", name="SYSCREATED")
     *
     * @var DateTime
     */
    protected $syscreated;
    
    /**
     * @ORM\Column(type="datetime", name="SYSMODIFIED")
     *
     * @var DateTime
     */
    protected $sysmodified;
    
    /**
     * @ORM\Column(type="integer", name="STATUS")
     *
     * @var int
     */
    protected $status;
    
    /**
     * @ORM\Column(type="string", name="STATUS_LOG")
     *
     * @var string
     */
    protected $statusLog;

    public function __construct()
    {
        $this->referentie = '';
        $this->locatiecode = '';
        $this->itemcode = '';
        $this->quantity = 0;
        $this->delDate = new \DateTime('0000-00-00 00:00:00');
        $this->priceGross = 0;
        $this->priceNett = 0;
        $this->discountType = '';
        $this->fulfilled = 0;
        $this->finPayed = 0;
        $this->finPaymentMethod = '';
        $this->syscreated = new \DateTime();
        $this->sysmodified = $this->syscreated;
        $this->status = 0;
        $this->statusLog = "0";
    }

    public function getArrayCopy()
    {
        return array(
            'ID'                        => $this->getId(),
            'REFERENTIE'                => $this->getReferentie(),
            'LOCATIECODE'               => $this->getLocatiecode(),
            'ITEMCODE'                  => $this->getItemcode(),
            'QUANTITY'                  => $this->getQuantity(),
            'DEL_DATE'                  => $this->getDelDate(),
            'PRICE_GROSS'               => $this->getPriceGross(),
            'PRICE_NETT'                => $this->getPriceNett(),
            'FULFILLED'                 => $this->getFulfilled(),
            'FIN_PAYED'                 => $this->getFinPayed(),
            'FIN_PAYMENT_METHOD'        => $this->getFinPaymentMethod(),
            'DISCOUNT_TYPE'             => $this->getDiscountType(),
            'SYSCREATED'                => $this->getSyscreated(),
            'SYSMODIFIED'               => $this->getSysmodified(),
            'STATUS'                    => $this->getStatus(),
            'STATUSLOG'                 => $this->getStatusLog(),
        );
    }

    public function exchangeArray($data)
    {
        if (isset($data['REFERENTIE'])) {
            $this->setReferentie($data['REFERENTIE']);
        }
        if (isset($data['LOCATIECODE'])) {
            $this->setLocatiecode($data['LOCATIECODE']);
        }
        if (isset($data['ITEMCODE'])) {
            $this->setItemcode($data['ITEMCODE']);
        }
        if (isset($data['QUANTITY'])) {
            $this->setQuantity($data['QUANTITY']);
        }
        if (isset($data['DEL_DATE'])) {
            $this->setDelDate($data['DEL_DATE']);
        }
        if (isset($data['PRICE_GROSS'])) {
            $this->setPriceGross($data['PRICE_GROSS']);
        }
        if (isset($data['PRICE_NETT'])) {
            $this->setPriceNett($data['PRICE_NETT']);
        }
        if (isset($data['FULFILLED'])) {
            $this->setFulfilled($data['FULFILLED']);
        }
        if (isset($data['FIN_PAYED'])) {
            $this->setFinPayed($data['FIN_PAYED']);
        }
        if (isset($data['FIN_PAYMENT_METHOD'])) {
            $this->setFinPaymentMethod($data['FIN_PAYMENT_METHOD']);
        }
        if (isset($data['DISCOUNT_TYPE'])) {
            $this->setDiscountType($data['DISCOUNT_TYPE']);
        }
    }
    
    /**
     *
     * @return the int
     */
    public function getId()
    {
        return $this->id;
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
     * @return the DateTime
     */
    public function getDelDate()
    {
        return $this->delDate->format('Y-m-d H:i:s');
    }

    /**
     *
     * @param DateTime $delDate            
     */
    public function setDelDate($delDate)
    {
        $this->delDate =  new \DateTime($delDate);;
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
     * @return the int
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }

    /**
     *
     * @param int $fulfilled            
     */
    public function setFulfilled($fulfilled)
    {
        $this->fulfilled = $fulfilled;
        return $this;
    }

    /**
     *
     * @return the int
     */
    public function getFinPayed()
    {
        return $this->finPayed;
    }

    /**
     *
     * @param int $finPayed            
     */
    public function setFinPayed($finPayed)
    {
        $this->finPayed = $finPayed;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getFinPaymentMethod()
    {
        return $this->finPaymentMethod;
    }

    /**
     *
     * @param $finPaymentMethod
     */
    public function setFinPaymentMethod($finPaymentMethod)
    {
        $this->finPaymentMethod = $finPaymentMethod;
        return $this;
    }

    /**
     *
     * @return the DateTime
     */
    public function getSyscreated()
    {
        return $this->syscreated->format('Y-m-d H:i:s');
    }

    /**
     *
     * @param DateTime $syscreated            
     */
    public function setSyscreated($syscreated)
    {
        $this->syscreated = $syscreated;
        return $this;
    }

    /**
     *
     * @return the DateTime
     */
    public function getSysmodified()
    {
        return $this->sysmodified->format('Y-m-d H:i:s');
    }

    /**
     *
     * @param DateTime $sysmodified            
     */
    public function setSysmodified($sysmodified)
    {
        $this->sysmodified = $sysmodified;
        return $this;
    }

    /**
     *
     * @return the int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @param int $status            
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getStatusLog()
    {
        return $this->statusLog;
    }

    /**
     *
     * @param
     *            $statusLog
     */
    public function setStatusLog($statusLog)
    {
        $this->statusLog = $statusLog;
        return $this;
    }
 
    
    
}
