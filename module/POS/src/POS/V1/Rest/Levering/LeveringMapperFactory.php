<?php
namespace POS\V1\Rest\Levering;

class LeveringMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new LeveringMapper($em);
    }
}
