<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class langpageController{

    public function view(){
        $posts = App::get('database')->selecAll('posts');
        $users = App::get('database')->selecAll('users');

        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];
        return view('landing_page', compact('users', 'posts'));

    }
}
?>