<?php
namespace POS\V1\Rest\Inkooporder;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_WEB_IRKRG")
 */
class InkooporderEntity
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
     * @ORM\Column(type="string", name="LOCATIECODE")
     *
     * @var string
     */
    protected $locatiecode;

    /**
     * @ORM\Column(type="string", name="MAGAZIJNCODE")
     *
     * @var string
     */
    protected $magazijncode;

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
        $this->locatiecode = '';
        $this->magazijncode = '';
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
            'LOCATIECODE'           => $this->getLocatiecode(),
            'MAGAZIJNCODE'          => $this->getMagazijncode(),
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
        if (isset($data['LOCATIECODE'])) {
            $this->setLocatiecode($data['LOCATIECODE']);
        }
        if (isset($data['MAGAZIJNCODE'])) {
            $this->setLocatiecode($data['MAGAZIJNCODE']);
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
    public function getMagazijncode()
    {
        return $this->magazijncode;
    }
    
    /**
     *
     * @param $magazijncode
     */
    public function setMagazijncode($magazijncode)
    {
        $this->magazijncode = $magazijncode;
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
