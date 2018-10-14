<?php

namespace App\Action\Admin;

final class HomeAction {
    
    private $container;
    
    function __construct($container) {
       $this->container = $container;
    }
    
    public function index($request, $response){
        $vars['page'] = 'admin\home';        
        return $this->container->view->render($response, 'template.php', $vars);
    }
    
    
}