<?php
namespace Webshop\V1\Rest\Voorraad;

class VoorraadResourceFactory
{
    public function __invoke($services)
    {
        $resource = new VoorraadResource();
        $resource->setMapper($services->get('Voorraad\Mapper'));
        
        return $resource;
    }
}
