<?php

    class paxel_API {
        private $api_key;
        private $api_base = 'http://stage-ecomm-api.paxel.co/v1';

        const SHIPMENTS = '/shipments';
        const RATES = '/rates';

        function __construct($api_key = '') {
            $this->api_key = ($api_key) ? $api_key : $this->api_key;
        }

    }

?>