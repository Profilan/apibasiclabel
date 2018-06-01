<?php
namespace Webshop\V1\Rest\Order;

class OrderResourceFactory
{
    public function __invoke($services)
    {
        $resource = new OrderResource();
        $resource->setMapper($services->get('Order\Mapper'));
        
        return $resource;
    }
}
