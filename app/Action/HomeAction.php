<?php

namespace App\Action;

final class HomeAction {
    
    private $container;
    
    function __construct($container) {
       $this->container = $container;
    }
    
    public function index($request, $response){
        $vars['page'] = 'home';        
        return $this->container->view->render($response, 'template.php', $vars);
    }
    
    public function sobre($request, $response){
        $vars['page'] = 'sobre';        
        return $this->container->view->render($response, 'template.php', $vars);
    }
    
    public function contato($request, $response){
        $vars['page'] = 'contato';        
        return $this->container->view->render($response, 'template.php', $vars);
    }
}