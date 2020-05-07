<?php

    class paxel_API {
        private $api_key;
        private $api_base = 'http://stage-ecomm-api.paxel.co/v1';

        const SHIPMENTS = '/shipments';
        const RATES = '/rates';

        function __construct($api_key = '') {
            $this->api_key = ($api_key) ? $api_key : $this->api_key;
        }

        private function callAPI($endpoint, $extra_options = array()) {
            $curl = curl_init();
            $curl_options = array(
                CURLOPT_URL => $this->api_base . $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                URLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'key: ' . $this->api_key
                ),
            );

            foreach($extra_options as $options => $value) {
                $curl_options[$option] = value;
            }

            curl_setopt_array($curl, $curl_options);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);

            $response = json_decode($response, true);
            return $response['rajaongkir'];
        }


    }

?>