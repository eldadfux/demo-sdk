<?php

use Appwrite\Client;
use Appwrite\Services\General;

$client = new Client();

$client
;

$general = new General($client);

$result = $general->empty();