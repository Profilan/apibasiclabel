<?php
namespace POS\V1\Rest\Inkooporder;

class InkooporderMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new InkooporderMapper($em);
    }
}
