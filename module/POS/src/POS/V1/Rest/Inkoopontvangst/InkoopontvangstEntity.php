<?php
namespace POS\V1\Rest\Inkoopontvangst;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_WEB_ONTVANGSTEN")
 */
class InkoopontvangstEntity
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
     * @ORM\Column(type="string", name="ITEMCODE")
     *
     * @var string
     */
    protected $itemcode;

    /**
     * @ORM\Column(type="string", name="ORDERLINE_DESCRIPTION")
     *
     * @var string
     */
    protected $orderlineDescription;

    /**
     * @ORM\Column(type="string", name="SUPPLIERCODE")
     *
     * @var string
     */
    protected $suppliercode;
    
    /**
     * @ORM\Column(type="float", name="QUANTITY")
     *
     * @var float
     */
    protected $quantity;

    /**
     * @ORM\Column(type="datetime", name="TRANS_DATE")
     *
     * @var DateTime
     */
    protected $transDate;

    /**
     * @ORM\Column(type="string", name="TRANS_DESCRIPTION")
     *
     * @var string
     */
    protected $transDescription;
    
    /**
     * @ORM\Column(type="string", name="LOCATIECODE")
     *
     * @var string
     */
    protected $locatiecode;

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
        $this->itemcode = '';
        $this->orderlineDescription = '';
        $this->suppliercode = '';
        $this->quantity = 0;
        $this->transDate = new \DateTime('0000-00-00 00:00:00');
        $this->transDescription = '';
        $this->locatiecode = '';
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
            'ITEMCODE'                  => $this->getItemcode(),
            'ORDERLINE_DESCRIPTION'     => $this->getOrderlineDescription(),
            'SUPPLIERCODE'              => $this->getSuppliercode(),
            'QUANTITY'                  => $this->getQuantity(),
            'TRANS_DATE'                => $this->getTransDate(),
            'TRANS_DESCRIPTION'         => $this->getTransDescription(),
            'LOCATIECODE'               => $this->getLocatiecode(),
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
        if (isset($data['ITEMCODE'])) {
            $this->setItemcode($data['ITEMCODE']);
        }
        if (isset($data['ORDERLINE_DESCRIPTION'])) {
            $this->setOrderlineDescription($data['ORDERLINE_DESCRIPTION']);
        }
        if (isset($data['SUPPLIERCODE'])) {
            $this->setSuppliercode($data['SUPPLIERCODE']);
        }
        if (isset($data['QUANTITY'])) {
            $this->setQuantity($data['QUANTITY']);
        }
        if (isset($data['TRANS_DATE'])) {
            $this->setTransDate($data['TRANS_DATE']);
        }
        if (isset($data['LOCATIECODE'])) {
            $this->setLocatiecode($data['LOCATIECODE']);
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
     * @return the string
     */
    public function getSuppliercode()
    {
        return $this->suppliercode;
    }

    /**
     *
     * @param $suppliercode
     */
    public function setSuppliercode($suppliercode)
    {
        $this->suppliercode = $suppliercode;
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
    public function getTransDate()
    {
        return $this->transDate->format('Y-m-d H:i:s');
    }

    /**
     *
     * @param DateTime $transDate            
     */
    public function setTransDate($transDate)
    {
        $this->transDate = new \DateTime($transDate);
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getTransDescription()
    {
        return $this->transDescription;
    }

    /**
     *
     * @param $transDescription
     */
    public function setTransDescription($transDescription)
    {
        $this->transDescription = $transDescription;
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
     * @return the DateTime
     */
    public function getSyscreated()
    {
        return $this->syscreated->format('Y-m-d H:i:s');
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
     * @param $statusLog
     */
    public function setStatusLog($statusLog)
    {
        $this->statusLog = $statusLog;
        return $this;
    }
    
    
}
