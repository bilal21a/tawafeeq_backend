<?php

namespace App\libs;

use Exception;


class FirebaseLib implements FirebaseInterface
{
    private $baseURI;
    private $timeout;
    private $token;
    private $curlHandler;
    private $sslConnection;

    public function __construct($baseURI = '', $token = '')
    {
        if ($baseURI === '') {
            trigger_error('You must provide a baseURI variable.', E_USER_ERROR);
        }

        if (!extension_loaded('curl')) {
            trigger_error('Extension CURL is not loaded.', E_USER_ERROR);
        }

        $this->setBaseURI($baseURI);
        $this->setTimeOut(10);
        $this->setToken($token);
        $this->initCurlHandler();
        $this->setSSLConnection(true);
    }


    public function initCurlHandler()
    {
        $this->curlHandler = curl_init();
    }


    public function closeCurlHandler()
    {
        curl_close($this->curlHandler);
    }


    public function setSSLConnection($enableSSLConnection)
    {
        $this->sslConnection = $enableSSLConnection;
    }


    public function getSSLConnection()
    {
        return $this->sslConnection;
    }


    public function setToken($token)
    {
        $this->token = $token;
    }


    public function setBaseURI($baseURI)
    {
        $baseURI .= (substr($baseURI, -1) === '/' ? '' : '/');
        $this->baseURI = $baseURI;
    }


    private function getJsonPath($path, $options = array())
    {
        $url = $this->baseURI;
        if ($this->token !== '') {
            $options['auth'] = $this->token;
        }
        $path = ltrim($path, '/');
        $query = http_build_query($options);
        return "$url$path.json?$query";
    }


    public function setTimeOut($seconds)
    {
        $this->timeout = $seconds;
    }


    public function set($path, $data, array $options = [])
    {
        return $this->writeData($path, $data, 'PUT', $options);
    }


    public function push($path, $data, array $options = [])
    {
        return $this->writeData($path, $data, 'POST', $options);
    }


    public function update($path, $data, array $options = [])
    {
        return $this->writeData($path, $data, 'PATCH', $options);
    }


    public function get($path, array $options = [])
    {
        try {
            $ch = $this->getCurlHandler($path, 'GET', $options);
            $return = curl_exec($ch);
        } catch (Exception $e) {
            $return = null;
        }
        return $return;
    }


    public function delete($path, array $options = [])
    {
        try {
            $ch = $this->getCurlHandler($path, 'DELETE', $options);
            $return = curl_exec($ch);
        } catch (Exception $e) {
            $return = null;
        }
        return $return;
    }


    private function getCurlHandler($path, $mode, $options = array())
    {
        $url = $this->getJsonPath($path, $options);
        $ch = $this->curlHandler;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->getSSLConnection());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $mode);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        return $ch;
    }

    private function writeData($path, $data, $method = 'PUT', $options = array())
    {
        $jsonData = json_encode($data);
        $header = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        );
        try {
            $ch = $this->getCurlHandler($path, $method, $options);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            $return = curl_exec($ch);
        } catch (Exception $e) {
            $return = null;
        }
        return $return;
    }
}
