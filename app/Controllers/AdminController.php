<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];

        return view('admin/ldp', $tables);
    }

    public function create()
    {
        if(isset($_FILES['imagem']))
        {
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = md5(time()) . "." . $extensao;
            $diretorio = "public/img/";
            $caminho = $diretorio.$novo_nome;
            move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
                
        }

        $parameters = [
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'data' => $_POST['data'],
            'conteudo' => $_POST['conteudo'],
            'imagem'=> $caminho,

        ];


        App::get('database')->insert('posts', $parameters);
 
        header('Location: /admin/ldp');
 
    } 

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);
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
        App::get('database')->edit('posts', $_POST['id'] ,$parameters);
    }

}

?>