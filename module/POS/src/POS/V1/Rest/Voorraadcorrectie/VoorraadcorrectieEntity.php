<?php
namespace POS\V1\Rest\Voorraadcorrectie;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_WEB_STOCKCORRECTION")
 */
class VoorraadcorrectieEntity
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
     * @ORM\Column(type="string", name="REMARKS")
     *
     * @var string
     */
    protected $remarks;
    
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
        $this->itemcode = '';
        $this->quantity = 0;
        $this->remarks = '';
        $this->syscreated = new \DateTime();
        $this->sysmodified = $this->syscreated;
        $this->status = 0;
        $this->statusLog = "0";
    }
    
    public function getArrayCopy()
    {
        return array(
            'ID'                    => $this->getId(),
            'ITEMCODE'              => $this->getItemcode(),
            'QUANTITY'              => $this->getQuantity(),
            'REMARKS'               => $this->getRemarks(),
            'SYSCREATED'            => $this->getSyscreated(),
            'SYSMODIFIED'           => $this->getSysmodified(),
            'STATUS'                => $this->getStatus(),
            'STATUSLOG'             => $this->getStatusLog(),
        );
    }
    
    public function exchangeArray($data)
    {
        if (isset($data['ITEMCODE'])) {
            $this->setItemcode($data['ITEMCODE']);
        }
        if (isset($data['QUANTITY'])) {
            $this->setQuantity($data['QUANTITY']);
        }
        if (isset($data['REMARKS'])) {
            $this->setRemarks($data['REMARKS']);
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
    public function getItemcode()
    {
        return $this->itemcode;
    }

    /**
     *
     * @param
     *            $itemcode
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
     * @return the string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     *
     * @param
     *            $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @return the $syscreated
     */
    public function getSyscreated()
    {
        return $this->syscreated->format('Y-m-d H:i:s');
    }
    
    /**
     * @return the $sysmodified
     */
    public function getSysmodified()
    {
        return $this->sysmodified->format('Y-m-d H:i:s');
    }
    
    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    /**
     * @return the $statusLog
     */
    public function getStatusLog()
    {
        return $this->statusLog;
    }
    
    /**
     * @param string $statusLog
     */
    public function setStatusLog($statusLog)
    {
        $this->statusLog = $statusLog;
    }
    
}
