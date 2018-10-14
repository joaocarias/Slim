<?php

// Administação
$app->get('/admin', 'App\Action\Admin\HomeAction:index');

// Site
$app->get('/', 'App\Action\HomeAction:index');
$app->get('/contato', 'App\Action\HomeAction:contato');
$app->get('/sobre', 'App\Action\HomeAction:sobre');
