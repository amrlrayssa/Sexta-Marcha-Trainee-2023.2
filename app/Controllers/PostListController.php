<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostListController
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

        $items_per_page = 5;
        $start_limit = ($items_per_page * $page) - $items_per_page;
        $rows_count = App::get('database')->countAll('posts');

        if($start_limit > $rows_count)
        {
            return redirect('admin/lista_posts');
        }

        $total_pages = ceil($rows_count / $items_per_page);

        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
            'page' => $page,
            'total_pages' => $total_pages,
        ];

        return view('/site/postlist', $tables);
    }

    public function search(){

        $page = 1;
        
        if(isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if($page < 1)
            {
                return redirect('admin/lista_posts');
            }
        }

        $items_per_page = 5;
        $start_limit = ($items_per_page * $page) - $items_per_page;
        $rows_count = App::get('database')->countAll('posts');

        if($start_limit > $rows_count)
        {
            return redirect('admin/lista_posts');
        }

        $total_pages = ceil($rows_count / $items_per_page);

        $titulo_buscado = $_GET['search'];
        $posts = App::get('database')->searchPost($titulo_buscado);
        $tables=[
            'posts' => $posts,
            'page' => $page,
            'total_pages' => $total_pages,
        ];

        return view('site/postlist', $tables);
    }
}

?>
