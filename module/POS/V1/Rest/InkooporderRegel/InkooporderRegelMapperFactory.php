<?php
namespace POS\V1\Rest\InkooporderRegel;

class InkooporderRegelMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new InkooporderRegelMapper($em);
    }
}
