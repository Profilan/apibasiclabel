<?php
namespace POS\V1\Rest\Levering;

class LeveringResourceFactory
{
    public function __invoke($services)
    {
        $resource = new LeveringResource();
        $resource->setMapper($services->get('Levering\Mapper'));
        
        return $resource;
    }
}
