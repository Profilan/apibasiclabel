<?php
namespace POS\V1\Rest\Inkoopontvangst;

class InkoopontvangstResourceFactory
{
    public function __invoke($services)
    {
        $resource = new InkoopontvangstResource();
        $resource->setMapper($services->get('Inkoopontvangst\Mapper'));
        
        return $resource;
    }
}
