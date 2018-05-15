<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replic extends Model {

    protected $client;

    function __construct() {
        $this->client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://192.168.0.7:8080/',
          // You can set any number of default request options.
          'timeout' => 2.0,
        ]);
    }

    public function chance() {

        try {
            $NroURL = $this->client;
            $response = $NroURL->request('GET', 'user');
            return($response->getBody()->getContents());
        } catch (RequestException $e) {
            return 1;
        }
    }

}
