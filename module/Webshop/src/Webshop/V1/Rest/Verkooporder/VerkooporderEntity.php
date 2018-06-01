<?php
namespace Webshop\V1\Rest\Verkooporder;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_vw_WEB_ORKRG")
 */
class VerkooporderEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="ORDERNR")
     *
     * @var string
     */
    protected $ordernr;

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
     * @ORM\Column(type="string", name="ORDERSTATUS")
     *
     * @var string
     */
    protected $orderstatus;
    
    /**
     * @ORM\Column(type="float", name="OPENSTAAND_BEDRAG")
     *
     * @var float
     */
    protected $openstaandBedrag;

    /**
     * @ORM\Column(type="string", name="ORD_SOORT")
     *
     * @var string
     */
    protected $ordSoort;

    /**
     * @ORM\Column(type="string", name="REL_CODE")
     *
     * @var string
     */
    protected $relCode;
    
    /**
     * @ORM\Column(type="string", name="FIN_PAYMENT_METHOD")
     * 
     * @var string
     */
    protected $finPaymentMethod;

    /**
     * @ORM\Column(type="string", name="TRACKTRACE")
     *
     * @var string
     */
    protected $tracktrace;
    
    /**
     * @ORM\Column(type="datetime", name="SYSMODIFIED")
     *
     * @var DateTime
     */
    protected $sysmodified;
    
    public function __construct()
    {
        $this->referentie = '';
        $this->omschrijving = '';
        $this->remark = '';
        $this->locatiecode = '';
        $this->delNaam = '';
        $this->delAanspreektitel = '';
        $this->delAdres1 = '';
        $this->delPostcode = '';
        $this->delPlaats = '';
        $this->delLand = '';
        $this->delTelefoon = '';
        $this->delEmail = '';
        $this->invNaam = '';
        $this->invAanspreektitel = '';
        $this->invAdres1 = '';
        $this->invPostcode = '';
        $this->invPlaats = '';
        $this->invLand = '';
        $this->invTelefoon = '';
        $this->invEmail = '';
        $this->orderstatus = '';
        $this->openstaandBedrag = 0;
        $this->ordSoort = '';
        $this->finPaymentMethod = '';
        $this->tracktrace = '';
    }

    public function getArrayCopy()
    {
        return array(
            'ORDERNR'               => $this->getOrdernr(),
            'REFERENTIE'            => $this->getReferentie(),
            'OMSCHRIJVING'          => $this->getOmschrijving(),
            'REMARK'                => $this->getRemark(),
            'LOCATIECODE'           => $this->getLocatiecode(),
            'DEL_NAAM'              => $this->getDelNaam(),
            'DEL_AANSPREEKTITEL'    => $this->getDelAanspreektitel(),
            'DEL_ADRES1'            => $this->getDelAdres1(),
            'DEL_POSTCODE'          => $this->getDelPostcode(),
            'DEL_PLAATS'            => $this->getDelPlaats(),
            'DEL_LAND'              => $this->getDelLand(),
            'DEL_TELEFOON'          => $this->getDelTelefoon(),
            'DEL_EMAIL'             => $this->getDelEmail(),
            'INV_NAAM'              => $this->getInvNaam(),
            'INV_AANSPREEKTITEL'    => $this->getInvAanspreektitel(),
            'INV_ADRES1'            => $this->getInvAdres1(),
            'INV_POSTCODE'          => $this->getInvPostcode(),
            'INV_PLAATS'            => $this->getInvPlaats(),
            'INV_LAND'              => $this->getInvLand(),
            'INV_TELEFOON'          => $this->getInvTelefoon(),
            'INV_EMAIL'             => $this->getInvEmail(),
            'ORDERSTATUS'           => $this->getOrderstatus(),
            'OPENSTAAND_BEDRAG'     => $this->getOpenstaandBedrag(),
            'ORD_SOORT'             => $this->getOrdSoort(),
            'REL_CODE'              => $this->getRelCode(),
            'FIN_PAYMENT_METHOD'    => $this->getFinPaymentMethod(),
            'TRACKTRACE'            => $this->getTracktrace(),
            'SYSMODIFIED'           => $this->getSysmodified(),
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
        if (isset($data['ORDERSTATUS'])) {
            $this->setOrderstatus($data['ORDERSTATUS']);
        }
        if (isset($data['OPENSTAAND_BEDRAG'])) {
            $this->setOpenstaandBedrag($data['OPENSTAAND_BEDRAG']);
        }
        if (isset($data['ORD_SOORT'])) {
            $this->setOrdSoort($data['ORD_SOORT']);
        }
        if (isset($data['REL_CODE'])) {
            $this->setRelCode($data['REL_CODE']);
        }
        if (isset($data['FIN_PAYMENT_METHOD'])) {
            $this->setFinPaymentMethod($data['FIN_PAYMENT_METHOD']);
        }
        if (isset($data['TRACKTRACE'])) {
            $this->setTracktrace($data['TRACKTRACE']);
        }
    }

    /**
     *
     * @return the string
     */
    public function getOrdernr()
    {
        return $this->ordernr;
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
        $this->delNaam = $delNaam;
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
        $this->invNaam = $invNaam;
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
     * @return the string
     */
    public function getOrderstatus()
    {
        return $this->orderstatus;
    }

    /**
     *
     * @param $orderstatus
     */
    public function setOrderstatus($orderstatus)
    {
        $this->orderstatus = $orderstatus;
        return $this;
    }

    /**
     *
     * @return the float
     */
    public function getOpenstaandBedrag()
    {
        return $this->openstaandBedrag;
    }

    /**
     *
     * @param float $openstaandBedrag            
     */
    public function setOpenstaandBedrag($openstaandBedrag)
    {
        $this->openstaandBedrag = $openstaandBedrag;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getOrdSoort()
    {
        return $this->ordSoort;
    }
    
    /**
     *
     * @param $ordSoort
     */
    public function setOrdSoort($ordSoort)
    {
        $this->ordSoort = $ordSoort;
        return $this;
    }
    
    /**
     * @return the $relCode
     */
    public function getRelCode()
    {
        return $this->relCode;
    }

    /**
     * @param string $relCode
     */
    public function setRelCode($relCode)
    {
        $this->relCode = $relCode;
        return $this;
    }
    /**
     * @return the $finPaymentMethod
     */
    public function getFinPaymentMethod()
    {
        return $this->finPaymentMethod;
    }

    /**
     * @param string $finPaymentMethod
     */
    public function setFinPaymentMethod($finPaymentMethod)
    {
        $this->finPaymentMethod = $finPaymentMethod;
        return $this;
    }
    /**
     * @return the $tracktrace
     */
    public function getTracktrace()
    {
        return $this->tracktrace;
    }

    /**
     * @param string $tracktrace
     */
    public function setTracktrace($tracktrace)
    {
        $this->tracktrace = $tracktrace;
        return $this;
    }
    /**
     * @return DateTime $sysmodified
     */
    public function getSysmodified()
    {
        return $this->sysmodified->format('Y-m-d H:i:s');
    }




    
    
}
