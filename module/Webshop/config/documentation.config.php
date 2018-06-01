<?php
return array(
    'Webshop\\V1\\Rest\\OrderRegel\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/order-regel"
       },
       "first": {
           "href": "/order-regel?page={page}"
       },
       "prev": {
           "href": "/order-regel?page={page}"
       },
       "next": {
           "href": "/order-regel?page={page}"
       },
       "last": {
           "href": "/order-regel?page={page}"
       }
   }
   "_embedded": {
       "order_regel": [
           {
               "_links": {
                   "self": {
                       "href": "/order-regel[/:order_regel_id]"
                   }
               }
              "REFERENTIE": "Orderreferentie vanuit CMS",
              "ITEMCODE": "Artikelcode in order",
              "QUANTITY": "Aantal verkocht",
              "PRICE_GROSS": "Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
              "PRICE_NETT": "Netto verkoopprijs 
(rekening houdend met BTW)",
              "DISCOUNT_TYPE": "Type korting
(indien van toepassing)",
              "ORDERLINE_DESCRIPTION": "Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
              "DEL_DATE": "Geplande leverdatum van de orderregel",
              "ID": "Systeem ID",
              "DEL_METHOD": "Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'request' => '{
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
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
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen",
   "CMS_ID": "int
CMS id"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/order-regel[/:order_regel_id]"
       }
   }
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
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
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen",
   "CMS_ID": "int
CMS id"
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/order-regel[/:order_regel_id]"
       }
   }
   "REFERENTIE": "Orderreferentie vanuit CMS",
   "ITEMCODE": "Artikelcode in order",
   "QUANTITY": "Aantal verkocht",
   "PRICE_GROSS": "Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "Geplande leverdatum van de orderregel",
   "ID": "Systeem ID",
   "DEL_METHOD": "Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen"
}',
            ),
            'POST' => array(
                'request' => '{
   "REFERENTIE": "Orderreferentie vanuit CMS",
   "ITEMCODE": "Artikelcode in order",
   "QUANTITY": "Aantal verkocht",
   "PRICE_GROSS": "Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "Geplande leverdatum van de orderregel"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/order-regel[/:REFERENTIE]"
       }
   }
   "REFERENTIE": "Orderreferentie vanuit CMS",
   "ITEMCODE": "Artikelcode in order",
   "QUANTITY": "Aantal verkocht",
   "PRICE_GROSS": "Bruto verkoopprijs (exclusief kortingen)
(rekening houdend met BTW)",
   "PRICE_NETT": "Netto verkoopprijs 
(rekening houdend met BTW)",
   "DISCOUNT_TYPE": "Type korting
(indien van toepassing)",
   "ORDERLINE_DESCRIPTION": "Indien door gebruiker handmatig een afwijkende omschrijving is ingevuld van de artikelomschrijving, dan kan dit veld meegegeven worden.",
   "DEL_DATE": "Geplande leverdatum van de orderregel"
}',
            ),
        ),
        'description' => 'Aan te leveren velden voor de verkooporder regels.

ORDER_REGEL_ID is het ID dat automatisch wordt gegenereerd bij het aanmaken van een orderregel (ID) en wordt gebruikt om een orderregel per ID op te vragen.',
    ),
    'Webshop\\V1\\Rest\\Artikel\\Controller' => array(
        'collection' => array(
            'POST' => array(
                'description' => 'Maakt een artikel aan',
                'request' => '{
   "ITEMCODE": "varchar(30)
Unieke code van het artikel",
   "ITEMDESCRIPTION": "varchar(60)
Omschrijving van het artikel",
   "UNIT": "varchar(8)
Verkoopeenheidcode",
   "SALESPRICE": "float
Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
   "VATCODE": "varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
   "COSTPRICE": "float
Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
   "SUPPLIERCODE": "varchar(8)
Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
   "EANCODE": "varchar(30)
EAN barcode nummer",
   "PURCHASE_UNIT": "varchar(8)
Verpakkingseenheid waarin ingekocht wordt",
   "PURCHASE_FACTOR": "float
De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
   "PURCHASE_VATCODE": "varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
   "PURCHASE_ORDERSIZE": "int
Per hoeveel inkoopeenheden kan worden ingekocht?",
   "PURCHASE_DELIVERYTIME": "int
Levertijd in kalenderdagen",
   "ASSORTMENT": "int
Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
   "LOCATIE1": "varchar(4)
Beschikbaarheid online/vestiging",
   "LOCATIE2": "varchar(4)
Beschikbaarheid online/vestiging",
   "LOCATIE3": "varchar(4)
Beschikbaaheid online/vestiging",
   "LOCATIE4": "varchar(4)
Beschikbaaheid online/vestiging",
   "LOCATIE5": "varchar(4)
Beschikbaaheid online/vestiging",
   "ID": "int Systeem ID",
   "SUPPLIER_ITEMCODE": "varchar(30)
Artikelcode die de leverancier hanteert",
   "PURCHASE_PRICE": "float
Inkoopprijs van de leverancier voor de inkoopeenheid, rekening houdend met de BTW"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/artikel[/:artikel_id]"
       }
   }
   "ITEMCODE": "varchar(30)
Unieke code van het artikel",
   "ITEMDESCRIPTION": "varchar(60)
Omschrijving van het artikel",
   "UNIT": "varchar(8)
Verkoopeenheidcode",
   "SALESPRICE": "float
Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
   "VATCODE": "varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
   "COSTPRICE": "float
Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
   "SUPPLIERCODE": "varchar(8)
Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
   "EANCODE": "varchar(30)
EAN barcode nummer",
   "PURCHASE_UNIT": "varchar(8)
Verpakkingseenheid waarin ingekocht wordt",
   "PURCHASE_FACTOR": "float
De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
   "PURCHASE_VATCODE": "varchar(3)
BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
   "PURCHASE_ORDERSIZE": "int
Per hoeveel inkoopeenheden kan worden ingekocht?",
   "PURCHASE_DELIVERYTIME": "int
Levertijd in kalenderdagen",
   "ASSORTMENT": "int
Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
   "LOCATIE1": "varchar(4)
Beschikbaarheid online/vestiging",
   "LOCATIE2": "varchar(4)
Beschikbaarheid online/vestiging",
   "LOCATIE3": "varchar(4)
Beschikbaaheid online/vestiging",
   "LOCATIE4": "varchar(4)
Beschikbaaheid online/vestiging",
   "LOCATIE5": "varchar(4)
Beschikbaaheid online/vestiging",
   "ID": "int Systeem ID",
   "SUPPLIER_ITEMCODE": "varchar(30)
Artikelcode die de leverancier hanteert",
   "PURCHASE_PRICE": "float
Inkoopprijs van de leverancier voor de inkoopeenheid, rekening houdend met de BTW"
}',
            ),
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/artikel"
       },
       "first": {
           "href": "/artikel?page={page}"
       },
       "prev": {
           "href": "/artikel?page={page}"
       },
       "next": {
           "href": "/artikel?page={page}"
       },
       "last": {
           "href": "/artikel?page={page}"
       }
   }
   "_embedded": {
       "artikel": [
           {
               "_links": {
                   "self": {
                       "href": "/artikel[/:artikel_id]"
                   }
               }
              "ITEMCODE": "Unieke code van het artikel",
              "ITEMDESCRIPTION": "Omschrijving van het artikel",
              "UNIT": "Verkoopeenheidcode",
              "SALESPRICE": "Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
              "VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
              "COSTPRICE": "Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
              "SUPPLIERCODE": "Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
              "EANCODE": "EAN barcode nummer",
              "PURCHASE_UNIT": "Verpakkingseenheid waarin ingekocht wordt",
              "PURCHASE_FACTOR": "De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
              "PURCHASE_VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
              "PURCHASE_ORDERSIZE": "Per hoeveel inkoopeenheden kan worden ingekocht?",
              "PURCHASE_DELIVERYTIME": "Levertijd in kalenderdagen",
              "ASSORTMENT": "Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
              "LOCATIE1": "Beschikbaarheid online/vestiging",
              "LOCATIE2": "Beschikbaarheid online/vestiging",
              "LOCATIE3": "Beschikbaaheid online/vestiging",
              "LOCATIE4": "Beschikbaaheid online/vestiging",
              "LOCATIE5": "Beschikbaaheid online/vestiging",
              "ID": "Systeem ID",
              "SUPPLIER_ITEMCODE": "Artikelcode die de leverancier hanteert",
              "PURCHASE_PRICE": ""
           }
       ]
   }
}',
            ),
            'description' => 'ARTIKEL_ID is het ID dat automatisch wordt gegenereerd bij het aanmaken van een artikel (ID) en wordt gebruikt om een artikel per ID op te vragen. Om te zoeken op ITEMCODE moet de url de volgende vorm hebben:

/artikel?ITEMCODE={ITEMCODE}',
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/artikel[/:artikel_id]"
       }
   }
   "ITEMCODE": "Unieke code van het artikel",
   "ITEMDESCRIPTION": "Omschrijving van het artikel",
   "UNIT": "Verkoopeenheidcode",
   "SALESPRICE": "Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
   "VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
   "COSTPRICE": "Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
   "SUPPLIERCODE": "Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
   "EANCODE": "EAN barcode nummer",
   "PURCHASE_UNIT": "Verpakkingseenheid waarin ingekocht wordt",
   "PURCHASE_FACTOR": "De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
   "PURCHASE_VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
   "PURCHASE_ORDERSIZE": "Per hoeveel inkoopeenheden kan worden ingekocht?",
   "PURCHASE_DELIVERYTIME": "Levertijd in kalenderdagen",
   "ASSORTMENT": "Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
   "LOCATIE1": "Beschikbaarheid online/vestiging",
   "LOCATIE2": "Beschikbaarheid online/vestiging",
   "LOCATIE3": "Beschikbaaheid online/vestiging",
   "LOCATIE4": "Beschikbaaheid online/vestiging",
   "LOCATIE5": "Beschikbaaheid online/vestiging",
   "ID": "Systeem ID",
   "SUPPLIER_ITEMCODE": "Artikelcode die de leverancier hanteert",
   "PURCHASE_PRICE": ""
}',
            ),
            'POST' => array(
                'request' => '{
   "ITEMCODE": "Unieke code van het artikel",
   "ITEMDESCRIPTION": "Omschrijving van het artikel",
   "UNIT": "Verkoopeenheidcode",
   "SALESPRICE": "Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
   "VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
   "COSTPRICE": "Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
   "SUPPLIERCODE": "Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
   "EANCODE": "EAN barcode nummer",
   "PURCHASE_UNIT": "Verpakkingseenheid waarin ingekocht wordt",
   "PURCHASE_FACTOR": "De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
   "PURCHASE_VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
   "PURCHASE_ORDERSIZE": "Per hoeveel inkoopeenheden kan worden ingekocht?",
   "PURCHASE_DELIVERYTIME": "Levertijd in kalenderdagen",
   "ASSORTMENT": "Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
   "LOCATIE1": "Beschikbaarheid online/vestiging",
   "LOCATIE2": "Beschikbaarheid online/vestiging",
   "LOCATIE3": "Beschikbaaheid online/vestiging",
   "LOCATIE4": "Beschikbaaheid online/vestiging",
   "LOCATIE5": "Beschikbaaheid online/vestiging"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/artikel[/:ITEMCODE]"
       }
   }
   "ITEMCODE": "Unieke code van het artikel",
   "ITEMDESCRIPTION": "Omschrijving van het artikel",
   "UNIT": "Verkoopeenheidcode",
   "SALESPRICE": "Standaard verkoopprijs, voor Webshop doorgaans incl. BTW",
   "VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoord bij dit artikel",
   "COSTPRICE": "Kostprijs is doorgaans gelijk aan de inkoopprijs (voor Webshop)",
   "SUPPLIERCODE": "Crediteurnummer, alleen invlullen indien het een inkoopartikel betreft",
   "EANCODE": "EAN barcode nummer",
   "PURCHASE_UNIT": "Verpakkingseenheid waarin ingekocht wordt",
   "PURCHASE_FACTOR": "De factor waarin de inkoopeenheid relateert aan de verkoopeenheid (een doos met 6 flessen heeft factor 6)",
   "PURCHASE_VATCODE": "BTW code waarmee aangegeven wordt welk type BTW behoort bij dit artikel",
   "PURCHASE_ORDERSIZE": "Per hoeveel inkoopeenheden kan worden ingekocht?",
   "PURCHASE_DELIVERYTIME": "Levertijd in kalenderdagen",
   "ASSORTMENT": "Code voor indeling artikelen, belangrijk voor financiële gegevens in Exact",
   "LOCATIE1": "Beschikbaarheid online/vestiging",
   "LOCATIE2": "Beschikbaarheid online/vestiging",
   "LOCATIE3": "Beschikbaaheid online/vestiging",
   "LOCATIE4": "Beschikbaaheid online/vestiging",
   "LOCATIE5": "Beschikbaaheid online/vestiging"
}',
            ),
        ),
        'description' => 'Artikelen zijn stamgegevens en worden aangemaakt en onderhouden in CMS. Hierbij is het zeer wenselijk om binnen CMS een importmogelijkheid te maken van artikelen vanuit Excel zodat gebruikers in bulk artikelen kunnen aanmaken en onderhouden.

ARTIKEL_ID is het ID dat automatisch wordt gegenereerd bij het aanmaken van een artikel (ID) en wordt gebruikt om een artikel per ID op te vragen. Om te zoeken op ITEMCODE moet de url de volgende vorm hebben:

/artikel?ITEMCODE={ITEMCODE}',
    ),
    'Webshop\\V1\\Rest\\Voorraad\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/voorraad"
       },
       "first": {
           "href": "/voorraad?page={page}"
       },
       "prev": {
           "href": "/voorraad?page={page}"
       },
       "next": {
           "href": "/voorraad?page={page}"
       },
       "last": {
           "href": "/voorraad?page={page}"
       }
   }
   "_embedded": {
       "voorraad": [
           {
               "_links": {
                   "self": {
                       "href": "/voorraad[/:itemcode]"
                   }
               }
              "ITEMCODE": "varchar(30)
Artikelcode",
              "EANCODE": "varchar(30)
EAN code van het artikel",
              "ITEMDESCRIPTION": "varchar(60)
Omschrijving van het artikel",
              "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
              "VOORRAAD": "float
Aantal op voorraad",
              "ATP": "datetime(YYYY-MM-DD HH:MM:SS)
Indien artikel niet op voorraad is wordt hier de datum getoond wanneer het wel weer op voorraad is",
              "DEL_TYPE": "varchar(5)
Geeft de standaard bezorgtype weer (post of expeditie, EXP)",
              "ACTIVE": "tinyint
Geeft aan of artikel actief is of niet-actief: 1 => actief, 0 => niet-actief",
              "COLLECTION": "tinyint
Collectie artikel. Dit veld bepaalt of dit artikel in de toekomst beschikbaar blijft / de voorraad aangevuld wordt.
1 = Ja (collectie-artikel)
0 = Nee"
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
           "href": "/voorraad[/:itemcode]"
       }
   }
   "ITEMCODE": "varchar(30)
Artikelcode",
   "EANCODE": "varchar(30)
EAN code van het artikel",
   "ITEMDESCRIPTION": "varchar(60)
Omschrijving van het artikel",
   "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
   "VOORRAAD": "float
Aantal op voorraad",
   "ATP": "datetime(YYYY-MM-DD HH:MM:SS)
Indien artikel niet op voorraad is wordt hier de datum getoond wanneer het wel weer op voorraad is",
   "DEL_TYPE": "varchar(5)
Geeft de standaard bezorgtype weer (post of expeditie, EXP)",
   "ACTIVE": "tinyint
Geeft aan of artikel actief is of niet-actief: 1 => actief, 0 => niet-actief",
   "COLLECTION": "tinyint
Collectie artikel. Dit veld bepaalt of dit artikel in de toekomst beschikbaar blijft / de voorraad aangevuld wordt.
1 = Ja (collectie-artikel)
0 = Nee"
}',
            ),
        ),
    ),
    'Webshop\\V1\\Rest\\Order\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/order"
       },
       "first": {
           "href": "/order?page={page}"
       },
       "prev": {
           "href": "/order?page={page}"
       },
       "next": {
           "href": "/order?page={page}"
       },
       "last": {
           "href": "/order?page={page}"
       }
   }
   "_embedded": {
       "order": [
           {
               "_links": {
                   "self": {
                       "href": "/order[/:order_id]"
                   }
               }
              "REFERENTIE": "Unieke orderreferentie vanuit CMS",
              "OMSCHRIJVING": "Eigen omschrijving voor de order",
              "REL_CODE": "Unieke code behorende bij deze relatie. Dit kan een emailadres zijn (maar emails kunnen wijzigen), kan ook guid, of getal zijn.",
              "DEL_NAAM": "Naam van de klant/contactpersoon",
              "DEL_AANSPREEKTITEL": "Aanspreektitel van de klant/contactpersoon",
              "DEL_ADRES1": "Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
              "DEL_POSTCODE": "Postcode van de klant/contactpersoon",
              "DEL_PLAATS": "Plaats van de klant/contactpersoon",
              "DEL_LAND": "Landcode van de klant/contactpersoon",
              "DEL_TELEFOON": "Telefoon van de klant/contacpersoon",
              "DEL_EMAIL": "Emailadres van de klant/contactpersoon",
              "DEL_METHOD": "Leveringswijze",
              "FIN_PREPAID_AMT": "Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
              "FIN_PAYMENT_METHOD": "Betalingsconditie/methode:
pin/kas/rembours/etc.",
              "LOCATIECODE": "Locatie -> debiteur waaonder de order in Exact komt te staan"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'request' => '{
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de order",
   "REL_CODE": "INT(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000",
   "DEL_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "DEL_LAND": "varchar(3)
Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "varchar(50)
Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen",
   "FIN_PREPAID_AMT": "float
Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode:
pin/kas/rembours/etc.",
   "FIN_BANK_BANKNAME": "varchar(50)
Banknaam i.g.v. iDEAL betaling",
   "FIN_BANK_HOLDER": "varchar(50)
Tenaamstelling bankrekening i.g.v. iDEAL betaling",
   "FIN_BANK_IBAN": "varchar(50)
IBAN nummer i.g.v. iDEAL betaling",
   "FIN_BANK_BIC": "varchar(50)
BIC nummer i.g.v. iDEAL betaling",
   "FIN_BANK_COUNTRY": "varchar(50)
Land van bank i.g.v. iDEAL betaling",
   "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
   "ID": "int Systeem ID",
   "INV_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "INV_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "INV_ADRES1": "varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)",
   "INV_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "INV_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "INV_LAND": "varchar(3)
Landcode van de klant/contacpersoon",
   "INV_TELEFOON": "varchar(50)
Telefoon van de klant/contactpersoon",
   "INV_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "NUM_LINES": "int
Aantal regels behorende bij de order",
   "REMARK": "varchar(max)
Opmerkingen veld"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/order[/:order_id]"
       }
   }
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de order",
   "REL_CODE": "INT(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000",
   "DEL_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "DEL_LAND": "varchar(3)
Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "varchar(50)
Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "DEL_METHOD": "varchar(5)
Code om aan te geven hoe de levering bij klant plaatsvindt: afhalen in winkel of bezorgen",
   "FIN_PREPAID_AMT": "float
Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode:
pin/kas/rembours/etc.",
   "FIN_BANK_BANKNAME": "varchar(50)
Banknaam i.g.v. iDEAL betaling",
   "FIN_BANK_HOLDER": "varchar(50)
Tenaamstelling bankrekening i.g.v. iDEAL betaling",
   "FIN_BANK_IBAN": "varchar(50)
IBAN nummer i.g.v. iDEAL betaling",
   "FIN_BANK_BIC": "varchar(50)
BIC nummer i.g.v. iDEAL betaling",
   "FIN_BANK_COUNTRY": "varchar(50)
Land van bank i.g.v. iDEAL betaling",
   "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
   "ID": "int Systeem ID",
   "INV_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "INV_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "INV_ADRES1": "varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)",
   "INV_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "INV_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "INV_LAND": "varchar(3)
Landcode van de klant/contacpersoon",
   "INV_TELEFOON": "varchar(50)
Telefoon van de klant/contactpersoon",
   "INV_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "NUM_LINES": "int
Aantal regels behorende bij de order",
   "REMARK": "varchar(max)
Opmerkingen veld"
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/order[/:order_id]"
       }
   }
   "REFERENTIE": "Unieke orderreferentie vanuit CMS",
   "OMSCHRIJVING": "Eigen omschrijving voor de order",
   "REL_CODE": "Unieke code behorende bij deze relatie. Dit kan een emailadres zijn (maar emails kunnen wijzigen), kan ook guid, of getal zijn.",
   "DEL_NAAM": "Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "Plaats van de klant/contactpersoon",
   "DEL_LAND": "Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "Emailadres van de klant/contactpersoon",
   "DEL_METHOD": "Leveringswijze",
   "FIN_PREPAID_AMT": "Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
   "FIN_PAYMENT_METHOD": "Betalingsconditie/methode:
pin/kas/rembours/etc.",
   "LOCATIECODE": "Locatie -> debiteur waaonder de order in Exact komt te staan"
}',
            ),
            'POST' => array(
                'request' => '{
   "REFERENTIE": "Unieke orderreferentie vanuit CMS",
   "OMSCHRIJVING": "Eigen omschrijving voor de order",
   "REL_CODE": "Unieke code behorende bij deze relatie. Dit kan een emailadres zijn (maar emails kunnen wijzigen), kan ook guid, of getal zijn.",
   "DEL_NAAM": "Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "Plaats van de klant/contactpersoon",
   "DEL_LAND": "Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "Emailadres van de klant/contactpersoon",
   "DEL_METHOD": "Leveringswijze",
   "FIN_PREPAID_AMT": "Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
   "FIN_PAYMENT_METHOD": "Betalingsconditie/methode:
pin/kas/rembours/etc.",
   "LOCATIECODE": "Locatie -> debiteur waaonder de order in Exact komt te staan"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/order[/:REFERENTIE]"
       }
   }
   "REFERENTIE": "Unieke orderreferentie vanuit CMS",
   "OMSCHRIJVING": "Eigen omschrijving voor de order",
   "REL_CODE": "Unieke code behorende bij deze relatie. Dit kan een emailadres zijn (maar emails kunnen wijzigen), kan ook guid, of getal zijn.",
   "DEL_NAAM": "Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "Plaats van de klant/contactpersoon",
   "DEL_LAND": "Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "Emailadres van de klant/contactpersoon",
   "DEL_METHOD": "Leveringswijze",
   "FIN_PREPAID_AMT": "Bedrag dat reeds aanbetaald is (totaal nettobedrag voor de gehele order)",
   "FIN_PAYMENT_METHOD": "Betalingsconditie/methode:
pin/kas/rembours/etc.",
   "LOCATIECODE": "Locatie -> debiteur waaonder de order in Exact komt te staan"
}',
            ),
        ),
        'description' => 'Alle webshoporders en verkooporders in de winkel die geleverd gaan worden vanuit Exact (dus de niet-directe leveringen) worden als verkooporder in Exact gezet. Deze opzet lijkt sprekend op de orders vanuit de Eekhoorn webshop met enkele aanvullingen. Verkooporders bestaan uit een header en de regels.
Orders in Exact krijgen de afleveradresgegevens van de consument, maar de consument wordt niet als debiteur in Exact opgeslagen. De order krijgt als debiteur de webshop-debiteur of de debiteur behorend bij de betreffende winkel. Eventuele opmerkingen kunnen als tekstartikel in de orderregel worden gezet. Kadobonnen worden als artikelcode in de orderregels gezet, met een negatief aantal en positief bedrag indien deze ingeleverd worden.	

ORDER_ID is het ID dat automatisch wordt gegenereerd bij het aanmaken van een orderkop (ID) en wordt gebruikt om een order per ID op te vragen. Om te zoeken op REFERENTIE moet de url de volgende vorm hebben:

/order?REFERENTIE={REFERENTIE}',
    ),
    'Webshop\\V1\\Rest\\VerkooporderRegel\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/verkooporder-regel"
       },
       "first": {
           "href": "/verkooporder-regel?page={page}"
       },
       "prev": {
           "href": "/verkooporder-regel?page={page}"
       },
       "next": {
           "href": "/verkooporder-regel?page={page}"
       },
       "last": {
           "href": "/verkooporder-regel?page={page}"
       }
   }
   "_embedded": {
       "verkooporder_regel": [
           {
               "_links": {
                   "self": {
                       "href": "/verkooporder-regel[/:id]"
                   }
               }
              "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
              "ITEMCODE": "varchar(30)
Artikelcode in order",
              "QUANTITY": "float
Aantal verkocht",
              "QUANTITY_DELIVERED": "Aantal reeds geleverd",
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
              "DEL_DATE_DELIVERED": "datetime(YYYY-MM-DD HH:MM;SS)
Datum waarop de geleverde aantallen zijn geleverd",
              "ORDERNR": "char(8)
Exact ordernummer",
              "DEL_METHOD": "varchar(5)
Opties: (Code Omschrijving)
POST - Post 
EXP - pakketdienst 
AFHRN -  Afhalen winkel Hoorn
AFLFT - Afhalen winkel Loft
AFZWD - Afhalen Magazijn Zwaagdijk-Oost"
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
           "href": "/verkooporder-regel[/:id]"
       }
   }
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
   "ITEMCODE": "varchar(30)
Artikelcode in order",
   "QUANTITY": "float
Aantal verkocht",
   "QUANTITY_DELIVERED": "Aantal reeds geleverd",
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
   "DEL_DATE_DELIVERED": "datetime(YYYY-MM-DD HH:MM;SS)
Datum waarop de geleverde aantallen zijn geleverd",
   "ORDERNR": "char(8)
Exact ordernummer",
   "DEL_METHOD": "varchar(5)
Opties: (Code Omschrijving)
POST - Post 
EXP - pakketdienst 
AFHRN -  Afhalen winkel Hoorn
AFLFT - Afhalen winkel Loft
AFZWD - Afhalen Magazijn Zwaagdijk-Oost"
}',
            ),
        ),
        'description' => '- Url: https://is.basiclabel.eu/verkooporder-regel?ORDERNR={ORDERNR}[&REFERENTIE={REFERENTIE}][&page=1][&limit=25]',
    ),
    'Webshop\\V1\\Rest\\Verkooporder\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/verkooporder"
       },
       "first": {
           "href": "/verkooporder?page={page}"
       },
       "prev": {
           "href": "/verkooporder?page={page}"
       },
       "next": {
           "href": "/verkooporder?page={page}"
       },
       "last": {
           "href": "/verkooporder?page={page}"
       }
   }
   "_embedded": {
       "verkooporder": [
           {
               "_links": {
                   "self": {
                       "href": "/verkooporder[/:ORDERNR]"
                   }
               }
              "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
              "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de order",
              "REMARK": "text
Order opmerking",
              "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
              "REL_CODE": "int(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000",
              "DEL_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
              "DEL_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
              "DEL_ADRES1": "varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
              "DEL_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
              "DEL_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
              "DEL_LAND": "varchar(3)
Landcode van de klant/contactpersoon",
              "DEL_TELEFOON": "varchar(50)
Telefoon van de klant/contacpersoon",
              "DEL_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
              "INV_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
              "INV_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
              "INV_ADRES1": "varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)",
              "INV_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
              "INV_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
              "INV_LAND": "varchar(3)
Landcode van de klant/contacpersoon",
              "INV_TELEFOON": "varchar(50)
Telefoon van de klant/contactpersoon",
              "INV_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
              "ORDERSTATUS": "varchar(20)
Status van de verkooporder in tekst",
              "OPENSTAAND_BEDRAG": "float
Bedrag dat nog betaald moet worden door klant",
              "ORD_SOORT": "char(1)",
              "ORDERNR": "char(8)
Exact ordernummer",
              "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/rembours/etc.

50 =>	CREDITCARD,
55 =>	IDEAL,
60 =>	PAYPAL,
70 =>	REMBOURS",
              "TRACKTRACE": "varchar(30)
Track & trace code van de betreffende vervoerder. Op dit moment is dat alleen PostNL.
Voorbeeld van url: https://jouw.postnl.nl/?vind-pakket=Zoek%20mijn%20pakket#!/track-en-trace/3SYHFS009026177/nl/1973%20pk 
De url sluit dus af met tracktrace code/Landcode/Postcode",
              "SYSMODIFIED": "datetime(YYYY-MM-DD HH:MM:SS) Datum waarop de verkooporder is gewijzigd"
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
           "href": "/verkooporder[/:ORDERNR]"
       }
   }
   "REFERENTIE": "int(8)
Unieke orderreferentie vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  10000000",
   "OMSCHRIJVING": "varchar(60)
Eigen omschrijving voor de order",
   "REMARK": "text
Order opmerking",
   "LOCATIECODE": "varchar(4)
WEB (=Webshop NL)
HRN (=Hoorn)
LFT (=Loft)",
   "REL_CODE": "int(8)
Unieke code van klant vanuit CMS
NUMERIEK – UNIEK – OPLOPEND
START_REF =  50000000",
   "DEL_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "DEL_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "DEL_ADRES1": "varchar(100)
Adresregel 1 van de klant/contactpersoon
(straat en huisnummer)",
   "DEL_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "DEL_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "DEL_LAND": "varchar(3)
Landcode van de klant/contactpersoon",
   "DEL_TELEFOON": "varchar(50)
Telefoon van de klant/contacpersoon",
   "DEL_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "INV_NAAM": "varchar(50)
Naam van de klant/contactpersoon",
   "INV_AANSPREEKTITEL": "varchar(10)
Aanspreektitel van de klant/contactpersoon",
   "INV_ADRES1": "varchar(100)
Adresregel1 van de klant/contactpersoon
(straat en huisnummer)",
   "INV_POSTCODE": "varchar(20)
Postcode van de klant/contactpersoon",
   "INV_PLAATS": "varchar(100)
Plaats van de klant/contactpersoon",
   "INV_LAND": "varchar(3)
Landcode van de klant/contacpersoon",
   "INV_TELEFOON": "varchar(50)
Telefoon van de klant/contactpersoon",
   "INV_EMAIL": "varchar(128)
Emailadres van de klant/contactpersoon",
   "ORDERSTATUS": "varchar(20)
Status van de verkooporder in tekst",
   "OPENSTAAND_BEDRAG": "float
Bedrag dat nog betaald moet worden door klant",
   "ORD_SOORT": "char(1)",
   "ORDERNR": "char(8)
Exact ordernummer",
   "FIN_PAYMENT_METHOD": "varchar(2)
Betalingsconditie/methode: pin/kas/rembours/etc.

50 =>	CREDITCARD,
55 =>	IDEAL,
60 =>	PAYPAL,
70 =>	REMBOURS",
   "TRACKTRACE": "varchar(30)
Track & trace code van de betreffende vervoerder. Op dit moment is dat alleen PostNL.
Voorbeeld van url: https://jouw.postnl.nl/?vind-pakket=Zoek%20mijn%20pakket#!/track-en-trace/3SYHFS009026177/nl/1973%20pk 
De url sluit dus af met tracktrace code/Landcode/Postcode",
   "SYSMODIFIED": "datetime(YYYY-MM-DD HH:MM:SS) Datum waarop de verkooporder is gewijzigd"
}',
            ),
        ),
        'description' => '- Url: https://is.basiclabel.eu/verkooporder[?page=1][&limit=25]

- Om te zoeken op LOCATIECODE of REL_CODE moet de url bv. de volgende vorm hebben: /verkooporder?REL_CODE={REL_CODE}',
    ),
);
