<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;


    //Lista de posts
    $router->get('admin/lista_posts', 'AdminController@view');
    $router->post('admin/lista_posts/create','AdminController@create');
    $router->post('admin/lista_posts/delete','AdminController@delete');
    $router->post('admin/lista_posts/update','AdminController@edit');



?>