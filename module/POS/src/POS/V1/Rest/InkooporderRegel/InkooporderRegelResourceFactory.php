<?php
namespace POS\V1\Rest\InkooporderRegel;

class InkooporderRegelResourceFactory
{
    public function __invoke($services)
    {
        $resource = new InkooporderRegelResource();
        $resource->setMapper($services->get('InkooporderRegel\Mapper'));
        
        return $resource;
    }
}
