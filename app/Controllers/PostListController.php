<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostListController
{

    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        return view('/site/postlist', $tables);
    }

    public function search(){
        $titulo_buscado = $_GET['search'];
        $posts = App::get('database')->searchPost($titulo_buscado);

        return view('site/postlist', compact('posts'));
    }
}

?>
