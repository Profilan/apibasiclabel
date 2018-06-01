<?php
namespace Webshop\V1\Rest\Artikel;

class ArtikelMapperFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        
        return new ArtikelMapper($em);
    }
}
