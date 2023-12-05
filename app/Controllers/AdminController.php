<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function view()
    {
        $page = 1;
        
        if(isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if($page < 1)
            {
                return redirect('admin/lista_posts');
            }
        }

        $items_per_page = 4;
        $start_limit = ($items_per_page * $page) - $items_per_page;
        $rows_count = App::get('database')->countAll('posts');

        if($start_limit > $rows_count)
        {
            return redirect('admin/lista_posts');
        }

        $total_pages = ceil($rows_count / $items_per_page);

        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);
        
        $tables = [
            'posts' => $posts,
            'page' => $page,
            'total_pages' => $total_pages,
        ];


        return view('admin/ldp', $tables);
    }

    public function create()
    {
        if(isset($_FILES['imagem']))
        {
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
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
 
        header('Location: /admin/lista_posts');
 
    } 

    public function delete()
    {
        $id = $_POST['id'];
        unlink($_POST['apagarimg']);
        App::get('database')->delete('posts', $id);
        header('Location: /admin/lista_posts');
    }

    public function edit()
    {
        if(!empty($_FILES['imagem']['tmp_name']))
        {
            unlink($_POST['manterimg']);

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "public/img/";
            $caminho = $diretorio.$novo_nome;
            move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
                
        }else{
            $caminho = $_POST['manterimg'];
        }

        $parameters = [
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'data' => $_POST['data'],
            'conteudo' => $_POST['conteudo'],
            'imagem'=> $caminho,

        ];
        App::get('database')->edit('posts', $_POST['id'] ,$parameters);
        header('Location: /admin/lista_posts');
    }

}

?>