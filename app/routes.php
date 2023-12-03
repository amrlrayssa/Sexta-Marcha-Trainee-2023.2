<?php

namespace App\Controllers;
use App\Core\Router;


    //Lista de posts
    $router->get('admin/lista_posts', 'AdminController@view');
    $router->post('admin/lista_posts/create','AdminController@create');
    $router->post('admin/lista_posts/delete','AdminController@delete');
    $router->post('admin/lista_posts/update','AdminController@edit');

    //Lista de usuarios
    $router->get('admin/lista_usuarios', 'UserController@view');
    $router->post('admin/lista_usuarios/create', 'UserController@create');
    $router->post('admin/lista_usuarios/delete', 'UserController@delete');
    $router->post('admin/lista_usuarios/update', 'UserController@edit');

    //post individual
    $router->get('pvu' , 'pvuController@view');

    //landing page
    $router->get('' , 'lang_pageController@view');

    //login
    $router->get('login', 'LoginController@view');
    $router->post('logon', 'LoginController@login');
    $router->get('logout', 'LoginController@logout');

    //dashboard
    $router -> get('admin_dashboard', 'dashboardController@view');

?>