
<?php  
    session_start();
    if($_SESSION['logado']){
  }
else{
  return redirect('login');
  }
 ?>

<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="../../../public/css/admin_dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sexta Marcha - Dashboard</title>
</head>

<body>

  <img src="../../../public/assets/logo_sem_bordas.png" alt="">
  <div class="container">

  <a class="landing" href="/">
    <div class="aba">
      <i class="fas fa-house-user mt-2"></i>
      <span>Home</span>
    </div>
</a>
    <a class="lpd" href="admin/lista_posts">
    <div class="aba">
      <i class="fas fa-newspaper mt-2"></i>
      <span>Posts</span>
    </div> 
   </a>
  
   <a class="ldu" href="admin/lista_usuarios">
     <div class="aba">
      <i class="fas fa-user mt-2"></i>
      <span>Usuários</span>
    </div>
   </a>

    <a class="login" href="/logout">
    <div class="aba">
      <i class="fas fa-sign-out-alt mt-2"></i>
      <span>LogOut</span>
    </div> </a>
  </div>
  <script src="https://kit.fontawesome.com/4e7ac1064c.js" crossorigin="anonymous">
  </script>
  
</body>

</html>
