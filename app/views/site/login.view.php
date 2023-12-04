<?php

session_start();
    if($_SESSION['logado']){
      return redirect('admin_dashboard');
  }
else{
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@1,100;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="/public/css/login.css">
  <title>Sexta Marcha</title>
</head>

<body>
  <div class="main">

    <div class="login_esquerda">
      <img src="/public/assets/carro ayrton.jpg" class="img_login" alt="Pista de corrida">
    </div>

    <div class="login_direita">
      <div class="container">
        <div class="logo">
          <img class="img-logo" src="/public/assets/logo_quadrada_-_fundo_transparente.png" alt="Logo" width="250px"
            height="230px">
        </div>
        <!-- Correção no atributo action -->
        <form action="/logon" method="post" enctype="multipart/form-data">
          <div class="dados">
            <div class="formulario">
              <label for="Email">Digite o seu e-mail</label>
              <div class="icons">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email" placeholder="Email">
              </div>
            </div>

            <div class="formulario">
              <label for="Senha">Digite a sua senha</label>
              <div class="icons">
                <i class=""></i>
                <input type="password" name="senha" placeholder="Senha">
              </div>
            </div>
            <div class="btn_login">
              <button type="submit">Entrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
