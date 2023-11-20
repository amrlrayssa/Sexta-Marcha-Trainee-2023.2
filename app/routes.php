<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');


    $router->get('admin/lista_usuarios', 'AdminController@view');

    $router->post('admin/lista_usuarios/create', 'AdminController@create');
    $router->post('admin/lista_usuarios/delete', 'AdminController@delete');
    $router->post('admin/lista_usuarios/update', 'AdminController@edit');

?>