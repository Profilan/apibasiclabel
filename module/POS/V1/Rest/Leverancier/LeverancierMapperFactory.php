<?php
namespace POS\V1\Rest\Leverancier;

class LeverancierMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new LeverancierMapper($em);
    }
}
