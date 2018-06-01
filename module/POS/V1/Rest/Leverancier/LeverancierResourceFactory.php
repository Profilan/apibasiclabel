<?php
namespace POS\V1\Rest\Leverancier;

class LeverancierResourceFactory
{
    public function __invoke($services)
    {
        $resource = new LeverancierResource();
        $resource->setMapper($services->get('Leverancier\Mapper'));
        
        return $resource;
    }
}
