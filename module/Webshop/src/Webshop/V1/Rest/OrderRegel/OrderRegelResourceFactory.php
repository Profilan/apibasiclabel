<?php
namespace Webshop\V1\Rest\OrderRegel;

class OrderRegelResourceFactory
{
    public function __invoke($services)
    {
        $resource = new OrderRegelResource();
        $resource->setMapper($services->get('OrderRegel\Mapper'));
        
        return $resource;
    }
}
