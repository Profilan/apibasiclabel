<?php
namespace Webshop\V1\Rest\OrderRegel;

class OrderRegelMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new OrderRegelMapper($em);
    }
}
