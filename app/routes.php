<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');


    $router->get('admin', 'AdminController@view');

    $router->post('admin/lista_usuarios','AdminController@create');
    $router->post('admin/lista_usuarios','AdminController@delete');
    $router->post('admin/lista_usuarios','AdminController@edit');


?>