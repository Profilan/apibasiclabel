<?php
namespace Webshop\V1\Rest\VerkooporderRegel;

class VerkooporderRegelMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new VerkooporderRegelMapper($em);
    }
}
