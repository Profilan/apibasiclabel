<?php
return array(
    'Basiclabel\\V1\\Rest\\Inkooporder\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Unieke Inkooporderreferentie vanuit CMS",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de Inkooporder",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaonder de Inkooporder in Exact komt te staan",
   "MAGAZIJNCODE": "varchar(4)
Betreft het magazijn waar de goederen afgeleverd  worden.",
   "ID": "int Systeem ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkooporder[/:inkooporder_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Unieke Inkooporderreferentie vanuit CMS",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de Inkooporder",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaonder de Inkooporder in Exact komt te staan",
   "MAGAZIJNCODE": "varchar(4)
Betreft het magazijn waar de goederen afgeleverd  worden.",
   "ID": "int Systeem ID"
}',
            ),
        ),
        'description' => 'Vanuit het CMS kunnen de winkels inkooporders plaatsen. Deze worden vervolgens in Exact geregistreerd.',
    ),
    'Basiclabel\\V1\\Rest\\InkooporderRegel\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in order",
   "QUANTITY": "float
Aantal verkocht",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "varchar(max)
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel",
   "ID": "id Systeem ID",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkooporder-regel[/:inkooporder_regel_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in order",
   "QUANTITY": "float
Aantal verkocht",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "varchar(max)
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel",
   "ID": "id Systeem ID",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
}',
            ),
        ),
        'description' => 'Vanuit het CMS kunnen de winkels inkooporders plaatsen. Deze worden vervolgens in Exact geregistreerd.',
    ),
    'Basiclabel\\V1\\Rest\\Levering\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
   "QUANTITY": "float
Aantal geleverd",
   "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
   "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
   "FIN_PAYED": "tinyint
Is deze regel betaald?",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
   "ITEMCODE": "varchar(30)
Artikelcode in levering",
   "ID": "int
Systeem ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/levering[/:levering_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
   "QUANTITY": "float
Aantal geleverd",
   "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
   "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
   "FIN_PAYED": "tinyint
Is deze regel betaald?",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
   "ITEMCODE": "varchar(30)
Artikelcode in levering",
   "ID": "int
Systeem ID"
}',
            ),
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/levering"
       },
       "first": {
           "href": "/levering?page={page}"
       },
       "prev": {
           "href": "/levering?page={page}"
       },
       "next": {
           "href": "/levering?page={page}"
       },
       "last": {
           "href": "/levering?page={page}"
       }
   }
   "_embedded": {
       "levering": [
           {
               "_links": {
                   "self": {
                       "href": "/levering[/:levering_id]"
                   }
               }
              "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
              "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
              "QUANTITY": "float
Aantal geleverd",
              "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
              "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
              "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
              "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
              "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
              "FIN_PAYED": "tinyint
Is deze regel betaald?",
              "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
              "ITEMCODE": "varchar(30)
Artikelcode in levering",
              "ID": "int
Systeem ID"
           }
       ]
   }
}',
            ),
        ),
        'description' => 'Een kastransactie moet apart geregistreerd worden in Exact: de bankbetalingen worden door de administratie geïmporteerd, maar de kastransacties niet. Met een levering kan aangegeven worden hoe er is betaald. Is dit een kastransactie geweest, dan wordt in Exact de mutatie geboekt: Kas @Debiteuren met als waarde aantal maal netto verkoopprijs inclusief BTW (PRICE_NETT)',
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/levering[/:levering_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
   "QUANTITY": "float
Aantal geleverd",
   "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
   "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
   "FIN_PAYED": "tinyint
Is deze regel betaald?",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
   "ITEMCODE": "varchar(30)
Artikelcode in levering",
   "ID": "int
Systeem ID"
}',
            ),
        ),
    ),
    'Basiclabel\\V1\\Rest\\Leverancier\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/leverancier"
       },
       "first": {
           "href": "/leverancier?page={page}"
       },
       "prev": {
           "href": "/leverancier?page={page}"
       },
       "next": {
           "href": "/leverancier?page={page}"
       },
       "last": {
           "href": "/leverancier?page={page}"
       }
   }
   "_embedded": {
       "leverancier": [
           {
               "_links": {
                   "self": {
                       "href": "/leverancier[/:suppliercode]"
                   }
               }
              "SUPPLIERCODE": "varchar(8)
Leverancierscode",
              "SUPPLIERNAME": "varchar(30)",
              "ADDRESS": "varchar(100)
Adresregel 1 in Exact (straat en huisnummer)",
              "POSTCODE": "varchar(20)",
              "CITY": "varchar(100)
City",
              "CONTACTPERSON": "varchar(100)
Contactpersoon",
              "CONTACTEMAIL": "varchar(128)
Emailadres van de contactpersoon",
              "CONTACTPHONE": "varchar(25)
Telefoonnummer van de contactpersoon"
           }
       ]
   }
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/leverancier[/:suppliercode]"
       }
   }
   "SUPPLIERCODE": "varchar(8)
Leverancierscode",
   "SUPPLIERNAME": "varchar(30)",
   "ADDRESS": "varchar(100)
Adresregel 1 in Exact (straat en huisnummer)",
   "POSTCODE": "varchar(20)",
   "CITY": "varchar(100)
City",
   "CONTACTPERSON": "varchar(100)
Contactpersoon",
   "CONTACTEMAIL": "varchar(128)
Emailadres van de contactpersoon",
   "CONTACTPHONE": "varchar(25)
Telefoonnummer van de contactpersoon"
}',
            ),
        ),
    ),
    'Basiclabel\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "ITEMCODE": "varchar(30)",
   "QUANTITY": "float",
   "REMARKS": "varchar(256)",
   "ID": "int
System ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/voorraadcorrectie[/:voorraadcorrectie_id]"
       }
   }
   "ITEMCODE": "varchar(30)",
   "QUANTITY": "float",
   "REMARKS": "varchar(256)",
   "ID": "int
System ID"
}',
            ),
        ),
        'description' => 'Vanuit het CMS kunnen voorraadcorrecties aangeleverd worden',
    ),
    'POS\\V1\\Rest\\Leverancier\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/leverancier"
       },
       "first": {
           "href": "/leverancier?page={page}"
       },
       "prev": {
           "href": "/leverancier?page={page}"
       },
       "next": {
           "href": "/leverancier?page={page}"
       },
       "last": {
           "href": "/leverancier?page={page}"
       }
   }
   "_embedded": {
       "leverancier": [
           {
               "_links": {
                   "self": {
                       "href": "/leverancier[/:suppliercode]"
                   }
               }
              "SUPPLIERCODE": "varchar(8)
Leverancierscode",
              "SUPPLIERNAME": "varchar(30)",
              "ADDRESS": "varchar(100)
Adresregel 1 in Exact (straat en huisnummer)",
              "POSTCODE": "varchar(20)",
              "CITY": "varchar(100)
City",
              "CONTACTPERSON": "varchar(100)
Contactpersoon",
              "CONTACTEMAIL": "varchar(128)
Emailadres van de contactpersoon",
              "CONTACTPHONE": "varchar(25)
Telefoonnummer van de contactpersoon"
           }
       ]
   }
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/leverancier[/:suppliercode]"
       }
   }
   "SUPPLIERCODE": "varchar(8)
Leverancierscode",
   "SUPPLIERNAME": "varchar(30)",
   "ADDRESS": "varchar(100)
Adresregel 1 in Exact (straat en huisnummer)",
   "POSTCODE": "varchar(20)",
   "CITY": "varchar(100)
City",
   "CONTACTPERSON": "varchar(100)
Contactpersoon",
   "CONTACTEMAIL": "varchar(128)
Emailadres van de contactpersoon",
   "CONTACTPHONE": "varchar(25)
Telefoonnummer van de contactpersoon"
}',
            ),
        ),
    ),
    'POS\\V1\\Rest\\Voorraadcorrectie\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "ITEMCODE": "varchar(30)",
   "QUANTITY": "float",
   "REMARKS": "varchar(256)",
   "ID": "int
System ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/voorraadcorrectie[/:voorraadcorrectie_id]"
       }
   }
   "ITEMCODE": "varchar(30)",
   "QUANTITY": "float",
   "REMARKS": "varchar(256)",
   "ID": "int
System ID"
}',
            ),
        ),
    ),
    'POS\\V1\\Rest\\Inkoopontvangst\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkoopontvangst"
       },
       "first": {
           "href": "/inkoopontvangst?page={page}"
       },
       "prev": {
           "href": "/inkoopontvangst?page={page}"
       },
       "next": {
           "href": "/inkoopontvangst?page={page}"
       },
       "last": {
           "href": "/inkoopontvangst?page={page}"
       }
   }
   "_embedded": {
       "inkoopontvangst": [
           {
               "_links": {
                   "self": {
                       "href": "/inkoopontvangst[/:inkoopontvangst_id]"
                   }
               }
              "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
              "ITEMCODE": "varchar(30)
Artikelcode in inkooporder",
              "ORDERLINE_DESCRIPTION": "text
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
              "SUPPLIERCODE": "varchar(4)
Leverancierscode",
              "QUANTITY": "float
Aantal besteld",
              "TRANS_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Ontvangstdatum van de orderregel",
              "TRANS_DESCRIPTION": "varchar(60)
Omschrijving van de boeking",
              "LOCATIECODE": "varchar(4)
Betreft de locatie waarvoor de goederen besteld worden.",
              "ID": "int
Systeem ID"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in inkooporder",
   "ORDERLINE_DESCRIPTION": "text
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "SUPPLIERCODE": "varchar(4)
Leverancierscode",
   "QUANTITY": "float
Aantal besteld",
   "TRANS_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Ontvangstdatum van de orderregel",
   "TRANS_DESCRIPTION": "varchar(60)
Omschrijving van de boeking",
   "LOCATIECODE": "varchar(4)
Betreft de locatie waarvoor de goederen besteld worden.",
   "ID": "int
Systeem ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkoopontvangst[/:inkoopontvangst_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in inkooporder",
   "ORDERLINE_DESCRIPTION": "text
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "SUPPLIERCODE": "varchar(4)
Leverancierscode",
   "QUANTITY": "float
Aantal besteld",
   "TRANS_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Ontvangstdatum van de orderregel",
   "TRANS_DESCRIPTION": "varchar(60)
Omschrijving van de boeking",
   "LOCATIECODE": "varchar(4)
Betreft de locatie waarvoor de goederen besteld worden.",
   "ID": "int
Systeem ID"
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkoopontvangst[/:inkoopontvangst_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in inkooporder",
   "ORDERLINE_DESCRIPTION": "text
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "SUPPLIERCODE": "varchar(4)
Leverancierscode",
   "QUANTITY": "float
Aantal besteld",
   "TRANS_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Ontvangstdatum van de orderregel",
   "TRANS_DESCRIPTION": "varchar(60)
Omschrijving van de boeking",
   "LOCATIECODE": "varchar(4)
Betreft de locatie waarvoor de goederen besteld worden.",
   "ID": "int
Systeem ID"
}',
            ),
        ),
    ),
    'POS\\V1\\Rest\\Inkooporder\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Unieke Inkooporderreferentie vanuit CMS",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de Inkooporder",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaonder de Inkooporder in Exact komt te staan",
   "MAGAZIJNCODE": "varchar(4)
Betreft het magazijn waar de goederen afgeleverd  worden.",
   "ID": "int Systeem ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkooporder[/:inkooporder_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Unieke Inkooporderreferentie vanuit CMS",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de Inkooporder",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaonder de Inkooporder in Exact komt te staan",
   "MAGAZIJNCODE": "varchar(4)
Betreft het magazijn waar de goederen afgeleverd  worden.",
   "ID": "int Systeem ID"
}',
            ),
        ),
    ),
    'POS\\V1\\Rest\\InkooporderRegel\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in order",
   "QUANTITY": "float
Aantal verkocht",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "varchar(max)
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel",
   "ID": "id Systeem ID",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/inkooporder-regel[/:inkooporder_regel_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Inkooporderreferentie vanuit CMS",
   "ITEMCODE": "varchar(30)
Artikelcode in order",
   "QUANTITY": "float
Aantal verkocht",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "varchar(max)
Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "datetime(YYYY-MM-DD HH:MM:SS)
Geplande leverdatum van de orderregel",
   "ID": "id Systeem ID",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
}',
            ),
        ),
    ),
    'POS\\V1\\Rest\\Levering\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'request' => '{
   "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
   "QUANTITY": "float
Aantal geleverd",
   "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
   "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
   "FIN_PAYED": "tinyint
Is deze regel betaald?",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
   "ITEMCODE": "varchar(30)
Artikelcode in levering",
   "ID": "int
Systeem ID"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/levering[/:levering_id]"
       }
   }
   "REFERENTIE": "varchar(30)
Orderreferentie vanuit CMS",
   "LOCATIECODE": "varchar(4)
Locatie -> debiteur waaronder de order in Exact komt te staan",
   "QUANTITY": "float
Aantal geleverd",
   "DEL_DATE": "datetime
Datum waarop de levering heeft plaatsgevonden",
   "PRICE_GROSS": "float
Bruto verkoopprijs (exclusief kortingen) (rekening houdend met BTW)",
   "PRICE_NETT": "float
Netto verkoopprijs (rekening houdend met BTW)",
   "DISCOUNT_TYPE": "varchar(100)
Type korting (indien van toepassing)",
   "FULFILLED": "tinyint
Zijn de artikelen geleverd?",
   "FIN_PAYED": "tinyint
Is deze regel betaald?",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/credit card",
   "ITEMCODE": "varchar(30)
Artikelcode in levering",
   "ID": "int
Systeem ID"
}',
            ),
        ),
    ),
);
