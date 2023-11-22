<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class langpageController{

    public function view(){
        $post = App::get('database')->selectAll('post');
        $users = App::get('database')->selectAll('users');

        $tables = [
            'post' => $post,
            'users' => $users,
        ];
        return view('/site/landing_page', compact('users', 'post'));

    }
}
?>