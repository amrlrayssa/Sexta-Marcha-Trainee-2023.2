<?php
namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function view()
    {

        return view('/site/login');
    }
    public function confirmaLogin()
    {

        $email = $_POST["login"];
        $password = $_POST["password"];

        $logado = App::get('database')->login('users', $email, $password);

        if($logado){
            session_start();
            $_SESSION['logado'] = true;
            header('Location: /');
        } else { 
            $erro = [
                'erro' => "Usuário ou senha inválidos",
            ] ;
            return view('/site/login', $erro);
        }

    }

public function logout(){
    session_start();
    session_destroy();
    header('Location: /');
}
}
