<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Foo extends Service
{
    /**
     * Mock a get request for SDK tests
     *
     * @param string  $x
     * @param int  $y
     * @param array  $z
     * @throws Exception
     * @return array
     */
    public function get(string $x, int $y, array $z):array
    {
        $path   = str_replace([], [], '/mock/tests/foo');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;

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
     * @throws Exception
     * @return array
     */
    public function post(string $x, int $y, array $z):array
    {
        $path   = str_replace([], [], '/mock/tests/foo');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a put request for SDK tests
     *
     * @param string  $x
     * @param int  $y
     * @param array  $z
     * @throws Exception
     * @return array
     */
    public function put(string $x, int $y, array $z):array
    {
        $path   = str_replace([], [], '/mock/tests/foo');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a patch request for SDK tests
     *
     * @param string  $x
     * @param int  $y
     * @param array  $z
     * @throws Exception
     * @return array
     */
    public function patch(string $x, int $y, array $z):array
    {
        $path   = str_replace([], [], '/mock/tests/foo');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Mock a delete request for SDK tests
     *
     * @param string  $x
     * @param int  $y
     * @param array  $z
     * @throws Exception
     * @return array
     */
    public function delete(string $x, int $y, array $z):array
    {
        $path   = str_replace([], [], '/mock/tests/foo');
        $params = [];

        $params['x'] = $x;
        $params['y'] = $y;
        $params['z'] = $z;

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

}