<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function view()
    {
        $posts = App::get('database')->selectAll('post');
        $tables = [
            'post' => $posts,
        ];

        return view('admin/ldp', $tables);
    }

    public function create()
    {
        $parameters = [
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'data' => $_POST['data'],
            'conteudo' => $_POST['conteudo'],
            'imagem'=> $_FILES['imagem'],

        ];

        App::get('database')->insert('post', $parameters);
 
        header('Location: /admin/ldp');
 
    } 

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('post', $id);
        header('Location: /admin/ldp');
    }

    public function edit()
    {
        $parameters = [
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'data' => $_POST['data'],
            'conteudo' => $_POST['conteudo'],
            'imagem'=> $_FILES['imagem'],

        ];
        App::get('database')->edit('post', $_POST['id'] ,$parameters);
    }

}

?>