<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="EEK_API_URLS")
 */
class Url
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", name="Id")
     *
     * @var integer
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", name="Name")
     *
     * @var string
     */
    protected $urlName;
    
    /**
     * @ORM\Column(type="string", name="Address")
     * 
     * @var string
     */
    protected $address;
    
    public function __construct()
    {
       
    }
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $urlName
     */
    public function getUrlName()
    {
        return $this->urlName;
    }

    /**
     * @param string $urlName
     */
    public function setUrlName($urlName)
    {
        $this->urlName = $urlName;
        return $this;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}