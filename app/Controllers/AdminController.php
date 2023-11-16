<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $usuarios = App::get('database')->selectAll('usuarios');
        $tables = [
            'posts' => $posts,
            'usuarios' => $usuarios,
        ];

        return view('admin/postList', $tables);
    }


public function create()
{
    $parameters = [
        'titulo' => $_POST['titulo'],
        'conteudo' => $_POST['conteudo'],
        'imagem' => $_POST['imagem'],
        'data' => $_POST['data'],
        'autor' => $_POST['autor'],
    ];

    App::get('database')->insert('usuarios', $parameters);

    header('Location: /admin');

    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin/postList');
    }

    public function edit(){
        $parameters =[
            'titulo' => $_POST['titulo'],
        'conteudo' => $_POST['conteudo'],
        'imagem' => $_POST['imagem'],
        'data' => $_POST['data'],
        'autor' => $_POST['autor'],
        ];
        app::get('database')-> edit('usuarios', $_POST['id'], $parameters);
        header('Location: /admin');

        }
}

?>