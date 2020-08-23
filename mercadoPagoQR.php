<?php

class mercadoPagoQR
{
    var $baseUri;
    private $access_token;
    private $public_key;
    private $user_id;
    private $notification_url;

    function __construct()
    {
        $this->notification_url = "https://b36f7bdbfde7abce01aced3c79fe3c55.m.pipedream.net";
        $this->access_token = 'TEST-5335523335867115-081901-d96ef94cf38a35d008d3992b85438774-112835613';
        $this->public_key = 'TEST-64eb9d26-7f53-4566-b6e3-3430f2e9e424';
        $this->user_id = '112835613';
    }

    /**
     * @param $param
     */
    public function crearSucursal($param)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://api.mercadopago.com/users/{$this->user_id}/stores",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => '{  
                                           "name":"Sucursal Instore",
                                           "business_hours":{  
                                              "monday":[  
                                                 {  
                                                    "open":"08:00",
                                                    "close":"12:00"
                                                 },
                                                 {  
                                                    "open":"14:00",
                                                    "close":"18:00"
                                                 }
                                              ],
                                              "tuesday":[  
                                                 {  
                                                    "open":"09:00",
                                                    "close":"18:00"
                                                 }
                                              ]   
                                           },
                                           "location":{  
                                              "street_number":"3039",
                                              "street_name":"Caseros",
                                              "city_name":"Belgrano",
                                              "state_name":"Capital Federal",
                                              "latitude":-32.8897322,
                                              "longitude":-68.8443275,
                                              "reference":"3er Piso"
                                           },
                                           "external_id":"1234"
                                        }',
            CURLOPT_HTTPHEADER     => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "Content-Type: text/plain"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

    }

    /**
     *@param $param
     */
    public function crearCaja($param)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://api.mercadopago.com/pos",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => '{
                                            "name":"Caja Principal", 
                                            "fixed_amount": true,
                                            "category": 621102,
                                            "store_id": "123456",
                                            "external_store_id": "BK021",
                                            "external_id": "4lph4num3r1c",
                                            "url": "https://www.miempresa.com/MP?locationId=6232&positionId=01" 
                                        }',
            CURLOPT_HTTPHEADER     => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "Content-Type: text/plain"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

    /**
     * @param $monto
     * @return bool|string
     */
    public function crearOrden($monto) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://api.mercadopago.com/mpmobile/instore/qr/630167574/Sucursal002Caja001?access_token=TEST-6708871779657104-082301-9ec53628ab8f0ac4410bb53300dce592-630167574",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => '{
                                            "external_reference": "000003",
                                            "notification_url": "'.$this->notification_url.'",
                                              "items" :[{
                                                "title" : "Pago cuenta",
                                                "currency_id" : "ARS",
                                                "unit_price" : "'.$monto.'",
                                                "quantity" : 1
                                              }]
                                        }',
            CURLOPT_HTTPHEADER     => array(
                "Accept: application/json",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;

    }
}