<?php
namespace Webshop\V1\Rest\Artikel;

class ArtikelResourceFactory
{
    public function __invoke($services)
    {
        $resource = new ArtikelResource();
        $resource->setMapper($services->get('Artikel\Mapper'));
        
        return $resource;
    }
}
