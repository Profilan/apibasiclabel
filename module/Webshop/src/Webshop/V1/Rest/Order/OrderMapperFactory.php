<?php
namespace Webshop\V1\Rest\Order;

class OrderMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new OrderMapper($em);
    }
}
