<?php

namespace App\libs;

/**
 * Interface FirebaseInterface
 *
 * @package Firebase
 */
interface FirebaseInterface
{

    public function setToken($token);


    public function setBaseURI($baseURI);


    public function setTimeOut($seconds);


    public function set($path, $data, array $options = []);


    public function push($path, $data, array $options = []);


    public function update($path, $data, array $options = []);


    public function get($path, array $options = []);


    public function delete($path, array $options = []);
}
