<?php

require '../vendor/autoload.php';
require '../config/constancts.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => $config]);
$app->get('/', function ($request ,$response) {
    
    $response->getBody()->write("Hello");

    return $response;
});
$app->run();

?>
