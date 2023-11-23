<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function view()
    {
        
        $users = App::get('database')->selectAll('users');
        $tables = [
            'users' => $users,
        ];

        return view('admin/Lista_usuarios', $tables);
    }


    public function create()
        
    {

        $parameters = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha'],

        ];

        App::get('database')->insert('users', $parameters);

        header('Location: /admin/lista_usuarios');

    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin/lista_usuarios');
    }

    public function edit(){
            // echo $_POST['id'];
            // die();

        $parameters =[

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],

        ];
        app::get('database')-> edit('users', $_POST['id'], $parameters);
        header('Location: /admin/lista_usuarios');


        }
        
}

?>