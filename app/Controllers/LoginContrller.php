<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function view()
    {

        return view('login');
    }
    public function confirmaLogin()
    {
        $email = $_POST["login"];
        $password = $_POST["password"];

        $JaLagdo = app::get('database')->login('users', $email, $password);

        if ($JaLagdo) {
            session_start();
            $_SESSION['logado'] = true;
            header('Location /');
        } else {
            $erro = [
                'erro' => "Senha invalida",
            ];
            return view('login', $erro);
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }
}
?>