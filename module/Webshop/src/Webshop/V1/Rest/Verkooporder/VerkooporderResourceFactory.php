<?php
namespace Webshop\V1\Rest\Verkooporder;

class VerkooporderResourceFactory
{
    public function __invoke($services)
    {
        $resource = new VerkooporderResource();
        $resource->setMapper($services->get('Verkooporder\Mapper'));
        
        return $resource;
    }
}
