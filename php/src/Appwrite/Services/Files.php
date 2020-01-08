<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Files extends Service
{
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
        $path   = str_replace([], [], '/mock/tests/files');
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