<?php
namespace Webshop\V1\Rest\Voorraad;

class VoorraadMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new VoorraadMapper($em);
    }
}
