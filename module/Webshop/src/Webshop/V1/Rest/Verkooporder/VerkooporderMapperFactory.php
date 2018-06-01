<?php
namespace Webshop\V1\Rest\Verkooporder;

class VerkooporderMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new VerkooporderMapper($em);
    }
}
