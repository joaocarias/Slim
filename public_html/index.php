<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

require '../vendor/autoload.php';
require '../config/constancts.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer("../resouces/views/");

$app->get('/', function ($request ,$response) {
   
    $vars['page'] = "home";   
    $response = $this->view->render($response, 'template.php', $vars);
    
    return $response;
});

$app->get('/sobre', function ($request ,$response) {
   
    $vars['page'] = "sobre";   
    $response = $this->view->render($response, 'template.php', $vars);
    
    return $response;
});

$app->get('/contato', function ($request ,$response) {
   
    $vars['page'] = "contato";   
    $response = $this->view->render($response, 'template.php', $vars);
    
    return $response;
});

$app->run();

?>
