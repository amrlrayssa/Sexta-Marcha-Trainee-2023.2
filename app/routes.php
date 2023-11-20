<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');


    $router->get('admin', 'AdminController@view');

    $router->post('admin/lista_usuarios/create', 'AdminController@create');
    $router->post('admin/lista_usuarios/delete', 'AdminController@delete');
    $router->post('admin/lista_usuarios/update', 'AdminController@edit');

    $router->get('login', 'LoginController@view');
    $router->post('views', 'LoginController@confirmaLogin');
    $router->post('logout', 'LoginController@logout');

    $router->get('landing_page', 'LandingPageController@view');



?>