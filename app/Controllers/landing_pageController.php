<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class landing_pageController
{

    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        return view('/site/landing_page', $tables);
    }
}
?>
