<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class General extends Service
{
    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return array
     */
    public function empty():array
    {
        $path   = str_replace([], [], '/mock/tests/general/empty');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return array
     */
    public function redirect():array
    {
        $path   = str_replace([], [], '/mock/tests/general/redirect');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return array
     */
    public function redirected():array
    {
        $path   = str_replace([], [], '/mock/tests/general/redirected');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a post request for SDK tests
     *
     * @param string  $x
     * @param int  $y
     * @param array  $z
     * @param \CurlFile  $file
     * @throws Exception
     * @return array
     */
    public function upload(string $x, int $y, array $z, \CurlFile $file):array
    {
        $path   = str_replace([], [], '/mock/tests/general/upload');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;
        $params['file'] = $file;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'multipart/form-data',
        ], $params);
    }

}