<?php
namespace POS\V1\Rest\Voorraadcorrectie;

class VoorraadcorrectieMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new VoorraadcorrectieMapper($em);
    }
}
