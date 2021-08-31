<?php

//richiede i dati dal database
require_once __DIR__ . "/../database/database.php";

//prende la funzione che permette la stampa del json
require_once __DIR__ . "/../functions/printJson.php";

printJson($database);

//test ok per http://localhost:8888/php-ajax-dischi/api/api.php


?>