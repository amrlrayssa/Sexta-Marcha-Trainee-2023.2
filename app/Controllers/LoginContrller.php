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
    public function login(){
     $id = $_POST['id'];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $usuarioAutenticado = App::get('database')->login('users', $email, $senha);

    if ($usuarioAutenticado) {
        session_start();
        // Configura o tempo de expiração da sessão para 1 hora (3600 segundos)
        $tempoExpiracao  = 3600; 
         session_set_cookie_params($tempoExpiracao );
        session_regenerate_id(true);
        //A função session_regenerate_id() é usada para regenerar o ID da sessão.
        // Isso é útil para mitigar ataques de fixação de sessão. 
       //  O ID da sessão é uma chave única associada a cada sessão do usuário.

        $_SESSION['id'] = $usuarioAutenticado['id']; 
        $_SESSION['logado'] = true;


        header('Location: /admin_dashboard');
    } else {    
        $erro = [
            'erro' => "Usuário ou senha inválidos",
        ];
        return view('/site/login', $erro);
    }
}

//está encerrando a sessão do usuário (por meio de session_destroy()) 
//e redirecionando-o para a página inicial (por meio de header('Location: /')).
// Isso é típico em processos de logout para garantir que qualquer informação de sessão relacionada ao usuário seja removida,
// e o usuário seja direcionado para uma página específica após o logout.
    public function logout(){
    session_start();
    session_destroy();
    return redirect('login');
    }
}
