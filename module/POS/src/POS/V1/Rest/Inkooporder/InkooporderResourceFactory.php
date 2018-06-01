<?php
namespace POS\V1\Rest\Inkooporder;

class InkooporderResourceFactory
{
    public function __invoke($services)
    {
        $resource = new InkooporderResource();
        $resource->setMapper($services->get('Inkooporder\Mapper'));
        
        return $resource;
    }
}
