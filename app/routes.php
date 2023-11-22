<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;


    //Lista de posts
    $router->get('admin/ldp', 'AdminController@view');
    $router->post('admin/ldp/create','AdminController@create');
    $router->post('admin/ldp/delete','AdminController@delete');
    $router->post('admin/ldp/update','AdminController@edit');



?>