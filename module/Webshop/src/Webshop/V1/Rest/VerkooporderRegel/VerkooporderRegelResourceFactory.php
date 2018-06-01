<?php
namespace Webshop\V1\Rest\VerkooporderRegel;

class VerkooporderRegelResourceFactory
{
    public function __invoke($services)
    {
        $resource = new VerkooporderRegelResource();
        $resource->setMapper($services->get('VerkooporderRegel\Mapper'));
        
        return $resource;
    }
}
