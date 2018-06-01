<?php
namespace POS\V1\Rest\Leverancier;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="BL_vw_WEB_SUPPLIERS")
 */

class LeverancierEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="SUPPLIERCODE")
     *
     * @var string
     */
    protected $suppliercode;

    /**
     * @ORM\Column(type="string", name="SUPPLIERNAME")
     *
     * @var string
     */
    protected $suppliername;

    /**
     * @ORM\Column(type="string", name="ADDRESS")
     *
     * @var string
     */
    protected $address;

    /**
     * @ORM\Column(type="string", name="POSTCODE")
     *
     * @var string
     */
    protected $postcode;

    /**
     * @ORM\Column(type="string", name="CITY")
     *
     * @var string
     */
    protected $city;

    /**
     * @ORM\Column(type="string", name="CONTACTPERSON")
     *
     * @var string
     */
    protected $contactperson;

    /**
     * @ORM\Column(type="string", name="CONTACTEMAIL")
     *
     * @var string
     */
    protected $contactemail;

    /**
     * @ORM\Column(type="string", name="CONTACTPHONE")
     *
     * @var string
     */
    protected $contactphone;
    
    public function __construct()
    {
        $this->suppliername = '';
        $this->address = '';
        $this->postcode = '';
        $this->city = '';
        $this->contactperson = '';
        $this->contactemail = '';
        $this->contactphone = '';
    }
    
    public function getArrayCopy()
    {
        return array(
            'SUPPLIERCODE'      => $this->getSuppliercode(),
            'SUPPLIERNAME'      => $this->getSuppliername(),
            'ADDRESS'           => $this->getAddress(),
            'POSTCODE'          => $this->getPostcode(),
            'CITY'              => $this->getCity(),
            'CONTACTPERSON'     => $this->getContactperson(),
            'CONTACTEMAIL'      => $this->getContactemail(),
            'CONTACTPHONE'      => $this->getContactphone()
        );
    }
    
    public function exchangeArray($data)
    {
        if (isset($data['SUPPLIERNAME'])) {
            $this->setSuppliername($data['SUPPLIERNAME']);
        }
        if (isset($data['ADDRESS'])) {
            $this->setAddress($data['ADDRESS']);
        }
        if (isset($data['POSTCODE'])) {
            $this->setPostcode($data['POSTCODE']);
        }
        if (isset($data['CITY'])) {
            $this->setCity($data['CITY']);
        }
        if (isset($data['CONTACTPERSON'])) {
            $this->setContactperson($data['CONTACTPERSON']);
        }
        if (isset($data['CONTACTEMAIL'])) {
            $this->setContactemail($data['CONTACTEMAIL']);
        }
        if (isset($data['CONTACTPHONE'])) {
            $this->setContactphone($data['CONTACTPHONE']);
        }
        
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
     * @return the string
     */
    public function getSuppliername()
    {
        return $this->suppliername;
    }

    /**
     *
     * @param $suppliername
     */
    public function setSuppliername($suppliername)
    {
        $this->suppliername = $suppliername;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     *
     * @param $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *
     * @param $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getContactperson()
    {
        return $this->contactperson;
    }

    /**
     *
     * @param $contactperson
     */
    public function setContactperson($contactperson)
    {
        $this->contactperson = $contactperson;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }

    /**
     *
     * @param $contactemail
     */
    public function setContactemail($contactemail)
    {
        $this->contactemail = $contactemail;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getContactphone()
    {
        return $this->contactphone;
    }

    /**
     *
     * @param $contactphone
     */
    public function setContactphone($contactphone)
    {
        $this->contactphone = $contactphone;
        return $this;
    }
 
    
    
}
