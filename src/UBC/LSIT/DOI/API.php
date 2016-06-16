<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 22/01/2016
     * Time: 10:56 AM
     */

    namespace UBC\LSIT\DOI\Services;

    use GuzzleHttp\Client;

    class API {

        private $api;
        private $dataciteClient;

        /**
         * API constructor.
         */
        public function __construct ($api = false, $token = false)
        {
            if (!$api || !$token) {
                throw new APIException();
            }
            $this->api = $api;
            $this->dataciteClient = new Client();
        }

        public function getDoi ($doi, array $headers = [])
        {
            $endpoint = "/doi";
            $path = "/{$doi}";

            $result = $this->dataciteClient->request (
                'GET',
                $this->api . $endpoint . $path
            );
            error_log ($result->getStatusCode ());
            error_log ($result->getHeader ('content-type'));

            return [
                'status'       => $result->getStatusCode (),
                'content-type' => $result->getHeader ('content-type'),
                'response'     => $result->getBody ()
            ];
        }

        public function getMetadata ($doi, array $headers = [])
        {
            $endpoint = "/metadata";
            $path = "/{$doi}";

            $result = $this->dataciteClient->request (
                'GET',
                $this->api . $endpoint . $path
            );
            error_log ($result->getStatusCode ());
            error_log ($result->getHeader ('content-type'));

            return [
                'status'       => $result->getStatusCode (),
                'content-type' => $result->getHeader ('content-type'),
                'response'     => $result->getBody ()
            ];
        }
    }
