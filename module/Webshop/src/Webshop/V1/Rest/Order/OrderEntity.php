<?php
namespace Webshop\V1\Rest\Order;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_WEB_ORKRG")
 */
class OrderEntity
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
     * @ORM\Column(type="string", name="OMSCHRIJVING")
     *
     * @var string
     */
    protected $omschrijving;

    /**
     * @ORM\Column(type="text", name="REMARK")
     *
     * @var string
     */
    protected $remark;
    
    /**
     * @ORM\Column(type="string", name="LOCATIECODE")
     *
     * @var string
     */
    protected $locatiecode;

    /**
     * @ORM\Column(type="string", name="REL_CODE")
     *
     * @var string
     */
    protected $relCode;

    /**
     * @ORM\Column(type="string", name="DEL_NAAM")
     *
     * @var string
     */
    protected $delNaam;

    /**
     * @ORM\Column(type="string", name="DEL_AANSPREEKTITEL")
     *
     * @var string
     */
    protected $delAanspreektitel;

    /**
     * @ORM\Column(type="string", name="DEL_ADRES1")
     *
     * @var string
     */
    protected $delAdres1;

    /**
     * @ORM\Column(type="string", name="DEL_POSTCODE")
     *
     * @var string
     */
    protected $delPostcode;

    /**
     * @ORM\Column(type="string", name="DEL_PLAATS")
     *
     * @var string
     */
    protected $delPlaats;

    /**
     * @ORM\Column(type="string", name="DEL_LAND")
     *
     * @var string
     */
    protected $delLand;

    /**
     * @ORM\Column(type="string", name="DEL_TELEFOON")
     *
     * @var string
     */
    protected $delTelefoon;

    /**
     * @ORM\Column(type="string", name="DEL_EMAIL")
     *
     * @var string
     */
    protected $delEmail;

    /**
     * @ORM\Column(type="string", name="DEL_METHOD")
     *
     * @var string
     */
    protected $delMethod;

    /**
     * @ORM\Column(type="string", name="INV_NAAM")
     *
     * @var string
     */
    protected $invNaam;
    
    /**
     * @ORM\Column(type="string", name="INV_AANSPREEKTITEL")
     *
     * @var string
     */
    protected $invAanspreektitel;
    
    /**
     * @ORM\Column(type="string", name="INV_ADRES1")
     *
     * @var string
     */
    protected $invAdres1;
    
    /**
     * @ORM\Column(type="string", name="INV_POSTCODE")
     *
     * @var string
     */
    protected $invPostcode;
    
    /**
     * @ORM\Column(type="string", name="INV_PLAATS")
     *
     * @var string
     */
    protected $invPlaats;
    
    /**
     * @ORM\Column(type="string", name="INV_LAND")
     *
     * @var string
     */
    protected $invLand;
    
    /**
     * @ORM\Column(type="string", name="INV_TELEFOON")
     *
     * @var string
     */
    protected $invTelefoon;
    
    /**
     * @ORM\Column(type="string", name="INV_EMAIL")
     *
     * @var string
     */
    protected $invEmail;
    
    /**
     * @ORM\Column(type="float", name="FIN_PREPAID_AMT")
     *
     * @var float
     */
    protected $finPrepaidAmt;

    /**
     * @ORM\Column(type="string", name="FIN_PAYMENT_METHOD")
     *
     * @var string
     */
    protected $finPaymentMethod;

    /**
     * @ORM\Column(type="string", name="FIN_BANK_BANKNAME")
     *
     * @var string
     */
    protected $finBankBankname;

    /**
     * @ORM\Column(type="string", name="FIN_BANK_HOLDER")
     *
     * @var string
     */
    protected $finBankHolder;

    /**
     * @ORM\Column(type="string", name="FIN_BANK_IBAN")
     *
     * @var string
     */
    protected $finBankIban;

    /**
     * @ORM\Column(type="string", name="FIN_BANK_BIC")
     *
     * @var string
     */
    protected $finBankBic;

    /**
     * @ORM\Column(type="string", name="FIN_BANK_COUNTRY")
     *
     * @var string
     */
    protected $finBankCountry;
    
    /**
     * @ORM\Column(type="integer", name="NUM_LINES")
     *
     * @var int
     */
    protected $numLines;
    
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
        $this->omschrijving = '';
        $this->remark = '';
        $this->locatiecode = '';
        $this->relCode = '';
        $this->delNaam = '';
        $this->delAanspreektitel = '';
        $this->delAdres1 = '';
        $this->delPostcode = '';
        $this->delPlaats = '';
        $this->delLand = '';
        $this->delTelefoon = '';
        $this->delEmail = '';
        $this->delMethod = '';
        $this->finPrepaidAmt = 0;
        $this->finPaymentMethod = '';
        $this->finBankBankname = '';
        $this->finBankHolder = '';
        $this->finBankIban = '';
        $this->finBankBic = '';
        $this->finBankCountry = '';
        $this->numLines = 0;
        $this->syscreated = new \DateTime();
        $this->sysmodified = $this->syscreated;
        $this->status = 0;
        $this->statusLog = "0";
    }
    
    public function getArrayCopy()
    {
        return array(
            'ID'                    => $this->getId(),
            'REFERENTIE'            => $this->getReferentie(),
            'OMSCHRIJVING'          => $this->getOmschrijving(),
            'REMARK'                => $this->getRemark(),
            'LOCATIECODE'           => $this->getLocatiecode(),
            'REL_CODE'              => $this->getRelCode(),
            'DEL_NAAM'              => $this->getDelNaam(),
            'DEL_AANSPREEKTITEL'    => $this->getDelAanspreektitel(),
            'DEL_ADRES1'            => $this->getDelAdres1(),
            'DEL_POSTCODE'          => $this->getDelPostcode(),
            'DEL_PLAATS'            => $this->getDelPlaats(),
            'DEL_LAND'              => $this->getDelLand(),
            'DEL_TELEFOON'          => $this->getDelTelefoon(),
            'DEL_EMAIL'             => $this->getDelEmail(),
            'DEL_METHOD'            => $this->getDelMethod(),
            'INV_NAAM'              => $this->getInvNaam(),
            'INV_AANSPREEKTITEL'    => $this->getInvAanspreektitel(),
            'INV_ADRES1'            => $this->getInvAdres1(),
            'INV_POSTCODE'          => $this->getInvPostcode(),
            'INV_PLAATS'            => $this->getInvPlaats(),
            'INV_LAND'              => $this->getInvLand(),
            'INV_TELEFOON'          => $this->getInvTelefoon(),
            'INV_EMAIL'             => $this->getInvEmail(),
            'FIN_PREPAID_AMT'       => $this->getFinPrepaidAmt(),
            'FIN_PAYMENT_METHOD'    => $this->getFinPaymentMethod(),
            'FIN_BANK_BANKNAME'     => $this->getFinBankBankname(),
            'FIN_BANK_HOLDER'       => $this->getFinBankHolder(),
            'FIN_BANK_IBAN'         => $this->getFinBankIban(),
            'FIN_BANK_BIC'          => $this->getFinBankBic(),
            'FIN_BANK_COUNTRY'      => $this->getFinBankCountry(),
            'NUM_LINES'             => $this->getNumLines(),
            'SYSCREATED'            => $this->getSyscreated(),
            'SYSMODIFIED'           => $this->getSysmodified(),
            'STATUS'                => $this->getStatus(),
            'STATUSLOG'             => $this->getStatusLog(),
        );
    }
    
    public function exchangeArray($data)
    {
        if (isset($data['REFERENTIE'])) {
            $this->setReferentie($data['REFERENTIE']);
        }
        if (isset($data['OMSCHRIJVING'])) {
            $this->setOmschrijving($data['OMSCHRIJVING']);
        }
        if (isset($data['REMARK'])) {
            $this->setRemark($data['REMARK']);
        }
        if (isset($data['LOCATIECODE'])) {
            $this->setLocatiecode($data['LOCATIECODE']);
        }
        if (isset($data['REL_CODE'])) {
            $this->setRelCode($data['REL_CODE']);
        }
        if (isset($data['DEL_NAAM'])) {
            $this->setDelNaam($data['DEL_NAAM']);
        }
        if (isset($data['DEL_AANSPREEKTITEL'])) {
            $this->setDelAanspreektitel($data['DEL_AANSPREEKTITEL']);
        }
        if (isset($data['DEL_ADRES1'])) {
            $this->setDelAdres1($data['DEL_ADRES1']);
        }
        if (isset($data['DEL_POSTCODE'])) {
            $this->setDelPostcode($data['DEL_POSTCODE']);
        }
        if (isset($data['DEL_PLAATS'])) {
            $this->setDelPlaats($data['DEL_PLAATS']);
        }
        if (isset($data['DEL_LAND'])) {
            $this->setDelLand($data['DEL_LAND']);
        }
        if (isset($data['DEL_TELEFOON'])) {
            $this->setDelTelefoon($data['DEL_TELEFOON']);
        }
        if (isset($data['DEL_EMAIL'])) {
            $this->setDelEmail($data['DEL_EMAIL']);
        }
        if (isset($data['DEL_METHOD'])) {
            $this->setDelMethod($data['DEL_METHOD']);
        }
        if (isset($data['INV_NAAM'])) {
            $this->setInvNaam($data['INV_NAAM']);
        }
        if (isset($data['INV_AANSPREEKTITEL'])) {
            $this->setInvAanspreektitel($data['INV_AANSPREEKTITEL']);
        }
        if (isset($data['INV_ADRES1'])) {
            $this->setInvAdres1($data['INV_ADRES1']);
        }
        if (isset($data['INV_POSTCODE'])) {
            $this->setInvPostcode($data['INV_POSTCODE']);
        }
        if (isset($data['INV_PLAATS'])) {
            $this->setInvPlaats($data['INV_PLAATS']);
        }
        if (isset($data['INV_LAND'])) {
            $this->setInvLand($data['INV_LAND']);
        }
        if (isset($data['INV_TELEFOON'])) {
            $this->setInvTelefoon($data['INV_TELEFOON']);
        }
        if (isset($data['INV_EMAIL'])) {
            $this->setInvEmail($data['INV_EMAIL']);
        }
        if (isset($data['FIN_PREPAID_AMT'])) {
            $this->setFinPrepaidAmt($data['FIN_PREPAID_AMT']);
        }
        if (isset($data['FIN_PAYMENT_METHOD'])) {
            $this->setFinPaymentMethod($data['FIN_PAYMENT_METHOD']);
        }
        if (isset($data['FIN_BANK_BANKNAME'])) {
            $this->setFinBankBankname($data['FIN_BANK_BANKNAME']);
        }
        if (isset($data['FIN_BANK_HOLDER'])) {
            $this->setFinBankHolder($data['FIN_BANK_HOLDER']);
        }
        if (isset($data['FIN_BANK_IBAN'])) {
            $this->setFinBankIban($data['FIN_BANK_IBAN']);
        }
        if (isset($data['FIN_BANK_BIC'])) {
            $this->setFinBankBic($data['FIN_BANK_BIC']);
        }
        if (isset($data['FIN_BANK_COUNTRY'])) {
            $this->setFinBankCountry($data['FIN_BANK_COUNTRY']);
        }
        if (isset($data['NUM_LINES'])) {
            $this->setNumLines($data['NUM_LINES']);
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
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     *
     * @param $omschrijving
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getRemark()
    {
        return $this->remark;
    }
    
    /**
     *
     * @param
     *            $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
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
    public function getRelCode()
    {
        return $this->relCode;
    }

    /**
     *
     * @param $relCode
     */
    public function setRelCode($relCode)
    {
        $this->relCode = $relCode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelNaam()
    {
        return $this->delNaam;
    }

    /**
     *
     * @param $delNaam
     */
    public function setDelNaam($delNaam)
    {
        $this->delNaam = substr($delNaam, 0, 50);
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelAanspreektitel()
    {
        return $this->delAanspreektitel;
    }

    /**
     *
     * @param $delAanspreektitel
     */
    public function setDelAanspreektitel($delAanspreektitel)
    {
        $this->delAanspreektitel = $delAanspreektitel;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelAdres1()
    {
        return $this->delAdres1;
    }

    /**
     *
     * @param $delAdres1
     */
    public function setDelAdres1($delAdres1)
    {
        $this->delAdres1 = $delAdres1;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelPostcode()
    {
        return $this->delPostcode;
    }

    /**
     *
     * @param $delPostcode
     */
    public function setDelPostcode($delPostcode)
    {
        $this->delPostcode = $delPostcode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelPlaats()
    {
        return $this->delPlaats;
    }

    /**
     *
     * @param $delPlaats
     */
    public function setDelPlaats($delPlaats)
    {
        $this->delPlaats = $delPlaats;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelLand()
    {
        return $this->delLand;
    }

    /**
     *
     * @param $delLand
     */
    public function setDelLand($delLand)
    {
        $this->delLand = $delLand;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelTelefoon()
    {
        return $this->delTelefoon;
    }

    /**
     *
     * @param $delTelefoon
     */
    public function setDelTelefoon($delTelefoon)
    {
        $this->delTelefoon = $delTelefoon;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelEmail()
    {
        return $this->delEmail;
    }

    /**
     *
     * @param $delEmail
     */
    public function setDelEmail($delEmail)
    {
        $this->delEmail = $delEmail;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getDelMethod()
    {
        return $this->delMethod;
    }

    /**
     *
     * @param $delMethod
     */
    public function setDelMethod($delMethod)
    {
        $this->delMethod = $delMethod;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvNaam()
    {
        return $this->invNaam;
    }

    /**
     *
     * @param $invNaam
     */
    public function setInvNaam($invNaam)
    {
        $this->invNaam = substr($invNaam, 0, 50);
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvAanspreektitel()
    {
        return $this->invAanspreektitel;
    }

    /**
     *
     * @param $invAanspreektitel
     */
    public function setInvAanspreektitel($invAanspreektitel)
    {
        $this->invAanspreektitel = $invAanspreektitel;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvAdres1()
    {
        return $this->invAdres1;
    }

    /**
     *
     * @param $invAdres1
     */
    public function setInvAdres1($invAdres1)
    {
        $this->invAdres1 = $invAdres1;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvPostcode()
    {
        return $this->invPostcode;
    }

    /**
     *
     * @param $invPostcode
     */
    public function setInvPostcode($invPostcode)
    {
        $this->invPostcode = $invPostcode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvPlaats()
    {
        return $this->invPlaats;
    }

    /**
     *
     * @param $invPlaats
     */
    public function setInvPlaats($invPlaats)
    {
        $this->invPlaats = $invPlaats;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvLand()
    {
        return $this->invLand;
    }

    /**
     *
     * @param $invLand
     */
    public function setInvLand($invLand)
    {
        $this->invLand = $invLand;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvTelefoon()
    {
        return $this->invTelefoon;
    }

    /**
     *
     * @param $invTelefoon
     */
    public function setInvTelefoon($invTelefoon)
    {
        $this->invTelefoon = $invTelefoon;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getInvEmail()
    {
        return $this->invEmail;
    }

    /**
     *
     * @param $invEmail
     */
    public function setInvEmail($invEmail)
    {
        $this->invEmail = $invEmail;
        return $this;
    }
 

    /**
     *
     * @return the float
     */
    public function getFinPrepaidAmt()
    {
        return $this->finPrepaidAmt;
    }

    /**
     *
     * @param float $finPrepaidAmt            
     */
    public function setFinPrepaidAmt($finPrepaidAmt)
    {
        $this->finPrepaidAmt = $finPrepaidAmt;
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
     * @return the $finBankBankname
     */
    public function getFinBankBankname()
    {
        return $this->finBankBankname;
    }

    /**
     * @param string $finBankBankname
     */
    public function setFinBankBankname($finBankBankname)
    {
        $this->finBankBankname = $finBankBankname;
    }

    /**
     * @return the $finBankHolder
     */
    public function getFinBankHolder()
    {
        return $this->finBankHolder;
    }

    /**
     * @param string $finBankHolder
     */
    public function setFinBankHolder($finBankHolder)
    {
        $this->finBankHolder = $finBankHolder;
    }

    /**
     * @return the $finBankIban
     */
    public function getFinBankIban()
    {
        return $this->finBankIban;
    }

    /**
     * @param string $finBankIban
     */
    public function setFinBankIban($finBankIban)
    {
        $this->finBankIban = $finBankIban;
    }

    /**
     * @return the $finBankBic
     */
    public function getFinBankBic()
    {
        return $this->finBankBic;
    }

    /**
     * @param string $finBankBic
     */
    public function setFinBankBic($finBankBic)
    {
        $this->finBankBic = $finBankBic;
    }

    /**
     * @return the $finBankCountry
     */
    public function getFinBankCountry()
    {
        return $this->finBankCountry;
    }

    /**
     * @param string $finBankCountry
     */
    public function setFinBankCountry($finBankCountry)
    {
        $this->finBankCountry = $finBankCountry;
    }

    /**
     * @return the $numLines
     */
    public function getNumLines()
    {
        return $this->numLines;
    }

    /**
     * @param number $numLines
     */
    public function setNumLines($numLines)
    {
        $this->numLines = $numLines;
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
