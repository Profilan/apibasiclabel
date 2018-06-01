<?php
return array(
    'service_manager' => array(
        'aliases' => array(
            'Artikel\\Mapper' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelMapper',
            'Order\\Mapper' => 'Webshop\\V1\\Rest\\Order\\OrderMapper',
            'OrderRegel\\Mapper' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelMapper',
            'Voorraad\\Mapper' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadMapper',
            'Verkooporder\\Mapper' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderMapper',
            'VerkooporderRegel\\Mapper' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelMapper',
        ),
        'factories' => array(
            'Webshop\\V1\\Rest\\Artikel\\ArtikelResource' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelResourceFactory',
            'Webshop\\V1\\Rest\\Artikel\\ArtikelMapper' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelMapperFactory',
            'Webshop\\V1\\Rest\\Order\\OrderResource' => 'Webshop\\V1\\Rest\\Order\\OrderResourceFactory',
            'Webshop\\V1\\Rest\\Order\\OrderMapper' => 'Webshop\\V1\\Rest\\Order\\OrderMapperFactory',
            'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelResource' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelResourceFactory',
            'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelMapper' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelMapperFactory',
            'Webshop\\V1\\Rest\\Voorraad\\VoorraadResource' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadResourceFactory',
            'Webshop\\V1\\Rest\\Voorraad\\VoorraadMapper' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadMapperFactory',
            'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderResource' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderResourceFactory',
            'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderMapper' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderMapperFactory',
            'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelResource' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelResourceFactory',
            'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelMapper' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelMapperFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'basiclabel.rest.artikel' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/artikel[/:artikel_id]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\Artikel\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.order' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/order[/:order_id]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\Order\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.order-regel' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/order-regel[/:order_regel_id]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\OrderRegel\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.voorraad' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/voorraad[/:itemcode]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\Voorraad\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.verkooporder' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/verkooporder[/:ORDERNR]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\Verkooporder\\Controller',
                    ),
                ),
            ),
            'basiclabel.rest.verkooporder-regel' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/verkooporder-regel[/:id]',
                    'defaults' => array(
                        'controller' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'basiclabel.rest.artikel',
            1 => 'basiclabel.rest.order',
            2 => 'basiclabel.rest.order-regel',
            3 => 'basiclabel.rest.voorraad',
            4 => 'basiclabel.rest.verkooporder',
            5 => 'basiclabel.rest.verkooporder-regel',
        ),
    ),
    'zf-rest' => array(
        'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelResource',
            'route_name' => 'basiclabel.rest.artikel',
            'route_identifier_name' => 'artikel_id',
            'collection_name' => 'artikel',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'ITEMCODE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\Artikel\\ArtikelCollection',
            'service_name' => 'Artikel',
        ),
        'Webshop\\V1\\Rest\\Order\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\Order\\OrderResource',
            'route_name' => 'basiclabel.rest.order',
            'route_identifier_name' => 'order_id',
            'collection_name' => 'order',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Webshop\\V1\\Rest\\Order\\OrderEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\Order\\OrderCollection',
            'service_name' => 'Order',
        ),
        'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelResource',
            'route_name' => 'basiclabel.rest.order-regel',
            'route_identifier_name' => 'order_regel_id',
            'collection_name' => 'order_regel',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'REFERENTIE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelCollection',
            'service_name' => 'OrderRegel',
        ),
        'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadResource',
            'route_name' => 'basiclabel.rest.voorraad',
            'route_identifier_name' => 'itemcode',
            'collection_name' => 'voorraad',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 500,
            'page_size_param' => 'limit',
            'entity_class' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\Voorraad\\VoorraadCollection',
            'service_name' => 'Voorraad',
        ),
        'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderResource',
            'route_name' => 'basiclabel.rest.verkooporder',
            'route_identifier_name' => 'ordernr',
            'collection_name' => 'verkooporder',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(
                0 => 'LOCATIECODE',
                1 => 'REL_CODE',
                2 => 'REFERENTIE',
                3 => 'DATE_START',
                4 => 'DATE_END',
            ),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderCollection',
            'service_name' => 'Verkooporder',
        ),
        'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
            'listener' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelResource',
            'route_name' => 'basiclabel.rest.verkooporder-regel',
            'route_identifier_name' => 'id',
            'collection_name' => 'verkooporder_regel',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(
                0 => 'ORDERNR',
                1 => 'REFERENTIE',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelEntity',
            'collection_class' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelCollection',
            'service_name' => 'VerkooporderRegel',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Webshop\\V1\\Rest\\Artikel\\Controller' => 'HalJson',
            'Webshop\\V1\\Rest\\Order\\Controller' => 'HalJson',
            'Webshop\\V1\\Rest\\OrderRegel\\Controller' => 'HalJson',
            'Webshop\\V1\\Rest\\Voorraad\\Controller' => 'HalJson',
            'Webshop\\V1\\Rest\\Verkooporder\\Controller' => 'HalJson',
            'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Order\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Order\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
            'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
                0 => 'application/vnd.basiclabel.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Webshop\\V1\\Rest\\Artikel\\ArtikelEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.artikel',
                'route_identifier_name' => 'artikel_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\Artikel\\ArtikelCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.artikel',
                'route_identifier_name' => 'artikel_id',
                'is_collection' => true,
            ),
            'Webshop\\V1\\Rest\\Order\\OrderEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.order',
                'route_identifier_name' => 'order_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\Order\\OrderCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.order',
                'route_identifier_name' => 'order_id',
                'is_collection' => true,
            ),
            'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.order-regel',
                'route_identifier_name' => 'order_regel_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\OrderRegel\\OrderRegelCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.order-regel',
                'route_identifier_name' => 'order_regel_id',
                'is_collection' => true,
            ),
            'Webshop\\V1\\Rest\\Voorraad\\VoorraadEntity' => array(
                'entity_identifier_name' => 'ITEMCODE',
                'route_name' => 'basiclabel.rest.voorraad',
                'route_identifier_name' => 'itemcode',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\Voorraad\\VoorraadCollection' => array(
                'entity_identifier_name' => 'ITEMCODE',
                'route_name' => 'basiclabel.rest.voorraad',
                'route_identifier_name' => 'itemcode',
                'is_collection' => true,
            ),
            'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderEntity' => array(
                'entity_identifier_name' => 'ORDERNR',
                'route_name' => 'basiclabel.rest.verkooporder',
                'route_identifier_name' => 'ordernr',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\Verkooporder\\VerkooporderCollection' => array(
                'entity_identifier_name' => 'ORDERNR',
                'route_name' => 'basiclabel.rest.verkooporder',
                'route_identifier_name' => 'ordernr',
                'is_collection' => true,
            ),
            'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelEntity' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.verkooporder-regel',
                'route_identifier_name' => 'id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Webshop\\V1\\Rest\\VerkooporderRegel\\VerkooporderRegelCollection' => array(
                'entity_identifier_name' => 'ID',
                'route_name' => 'basiclabel.rest.verkooporder-regel',
                'route_identifier_name' => 'id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\Artikel\\Validator',
        ),
        'Webshop\\V1\\Rest\\Order\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\Order\\Validator',
        ),
        'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\OrderRegel\\Validator',
        ),
        'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\Voorraad\\Validator',
        ),
        'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\Verkooporder\\Validator',
        ),
        'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
            'input_filter' => 'Webshop\\V1\\Rest\\VerkooporderRegel\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Webshop\\V1\\Rest\\Artikel\\Validator' => array(
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
                'description' => 'varchar(30)
Unieke code van het artikel',
                'error_message' => 'ITEMCODE mag maximaal 30 karakters bevatten',
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
                'name' => 'ITEMDESCRIPTION',
                'description' => 'varchar(60)
Omschrijving van het artikel',
                'error_message' => 'ITEMDESCRIPTION mag maximaal 60 karakters bevatten',
            ),
            2 => array(
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
                'name' => 'UNIT',
                'description' => 'varchar(8)
Verkoopeenheidcode',
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
                'name' => 'SALESPRICE',
                'description' => 'float
Standaard verkoopprijs, voor Webshop doorgaans incl. BTW',
                'error_message' => 'SALESPRICE moet een float zijn',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'VATCODE',
                'description' => 'varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel',
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
                'name' => 'COSTPRICE',
                'description' => 'float
Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)',
            ),
            6 => array(
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
Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft',
            ),
            7 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'EANCODE',
                'description' => 'varchar(30)
EAN barcode nummer',
            ),
            8 => array(
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
                'name' => 'PURCHASE_UNIT',
                'description' => 'varchar(8)
Verpakkingseenheid waarin ingekocht wordt',
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PURCHASE_FACTOR',
                'description' => 'float
De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)',
            ),
            10 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'PURCHASE_VATCODE',
                'description' => 'varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel',
            ),
            11 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '0',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'PURCHASE_ORDERSIZE',
                'description' => 'int
Per hoeveel inkoopeenheden kan worden ingekocht?',
            ),
            12 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PURCHASE_DELIVERYTIME',
                'description' => 'int
Levertijd in kalenderdagen',
            ),
            13 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'ASSORTMENT',
                'description' => 'int
Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact',
            ),
            14 => array(
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
                'name' => 'LOCATIE1',
                'description' => 'varchar(4)
Beschikbaarheid online/vestiging',
            ),
            15 => array(
                'required' => false,
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
                'name' => 'LOCATIE2',
                'description' => 'varchar(4)
Beschikbaarheid online/vestiging',
            ),
            16 => array(
                'required' => false,
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
                'name' => 'LOCATIE3',
                'description' => 'varchar(4)
Beschikbaaheid online/vestiging',
            ),
            17 => array(
                'required' => false,
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
                'name' => 'LOCATIE4',
                'description' => 'varchar(4)
Beschikbaaheid online/vestiging',
            ),
            18 => array(
                'required' => false,
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
                'name' => 'LOCATIE5',
                'description' => 'varchar(4)
Beschikbaaheid online/vestiging',
            ),
            19 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int Systeem ID',
            ),
            20 => array(
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
                'name' => 'SUPPLIER_ITEMCODE',
                'description' => 'varchar(30)
Artikelcode die de leverancier hanteert',
            ),
            21 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'PURCHASE_PRICE',
                'description' => 'float
Inkoopprijs van de leverancier voor de inkoopeenheid, rekening houdend met de BTW',
            ),
        ),
        'Webshop\\V1\\Rest\\Order\\Validator' => array(
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
                'description' => 'int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000',
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
Eigen omschrijving voor de order',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\GreaterThan',
                        'options' => array(
                            'min' => '50000000',
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
                'name' => 'REL_CODE',
                'description' => 'INT(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000',
            ),
            3 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_NAAM',
                'description' => 'varchar(50)
Naam van de klant/contactpersoon',
            ),
            4 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '10',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_AANSPREEKTITEL',
                'description' => 'varchar(10)
Aanspreektitel van de klant/contactpersoon',
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
                'name' => 'DEL_ADRES1',
                'description' => 'varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)',
            ),
            6 => array(
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
                'name' => 'DEL_POSTCODE',
                'description' => 'varchar(20)
Postcode van de klant/contactpersoon',
            ),
            7 => array(
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
                'name' => 'DEL_PLAATS',
                'description' => 'varchar(100)
Plaats van de klant/contactpersoon',
            ),
            8 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_LAND',
                'description' => 'varchar(3)
Landcode van de klant/contactpersoon',
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_TELEFOON',
                'description' => 'varchar(50)
Telefoon van de klant/contacpersoon',
            ),
            10 => array(
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
                'name' => 'DEL_EMAIL',
                'description' => 'varchar(128)
Emailadres van de klant/contactpersoon',
            ),
            11 => array(
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
            12 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'FIN_PREPAID_AMT',
                'description' => 'float
Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)',
            ),
            13 => array(
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
Betalingsconditie/methode:
pin/kas/rembours/etc.',
            ),
            14 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_BANK_BANKNAME',
                'description' => 'varchar(50)
Banknaam i.g.v. iDEAL betaling',
            ),
            15 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_BANK_HOLDER',
                'description' => 'varchar(50)
Tenaamstelling bankrekening i.g.v. iDEAL betaling',
            ),
            16 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_BANK_IBAN',
                'description' => 'varchar(50)
IBAN nummer i.g.v. iDEAL betaling',
            ),
            17 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_BANK_BIC',
                'description' => 'varchar(50)
BIC nummer i.g.v. iDEAL betaling',
            ),
            18 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'FIN_BANK_COUNTRY',
                'description' => 'varchar(50)
Land van bank i.g.v. iDEAL betaling',
            ),
            19 => array(
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
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)',
            ),
            20 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ID',
                'description' => 'int Systeem ID',
            ),
            21 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_NAAM',
                'description' => 'varchar(50)
Naam van de klant/contactpersoon',
            ),
            22 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '10',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_AANSPREEKTITEL',
                'description' => 'varchar(10)
Aanspreektitel van de klant/contactpersoon',
            ),
            23 => array(
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
                'name' => 'INV_ADRES1',
                'description' => 'varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)',
            ),
            24 => array(
                'required' => false,
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
                'name' => 'INV_POSTCODE',
                'description' => 'varchar(20)
Postcode van de klant/contactpersoon',
            ),
            25 => array(
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
                'name' => 'INV_PLAATS',
                'description' => 'varchar(100)
Plaats van de klant/contactpersoon',
            ),
            26 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_LAND',
                'description' => 'varchar(3)
Landcode van de klant/contacpersoon',
            ),
            27 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_TELEFOON',
                'description' => 'varchar(50)
Telefoon van de klant/contactpersoon',
            ),
            28 => array(
                'required' => false,
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
                'name' => 'INV_EMAIL',
                'description' => 'varchar(128)
Emailadres van de klant/contactpersoon',
            ),
            29 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'NUM_LINES',
                'description' => 'int
Aantal regels behorende bij de order',
            ),
            30 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'REMARK',
                'description' => 'varchar(max)
Opmerkingen veld',
            ),
        ),
        'Webshop\\V1\\Rest\\OrderRegel\\Validator' => array(
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
                'description' => 'int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000',
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
                'required' => false,
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
            10 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'CMS_ID',
                'description' => 'int
CMS id',
            ),
        ),
        'Webshop\\V1\\Rest\\\\Validator' => array(
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
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'pattern' => 'Y-MM-dd hh:mm:ss',
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
        'Webshop\\V1\\Rest\\Voorraad\\Validator' => array(
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
                'description' => 'varchar(30)
Artikelcode',
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
                'name' => 'EANCODE',
                'description' => 'varchar(30)
EAN code van het artikel',
            ),
            2 => array(
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
                'name' => 'ITEMDESCRIPTION',
                'description' => 'varchar(60)
Omschrijving van het artikel',
            ),
            3 => array(
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
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)',
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
                'name' => 'VOORRAAD',
                'description' => 'float
Aantal op voorraad',
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
                'name' => 'ATP',
                'description' => 'datetime(YYYY-MM-DD HH:MM:SS)
Indien artikel niet op voorraad is wordt hier de datum getoond wanneer het wel weer op voorraad is',
            ),
            6 => array(
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
                'name' => 'DEL_TYPE',
                'description' => 'varchar(5)
Geeft de standaard bezorgtype weer (post of expeditie, EXP)',
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
                'name' => 'ACTIVE',
                'description' => 'tinyint
Geeft aan of artikel actief is of niet-actief: 1 => actief, 0 => niet-actief',
            ),
            8 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsInt',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'COLLECTION',
                'description' => 'tinyint
Collectie artikel. Dit veld bepaalt of dit artikel in de toekomst beschikbaar blijft / de voorraad aangevuld wordt.
1 = Ja (collectie-artikel)
0 = Nee',
            ),
        ),
        'Webshop\\V1\\Rest\\Verkooporder\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'REFERENTIE',
                'description' => 'int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000',
            ),
            1 => array(
                'required' => false,
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
Eigen omschrijving voor de order',
            ),
            2 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'REMARK',
                'description' => 'text
Order opmerking',
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
                'name' => 'LOCATIECODE',
                'description' => 'varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)',
            ),
            4 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'REL_CODE',
                'description' => 'int(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000',
            ),
            5 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_NAAM',
                'description' => 'varchar(50)
Naam van de klant/contactpersoon',
            ),
            6 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '10',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_AANSPREEKTITEL',
                'description' => 'varchar(10)
Aanspreektitel van de klant/contactpersoon',
            ),
            7 => array(
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
                'name' => 'DEL_ADRES1',
                'description' => 'varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)',
            ),
            8 => array(
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
                'name' => 'DEL_POSTCODE',
                'description' => 'varchar(20)
Postcode van de klant/contactpersoon',
            ),
            9 => array(
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
                'name' => 'DEL_PLAATS',
                'description' => 'varchar(100)
Plaats van de klant/contactpersoon',
            ),
            10 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_LAND',
                'description' => 'varchar(3)
Landcode van de klant/contactpersoon',
            ),
            11 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'DEL_TELEFOON',
                'description' => 'varchar(50)
Telefoon van de klant/contacpersoon',
            ),
            12 => array(
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
                'name' => 'DEL_EMAIL',
                'description' => 'varchar(128)
Emailadres van de klant/contactpersoon',
            ),
            13 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_NAAM',
                'description' => 'varchar(50)
Naam van de klant/contactpersoon',
            ),
            14 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '10',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_AANSPREEKTITEL',
                'description' => 'varchar(10)
Aanspreektitel van de klant/contactpersoon',
            ),
            15 => array(
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
                'name' => 'INV_ADRES1',
                'description' => 'varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)',
            ),
            16 => array(
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
                'name' => 'INV_POSTCODE',
                'description' => 'varchar(20)
Postcode van de klant/contactpersoon',
            ),
            17 => array(
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
                'name' => 'INV_PLAATS',
                'description' => 'varchar(100)
Plaats van de klant/contactpersoon',
            ),
            18 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_LAND',
                'description' => 'varchar(3)
Landcode van de klant/contacpersoon',
            ),
            19 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'INV_TELEFOON',
                'description' => 'varchar(50)
Telefoon van de klant/contactpersoon',
            ),
            20 => array(
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
                'name' => 'INV_EMAIL',
                'description' => 'varchar(128)
Emailadres van de klant/contactpersoon',
            ),
            21 => array(
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
                'name' => 'ORDERSTATUS',
                'description' => 'varchar(20)
Status van de verkooporder in tekst',
            ),
            22 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'OPENSTAAND_BEDRAG',
                'description' => 'float
Bedrag dat nog betaald moet worden door klant',
            ),
            23 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'ORD_SOORT',
                'description' => 'char(1)',
            ),
            24 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ORDERNR',
                'description' => 'char(8)
Exact ordernummer',
            ),
            25 => array(
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
Betalingsconditie/methode: pin/kas/rembours/etc.

50 =>	CREDITCARD,
55 =>	IDEAL,
60 =>	PAYPAL,
70 =>	REMBOURS',
            ),
            26 => array(
                'required' => false,
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
                'name' => 'TRACKTRACE',
                'description' => 'varchar(30)
Track & trace code van de betreffende vervoerder. Op dit moment is dat alleen PostNL.
Voorbeeld van url: https://jouw.postnl.nl/?vind-pakket=Zoek%20mijn%20pakket#!/track-en-trace/3SYHFS009026177/nl/1973%20pk 
De url sluit dus af met tracktrace code/Landcode/Postcode',
            ),
            27 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'SYSMODIFIED',
                'description' => 'datetime(YYYY-MM-DD HH:MM:SS) Datum waarop de verkooporder is gewijzigd',
            ),
        ),
        'Webshop\\V1\\Rest\\VerkooporderRegel\\Validator' => array(
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
                'description' => 'int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000',
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
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\IsFloat',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'QUANTITY_DELIVERED',
                'description' => 'Aantal reeds geleverd',
            ),
            4 => array(
                'required' => false,
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
Netto verkoopprijs 
(rekening houdend met BTW)',
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
Type korting
(indien van toepassing)',
            ),
            7 => array(
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
            8 => array(
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
                'description' => 'datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel',
            ),
            9 => array(
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
                'name' => 'DEL_DATE_DELIVERED',
                'description' => 'datetime(YYYY-MM-DD HH:MM;SS)
Datum waarop de geleverde aantallen zijn geleverd',
            ),
            10 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ORDERNR',
                'description' => 'char(8)
Exact ordernummer',
            ),
            11 => array(
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
                'name' => 'DEL_METHOD',
                'description' => 'varchar(5)
Opties: (Code Omschrijving)
POST - Post 
EXP - pakketdienst 
AFHRN -  Afhalen winkel Hoorn
AFLFT - Afhalen winkel Loft
AFZWD - Afhalen Magazijn Zwaagdijk-Oost',
            ),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'basiclabel_entities' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    0 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/Artikel',
                    1 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/Order',
                    2 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/OrderRegel',
                    3 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/Voorraad',
                    4 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/Verkooporder',
                    5 => 'D:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\test\\apibasiclabel\\module\\Webshop\\config/../src/Webshop/V1/Rest/VerkooporderRegel',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Webshop\\V1\\Rest\\Artikel' => 'basiclabel_entities',
                    'Webshop\\V1\\Rest\\Order' => 'basiclabel_entities',
                    'Webshop\\V1\\Rest\\OrderRegel' => 'basiclabel_entities',
                    'Webshop\\V1\\Rest\\Voorraad' => 'basiclabel_entities',
                    'Webshop\\V1\\Rest\\Verkooporder' => 'basiclabel_entities',
                    'Webshop\\V1\\Rest\\VerkooporderRegel' => 'basiclabel_entities',
                ),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
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
            'Webshop\\V1\\Rest\\Order\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
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
            'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
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
            'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
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
            'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
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
            'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
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
        ),
    ),
);
