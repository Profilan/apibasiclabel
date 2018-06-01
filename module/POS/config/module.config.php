<?php
return array(
    'service_manager' => array(
        'aliases' => array(
            'Levering\\Mapper' => 'POS\\V1\\Rest\\Levering\\LeveringMapper',
            'Inkooporder\\Mapper' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderMapper',
            'InkooporderRegel\\Mapper' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelMapper',
            'Inkoopontvangst\\Mapper' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstMapper',
            'Voorraadcorrectie\\Mapper' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieMapper',
            'Leverancier\\Mapper' => 'POS\\V1\\Rest\\Leverancier\\LeverancierMapper',
        ),
        'factories' => array(
            'POS\\V1\\Rest\\Levering\\LeveringResource' => 'POS\\V1\\Rest\\Levering\\LeveringResourceFactory',
            'POS\\V1\\Rest\\Levering\\LeveringMapper' => 'POS\\V1\\Rest\\Levering\\LeveringMapperFactory',
            'POS\\V1\\Rest\\Inkooporder\\InkooporderResource' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderResourceFactory',
            'POS\\V1\\Rest\\Inkooporder\\InkooporderMapper' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderMapperFactory',
            'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelResource' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelResourceFactory',
            'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelMapper' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelMapperFactory',
            'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstResource' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstResourceFactory',
            'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstMapper' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstMapperFactory',
            'POS\\V1\\Rest\\Leverancier\\LeverancierResource' => 'POS\\V1\\Rest\\Leverancier\\LeverancierResourceFactory',
            'POS\\V1\\Rest\\Leverancier\\LeverancierMapper' => 'POS\\V1\\Rest\\Leverancier\\LeverancierMapperFactory',
            'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieResource' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieResourceFactory',
            'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieMapper' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieMapperFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'basiclabel.rest.levering' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/levering[/:levering_id]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\Levering\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.inkooporder' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/inkooporder[/:inkooporder_id]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\Inkooporder\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.inkooporder-regel' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/inkooporder-regel[/:inkooporder_regel_id]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\InkooporderRegel\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.inkoopontvangst' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/inkoopontvangst[/:inkoopontvangst_id]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\Inkoopontvangst\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.leverancier' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/leverancier[/:suppliercode]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\Leverancier\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.voorraadcorrectie' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/voorraadcorrectie[/:voorraadcorrectie_id]',
                    'defaults' => array(
                        'controller' => 'POS\\V1\\Rest\\Voorraadcorrectie\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'basiclabel.rest.levering',
            1 => 'basiclabel.rest.inkooporder',
            2 => 'basiclabel.rest.inkooporder-regel',
            3 => 'basiclabel.rest.inkoopontvangst',
            4 => 'basiclabel.rest.leverancier',
            5 => 'basiclabel.rest.voorraadcorrectie',
        ),
    ),
    'zf-rest' => array(
        'POS\\V1\\Rest\\Levering\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\Levering\\LeveringResource',
            'route_name' => 'basiclabel.rest.levering',
            'route_identifier_name' => 'levering_id',
            'collection_name' => 'levering',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
                1 => 'ITEMCODE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\Levering\\LeveringEntity',
            'collection_class' => 'POS\\V1\\Rest\\Levering\\LeveringCollection',
            'service_name' => 'Levering',
        ),
        'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderResource',
            'route_name' => 'basiclabel.rest.inkooporder',
            'route_identifier_name' => 'inkooporder_id',
            'collection_name' => 'inkooporder',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderEntity',
            'collection_class' => 'POS\\V1\\Rest\\Inkooporder\\InkooporderCollection',
            'service_name' => 'Inkooporder',
        ),
        'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelResource',
            'route_name' => 'basiclabel.rest.inkooporder-regel',
            'route_identifier_name' => 'inkooporder_regel_id',
            'collection_name' => 'inkooporder_regel',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelEntity',
            'collection_class' => 'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelCollection',
            'service_name' => 'InkooporderRegel',
        ),
        'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstResource',
            'route_name' => 'basiclabel.rest.inkoopontvangst',
            'route_identifier_name' => 'inkoopontvangst_id',
            'collection_name' => 'inkoopontvangst',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
                1 => 'ITEMCODE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstEntity',
            'collection_class' => 'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstCollection',
            'service_name' => 'Inkoopontvangst',
        ),
        'POS\\V1\\Rest\\Leverancier\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\Leverancier\\LeverancierResource',
            'route_name' => 'basiclabel.rest.leverancier',
            'route_identifier_name' => 'suppliercode',
            'collection_name' => 'leverancier',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\Leverancier\\LeverancierEntity',
            'collection_class' => 'POS\\V1\\Rest\\Leverancier\\LeverancierCollection',
            'service_name' => 'Leverancier',
        ),
        'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
            'listener' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieResource',
            'route_name' => 'basiclabel.rest.voorraadcorrectie',
            'route_identifier_name' => 'voorraadcorrectie_id',
            'collection_name' => 'voorraadcorrectie',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'ITEMCODE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieEntity',
            'collection_class' => 'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieCollection',
            'service_name' => 'Voorraadcorrectie',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'POS\\V1\\Rest\\Levering\\Controller' => 'HalJson',
            'POS\\V1\\Rest\\Inkooporder\\Controller' => 'HalJson',
            'POS\\V1\\Rest\\InkooporderRegel\\Controller' => 'HalJson',
            'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => 'HalJson',
            'POS\\V1\\Rest\\Leverancier\\Controller' => 'HalJson',
            'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'POS\\V1\\Rest\\Levering\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'POS\\V1\\Rest\\Leverancier\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'POS\\V1\\Rest\\Levering\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'POS\\V1\\Rest\\Leverancier\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'POS\\V1\\Rest\\Levering\\LeveringEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.levering',
                'route_identifier_name' => 'levering_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\Levering\\LeveringCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.levering',
                'route_identifier_name' => 'levering_id',
                'is_collection' => true,
            ),
            'POS\\V1\\Rest\\Inkooporder\\InkooporderEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkooporder',
                'route_identifier_name' => 'inkooporder_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\Inkooporder\\InkooporderCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkooporder',
                'route_identifier_name' => 'inkooporder_id',
                'is_collection' => true,
            ),
            'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkooporder-regel',
                'route_identifier_name' => 'inkooporder_regel_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\InkooporderRegel\\InkooporderRegelCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkooporder-regel',
                'route_identifier_name' => 'inkooporder_regel_id',
                'is_collection' => true,
            ),
            'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkoopontvangst',
                'route_identifier_name' => 'inkoopontvangst_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\Inkoopontvangst\\InkoopontvangstCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.inkoopontvangst',
                'route_identifier_name' => 'inkoopontvangst_id',
                'is_collection' => true,
            ),
            'POS\\V1\\Rest\\Leverancier\\LeverancierEntity' => array(
                'entity_identifier_name' => 'SUPPLIERCODE',
                'route_name' => 'basiclabel.rest.leverancier',
                'route_identifier_name' => 'suppliercode',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\Leverancier\\LeverancierCollection' => array(
                'entity_identifier_name' => 'SUPPLIERCODE',
                'route_name' => 'basiclabel.rest.leverancier',
                'route_identifier_name' => 'suppliercode',
                'is_collection' => true,
            ),
            'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.voorraadcorrectie',
                'route_identifier_name' => 'voorraadcorrectie_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'POS\\V1\\Rest\\Voorraadcorrectie\\VoorraadcorrectieCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.voorraadcorrectie',
                'route_identifier_name' => 'voorraadcorrectie_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'POS\\V1\\Rest\\Levering\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\Levering\\Validator',
        ),
        'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\Inkooporder\\Validator',
        ),
        'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\InkooporderRegel\\Validator',
        ),
        'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\Inkoopontvangst\\Validator',
        ),
        'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\Voorraadcorrectie\\Validator',
        ),
        'POS\\V1\\Rest\\Leverancier\\Controller' => array(
            'input_filter' => 'POS\\V1\\Rest\\Leverancier\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'POS\\V1\\Rest\\Inkooporder\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '10000000',
                        ),
                    ),
                    2 => array(
                        'name' => 'Zend\\Validator\\LessThan',
                        'options' => array(
                            'max' => '99999999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'REFERENTIE',
                'description' => 'varchar(30)
Unieke Inkooporderreferentie vanuit CMS',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'OMSCHRIJVING',
                'description' => 'varchar(60)
Eigen omschrijving voor de Inkooporder',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '4',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'LOCATIECODE',
                'description' => 'varchar(4)
Locatie -> debiteur waaonder de Inkooporder in Exact komt te staan',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '4',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'MAGAZIJNCODE',
                'description' => 'varchar(4)
Betreft het magazijn waar de goederen afgeleverd  worden.',
            ),
            4 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int Systeem ID',
            ),
        ),
        'POS\\V1\\Rest\\InkooporderRegel\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '10000000',
                        ),
                    ),
                    2 => array(
                        'name' => 'Zend\\Validator\\LessThan',
                        'options' => array(
                            'max' => '99999999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'REFERENTIE',
                'description' => 'varchar(30)
Inkooporderreferentie vanuit CMS',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '30',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'ITEMCODE',
                'description' => 'varchar(30)
Artikelcode in order',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'QUANTITY',
                'description' => 'float
Aantal verkocht',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PRICE_GROSS',
                'description' => 'float
Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PRICE_NETT',
                'description' => 'float
Netto verkoopprijs 
(rekening houdend met BTW)',
            ),
            5 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '100',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DISCOUNT_TYPE',
                'description' => 'varchar(100)
Type korting
(indien van toepassing)',
            ),
            6 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ORDERLINE_DESCRIPTION',
                'description' => 'varchar(max)
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.',
            ),
            7 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(
                            'format' => 'Y-m-d H:i:s',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'DEL_DATE',
                'description' => 'datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel',
            ),
            8 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'id Systeem ID',
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '5',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_METHOD',
                'description' => 'varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen',
            ),
        ),
        'POS\\V1\\Rest\\Levering\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '10000000',
                        ),
                    ),
                    2 => array(
                        'name' => 'Zend\\Validator\\LessThan',
                        'options' => array(
                            'max' => '99999999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'REFERENTIE',
                'description' => 'varchar(30)
Orderreferentie vanuit CMS',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '4',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'LOCATIECODE',
                'description' => 'varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'QUANTITY',
                'description' => 'float
Aantal geleverd',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(
                            'format' => 'Y-m-d H:i:s',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'DEL_DATE',
                'description' => 'datetime
Datum waarop de levering heeft plaatsgevonden',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PRICE_GROSS',
                'description' => 'float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)',
            ),
            5 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PRICE_NETT',
                'description' => 'float
Netto verkoopprijs (rekening houdend met BTW)',
            ),
            6 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '100',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DISCOUNT_TYPE',
                'description' => 'varchar(100)
Type korting (indien van toepassing)',
            ),
            7 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'FULFILLED',
                'description' => 'tinyint
Zijn de artikelen geleverd?',
            ),
            8 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'FIN_PAYED',
                'description' => 'tinyint
Is deze regel betaald?',
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '2',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_PAYMENT_METHOD',
                'description' => 'varchar(2)
Betalingsconditie/methode: pin/kas/credit card',
            ),
            10 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '30',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ITEMCODE',
                'description' => 'varchar(30)
Artikelcode in levering',
            ),
            11 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int
Systeem ID',
            ),
        ),
        'POS\\V1\\Rest\\Inkoopontvangst\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '10000000',
                        ),
                    ),
                    2 => array(
                        'name' => 'Zend\\Validator\\LessThan',
                        'options' => array(
                            'max' => '99999999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'REFERENTIE',
                'description' => 'varchar(30)
Inkooporderreferentie vanuit CMS',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ITEMCODE',
                'description' => 'varchar(30)
Artikelcode in inkooporder',
            ),
            2 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ORDERLINE_DESCRIPTION',
                'description' => 'text
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '8',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'SUPPLIERCODE',
                'description' => 'varchar(4)
Leverancierscode',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'QUANTITY',
                'description' => 'float
Aantal besteld',
            ),
            5 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(
                            'format' => 'Y-m-d H:i:s',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'TRANS_DATE',
                'description' => 'datetime(YYYY-MM-DD HH:MM:SS)
Ontvangstdatum van de orderregel',
            ),
            6 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'TRANS_DESCRIPTION',
                'description' => 'varchar(60)
Omschrijving van de boeking',
            ),
            7 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'LOCATIECODE',
                'description' => 'varchar(4)
Betreft de locatie waarvoor de goederen besteld worden.',
            ),
            8 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int
Systeem ID',
            ),
        ),
        'POS\\V1\\Rest\\Voorraadcorrectie\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '30',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ITEMCODE',
                'description' => 'varchar(30)',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'QUANTITY',
                'description' => 'float',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '256',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'REMARKS',
                'description' => 'varchar(256)',
            ),
            3 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int
System ID',
            ),
        ),
        'POS\\V1\\Rest\\Leverancier\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '8',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'SUPPLIERCODE',
                'description' => 'varchar(8)
Leverancierscode',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '30',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'SUPPLIERNAME',
                'description' => 'varchar(30)',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '100',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ADDRESS',
                'description' => 'varchar(100)
Adresregel 1 in Exact (straat en huisnummer)',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '20',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'POSTCODE',
                'description' => 'varchar(20)',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '100',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'CITY',
                'description' => 'varchar(100)
City',
            ),
            5 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '100',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'CONTACTPERSON',
                'description' => 'varchar(100)
Contactpersoon',
            ),
            6 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'CONTACTEMAIL',
                'description' => 'varchar(128)
Emailadres van de contactpersoon',
            ),
            7 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '25',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'CONTACTPHONE',
                'description' => 'varchar(25)
Telefoonnummer van de contactpersoon',
            ),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'basiclabel_entities' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    0 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/Inkooporder',
                    1 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/InkooporderRegel',
                    2 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/Levering',
                    3 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/Inkoopontvangst',
                    4 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/Voorraadcorrectie',
                    5 => 'E:\\xampp\\htdocs\\apitest\\module\\POS\\config/../src/POS/V1/Rest/Leverancier',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'POS\\V1\\Rest\\Inkooporder' => 'basiclabel_entities',
                    'POS\\V1\\Rest\\InkooporderRegel' => 'basiclabel_entities',
                    'POS\\V1\\Rest\\Levering' => 'basiclabel_entities',
                    'POS\\V1\\Rest\\Inkoopontvangst' => 'basiclabel_entities',
                    'POS\\V1\\Rest\\Voorraadcorrectie' => 'basiclabel_entities',
                    'POS\\V1\\Rest\\Leverancier' => 'basiclabel_entities',
                ),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
            'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
            'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
            'POS\\V1\\Rest\\Leverancier\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
            'POS\\V1\\Rest\\Levering\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
            'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
