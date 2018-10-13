<?php

require '../vendor/autoload.php';
require '../config/constancts.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer("../resouces/views/");



$app->get('/[{nome}]', function ($request ,$response) {
   
    $nome = ($request->getAttribute('nome') == true ) ? $request->getAttribute('nome') : null; ;
    $vars['nome'] = $nome;
    $response = $this->view->render($response, 'template.php', $vars);
    
    return $response;
});
$app->run();

?>
