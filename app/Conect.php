<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Conect extends Model {

    protected $client;

    function __construct() {
        $this->client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://192.168.0.7:8080/',
          // You can set any number of default request options.
          'timeout' => 2.0,
        ]);
    }

    public function chance($id) {

        try {
            $NroURL = $this->client;
            $response = $NroURL->request('GET', 'user/' . $id);
            return($response->getBody()->getContents());
        } catch (RequestException $e) {
            return 1;
        }
    }

    public function insert($json) {

        try {
            $NroURL = $this->client;
            $response = $NroURL->request('GET', 'insertus/' . $json);
            return($response->getBody()->getContents());
        } catch (RequestException $e) {
            return 1;
        }
    }

    public function insertchance($json) {

        try {
            $NroURL = $this->client;
            $response = $NroURL->request('GET', 'insertchance/' . $json);
            return($response->getBody()->getContents());
        } catch (RequestException $e) {
            return 1;
        }
    }

    public function allusers() {

        try {
            $NroURL = $this->client;
            $response = $NroURL->request('GET', 'alluser');
            return($response->getBody()->getContents());
        } catch (RequestException $e) {
            return 1;
        }
    }

}
