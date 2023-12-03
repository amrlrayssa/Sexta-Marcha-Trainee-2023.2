<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function view()
    {
        $page = 1;

        if(isset($_GET['pagina'])&& !empty ($_GET['pagina'])){

            $page = intval ($_GET['pagina']);

            if($page<1){

                return redirect ('admin/lista_usuarios');

            }


        }

            $itens_per_page = 4;
            $start_limit = ($itens_per_page * $page) - $itens_per_page;
            $rows_count = App::get('database')->countAll('users');

            if($start_limit>$rows_count){

                return redirect ('admin/lista_usuarios');

            }

            $total_pages = ceil ($rows_count/$itens_per_page);

        $users = App::get('database')->selectAll('users' , $start_limit , $itens_per_page);
        $tables = [
            'users' => $users,
            'page' => $page,
            'total_pages' => $total_pages,
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