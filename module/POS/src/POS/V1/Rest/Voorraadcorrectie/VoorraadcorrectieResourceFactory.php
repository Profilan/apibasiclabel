<?php
namespace POS\V1\Rest\Voorraadcorrectie;

class VoorraadcorrectieResourceFactory
{
    public function __invoke($services)
    {
        $resource = new VoorraadcorrectieResource();
        $resource->setMapper($services->get('Voorraadcorrectie\Mapper'));
        
        return $resource;
    }
}
