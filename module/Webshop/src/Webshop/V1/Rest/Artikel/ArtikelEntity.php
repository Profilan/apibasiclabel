<?php
namespace Webshop\V1\Rest\Artikel;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="BL_WEB_ITEMS")
 */
class ArtikelEntity
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
     * @ORM\Column(type="string", name="ITEMDESCRIPTION")
     *
     * @var string
     */
    protected $itemdescription;

    /**
     * @ORM\Column(type="string", name="UNIT")
     *
     * @var string
     */
    protected $unit;

    /**
     * @ORM\Column(type="float", name="SALESPRICE")
     *
     * @var float
     */
    protected $salesprice;

    /**
     * @ORM\Column(type="string", name="VATCODE")
     *
     * @var string
     */
    protected $vatcode;

    /**
     * @ORM\Column(type="float", name="COSTPRICE")
     *
     * @var float
     */
    protected $costprice;

    /**
     * @ORM\Column(type="string", name="SUPPLIERCODE")
     *
     * @var string
     */
    protected $suppliercode;

    /**
     * @ORM\Column(type="string", name="SUPPLIER_ITEMCODE")
     *
     * @var string
     */
    protected $supplierItemcode;
    
    /**
     * @ORM\Column(type="string", name="EANCODE")
     *
     * @var string
     */
    protected $eancode;

    /**
     * @ORM\Column(type="string", name="PURCHASE_UNIT")
     *
     * @var string
     */
    protected $purchaseUnit;

    /**
     * @ORM\Column(type="float", name="PURCHASE_FACTOR")
     *
     * @var float
     */
    protected $purchaseFactor;

    /**
     * @ORM\Column(type="float", name="PURCHASE_PRICE")
     *
     * @var string
     */
    protected $purchasePrice;

    /**
     * @ORM\Column(type="string", name="PURCHASE_VATCODE")
     *
     * @var string
     */
    protected $purchaseVatcode;

    /**
     * @ORM\Column(type="integer", name="PURCHASE_ORDERSIZE")
     *
     * @var int
     */
    protected $purchaseOrdersize;

    /**
     * @ORM\Column(type="integer", name="PURCHASE_DELIVERYTIME")
     *
     * @var int
     */
    protected $purchaseDeliverytime;

    /**
     * @ORM\Column(type="integer", name="ASSORTMENT")
     *
     * @var int
     */
    protected $assortment;

    /**
     * @ORM\Column(type="string", name="LOCATIE1")
     *
     * @var string
     */
    protected $locatie1;

    /**
     * @ORM\Column(type="string", name="LOCATIE2")
     *
     * @var string
     */
    protected $locatie2;

    /**
     * @ORM\Column(type="string", name="LOCATIE3")
     *
     * @var string
     */
    protected $locatie3;

    /**
     * @ORM\Column(type="string", name="LOCATIE4")
     *
     * @var string
     */
    protected $locatie4;

    /**
     * @ORM\Column(type="string", name="LOCATIE5")
     *
     * @var string
     */
    protected $locatie5;

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
        $this->itemdescription = '';
        $this->unit = '';
        $this->salesprice = 0;
        $this->vatcode = '';
        $this->costprice = 0;
        $this->suppliercode = '';
        $this->supplierItemcode = '';
        $this->eancode = '';
        $this->purchaseUnit = '';
        $this->purchaseFactor = 0;
        $this->purchasePrice = 0;
        $this->purchaseVatcode = '';
        $this->purchaseOrdersize = 0;
        $this->purchaseDeliverytime = 0;
        $this->assortment = 0;
        $this->locatie1 = '';
        $this->locatie2 = '';
        $this->locatie3 = '';
        $this->locatie4 = '';
        $this->locatie5 = '';
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
            'ITEMDESCRIPTION'       => $this->getItemdescription(),
            'UNIT'                  => $this->getUnit(),
            'SALESPRICE'            => $this->getSalesprice(),
            'VATCODE'               => $this->getVatcode(),
            'COSTPRICE'             => $this->getCostprice(),
            'SUPPLIERCODE'          => $this->getSuppliercode(),
            'SUPPLIER_ITEMCODE'     => $this->getSupplierItemcode(),
            'EANCODE'               => $this->getEancode(),
            'PURCHASE_UNIT'         => $this->getPurchaseUnit(),
            'PURCHASE_FACTOR'       => $this->getPurchaseFactor(),
            'PURCHASE_PRICE'        => $this->getPurchasePrice(),
            'PURCHASE_VATCODE'      => $this->getPurchaseVatcode(),
            'PURCHASE_ORDERSIZE'    => $this->getPurchaseOrdersize(),
            'PURCHASE_DELIVERYTIME' => $this->getPurchaseDeliverytime(),
            'ASSORTMENT'            => $this->getAssortment(),
            'LOCATIE1'              => $this->getLocatie1(),
            'LOCATIE2'              => $this->getLocatie2(),
            'LOCATIE3'              => $this->getLocatie3(),
            'LOCATIE4'              => $this->getLocatie4(),
            'LOCATIE5'              => $this->getLocatie5(),
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
        if (isset($data['ITEMDESCRIPTION'])) {
            $this->setItemdescription($data['ITEMDESCRIPTION']);
        }
        if (isset($data['UNIT'])) {
            $this->setUnit($data['UNIT']);
        }
        if (isset($data['SALESPRICE'])) {
            $this->setSalesprice($data['SALESPRICE']);
        }
        if (isset($data['VATCODE'])) {
            $this->setVatcode($data['VATCODE']);
        }
        if (isset($data['COSTPRICE'])) {
            $this->setCostprice($data['COSTPRICE']);
        }
        if (isset($data['SUPPLIERCODE'])) {
            $this->setSuppliercode($data['SUPPLIERCODE']);
        }
        if (isset($data['SUPPLIER_ITEMCODE'])) {
            $this->setSupplierItemcode($data['SUPPLIER_ITEMCODE']);
        }
        if (isset($data['EANCODE'])) {
            $this->setEancode($data['EANCODE']);
        }
        if (isset($data['PURCHASE_UNIT'])) {
            $this->setPurchaseUnit($data['PURCHASE_UNIT']);
        }
        if (isset($data['PURCHASE_FACTOR'])) {
            $this->setPurchaseFactor($data['PURCHASE_FACTOR']);
        }
        if (isset($data['PURCHASE_PRICE'])) {
            $this->setPurchasePrice($data['PURCHASE_PRICE']);
        }
        if (isset($data['PURCHASE_VATCODE'])) {
            $this->setPurchaseVatcode($data['PURCHASE_VATCODE']);
        }
        if (isset($data['PURCHASE_ORDERSIZE'])) {
            $this->setPurchaseOrdersize($data['PURCHASE_ORDERSIZE']);
        }
        if (isset($data['PURCHASE_DELIVERYTIME'])) {
            $this->setPurchaseDeliverytime($data['PURCHASE_DELIVERYTIME']);
        }
        if (isset($data['ASSORTMENT'])) {
            $this->setAssortment($data['ASSORTMENT']);
        }
        if (isset($data['LOCATIE1'])) {
            $this->setLocatie1($data['LOCATIE1']);
        }
        if (isset($data['LOCATIE2'])) {
            $this->setLocatie2($data['LOCATIE2']);
        }
        if (isset($data['LOCATIE3'])) {
            $this->setLocatie3($data['LOCATIE3']);
        }
        if (isset($data['LOCATIE4'])) {
            $this->setLocatie4($data['LOCATIE4']);
        }
        if (isset($data['LOCATIE5'])) {
            $this->setLocatie5($data['LOCATIE5']);
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
     * @return the $itemcode
     */
    public function getItemcode()
    {
        return $this->itemcode;
    }

    /**
     * @param string $itemcode
     */
    public function setItemcode($itemcode)
    {
        $this->itemcode = $itemcode;
    }

    /**
     * @return the $itemdescription
     */
    public function getItemdescription()
    {
        return $this->itemdescription;
    }

    /**
     * @param string $itemdescription
     */
    public function setItemdescription($itemdescription)
    {
        $this->itemdescription = $itemdescription;
    }

    /**
     * @return the $unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return the $salesprice
     */
    public function getSalesprice()
    {
        return $this->salesprice;
    }

    /**
     * @param number $salesprice
     */
    public function setSalesprice($salesprice)
    {
        $this->salesprice = $salesprice;
    }

    /**
     * @return the $vatcode
     */
    public function getVatcode()
    {
        return $this->vatcode;
    }

    /**
     * @param string $vatcode
     */
    public function setVatcode($vatcode)
    {
        $this->vatcode = $vatcode;
    }

    /**
     * @return the $costprice
     */
    public function getCostprice()
    {
        return $this->costprice;
    }

    /**
     * @param number $costprice
     */
    public function setCostprice($costprice)
    {
        $this->costprice = $costprice;
    }

    /**
     * @return the $suppliercode
     */
    public function getSuppliercode()
    {
        return $this->suppliercode;
    }

    /**
     * @param string $suppliercode
     */
    public function setSuppliercode($suppliercode)
    {
        $this->suppliercode = $suppliercode;
    }

    /**
     *
     * @return the string
     */
    public function getSupplierItemcode()
    {
        return $this->supplierItemcode;
    }

    /**
     *
     * @param $supplierItemcode
     */
    public function setSupplierItemcode($supplierItemcode)
    {
        $this->supplierItemcode = $supplierItemcode;
        return $this;
    }
 
    /**
     * @return the $eancode
     */
    public function getEancode()
    {
        return $this->eancode;
    }

    /**
     * @param string $eancode
     */
    public function setEancode($eancode)
    {
        $this->eancode = $eancode;
    }

    /**
     * @return the $purchaseUnit
     */
    public function getPurchaseUnit()
    {
        return $this->purchaseUnit;
    }

    /**
     * @param string $purchaseUnit
     */
    public function setPurchaseUnit($purchaseUnit)
    {
        $this->purchaseUnit = $purchaseUnit;
    }

    /**
     * @return the $purchaseFactor
     */
    public function getPurchaseFactor()
    {
        return $this->purchaseFactor;
    }

    /**
     * @param number $purchaseFactor
     */
    public function setPurchaseFactor($purchaseFactor)
    {
        $this->purchaseFactor = $purchaseFactor;
    }

    /**
     * @return the $purchasePrice
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param string $purchasePrice
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
    }

    /**
     * @return the $purchaseVatcode
     */
    public function getPurchaseVatcode()
    {
        return $this->purchaseVatcode;
    }

    /**
     * @param string $purchaseVatcode
     */
    public function setPurchaseVatcode($purchaseVatcode)
    {
        $this->purchaseVatcode = $purchaseVatcode;
    }

    /**
     * @return the $purchaseOrdersize
     */
    public function getPurchaseOrdersize()
    {
        return $this->purchaseOrdersize;
    }

    /**
     * @param number $purchaseOrdersize
     */
    public function setPurchaseOrdersize($purchaseOrdersize)
    {
        $this->purchaseOrdersize = $purchaseOrdersize;
    }

    /**
     * @return the $purchaseDeliverytime
     */
    public function getPurchaseDeliverytime()
    {
        return $this->purchaseDeliverytime;
    }

    /**
     * @param number $purchaseDeliverytime
     */
    public function setPurchaseDeliverytime($purchaseDeliverytime)
    {
        $this->purchaseDeliverytime = $purchaseDeliverytime;
    }

    /**
     * @return the $assortment
     */
    public function getAssortment()
    {
        return $this->assortment;
    }

    /**
     * @param number $assortment
     */
    public function setAssortment($assortment)
    {
        $this->assortment = $assortment;
    }

    /**
     * @return the $locatie1
     */
    public function getLocatie1()
    {
        return $this->locatie1;
    }

    /**
     * @param string $locatie1
     */
    public function setLocatie1($locatie1)
    {
        $this->locatie1 = $locatie1;
    }

    /**
     * @return the $locatie2
     */
    public function getLocatie2()
    {
        return $this->locatie2;
    }

    /**
     * @param string $locatie2
     */
    public function setLocatie2($locatie2)
    {
        $this->locatie2 = $locatie2;
    }

    /**
     * @return the $locatie3
     */
    public function getLocatie3()
    {
        return $this->locatie3;
    }

    /**
     * @param string $locatie3
     */
    public function setLocatie3($locatie3)
    {
        $this->locatie3 = $locatie3;
    }

    /**
     * @return the $locatie4
     */
    public function getLocatie4()
    {
        return $this->locatie4;
    }

    /**
     * @param string $locatie4
     */
    public function setLocatie4($locatie4)
    {
        $this->locatie4 = $locatie4;
    }

    /**
     * @return the $locatie5
     */
    public function getLocatie5()
    {
        return $this->locatie5;
    }

    /**
     * @param string $locatie5
     */
    public function setLocatie5($locatie5)
    {
        $this->locatie5 = $locatie5;
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
