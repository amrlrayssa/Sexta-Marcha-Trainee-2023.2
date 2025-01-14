<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class pvuController
{

    public function view()
    {
        $id = $_POST['id'];
        $posts = App::get('database')->selectPost($id, 'posts');
        $users = App::get('database')->selectAll('users');

        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        return view('site/pvu', $tables);
    }
}

?>