<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');


    $router->get('admin/lista_usuarios', 'UserController@view');

    $router->post('admin/lista_usuarios/create', 'UserController@create');
    $router->post('admin/lista_usuarios/delete', 'UserController@delete');
    $router->post('admin/lista_usuarios/update', 'UserController@edit');

    $router->get('landing_page' , 'lang_pageController@view');
    $router->get('pvu' , 'pvuController@view');


    return

?>