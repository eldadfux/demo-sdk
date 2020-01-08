<?php

use Appwrite\Client;
use Appwrite\Services\Files;

$client = new Client();

$client
;

$files = new Files($client);

$result = $files->upload('[]', null, [], new \CURLFile('/path/to/file.png', 'image/png', 'file.png'));