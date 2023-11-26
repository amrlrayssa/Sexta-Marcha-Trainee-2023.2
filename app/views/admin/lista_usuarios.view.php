<?php  
    session_start();
    if($_SESSION['logado']){
  }
else{
  return redirect('login');
  }
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexta Marcha</title>
    <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/lista_usuarios.css">
    <link rel="stylesheet" href="/public/css/modal.css">
</head>

<body>
    <div class="filter" id ="filtro"></div> 
    <div class="page" id="page">
        <div class="container">
            <div class="cardtitle">
                <b class="p">Lista de Usuários</b>
                <button type="button" class="btn btn-outline-warning" id="openCreatPost"onclick="openmodal('modal')"><b>Criar Usuário</b></button>
                <button type="button" class="button2" id="openCreatPostM" onclick="openmodal('modal')"><b>+</b></button>
            </div>
            
            <div class="tabela">
                <table class="tb">
                    <thead>
                        <tr>
                            <th class="t1th">Id</th>
                            <th class="t1_5th">Usuário</th>
                            <th class="t2th">Email</th>
                            <th class="t3th">Ação</th>
                        </tr>
                    </thead>
                </table>
                <table class="tbb">
                    <tbody>
                        <?php $cont = 1;?>
                    <?php foreach($users as $user): ?> 
                        <tr>
                            <th class="t1th"><?php echo $cont ?></th>
                            <td class="t1_5th"><?php echo $user->nome ?></td>
                            <td class="t2th"><?php echo $user->email ?></td>

                            <td class="t3th"><button type="button" class="btn btn-outline-light" id="openVerPost"onclick="openmodal('modal_ver<?= $user->id?>')">Visualizar</button><button
                                    type="button" class="btn btn-outline-info" id="openEditPost" onclick="openmodal('modal_edicao<?= $user->id?>')">Editar</button><button type="button"
                                    class="btn btn-outline-danger" id="openRmvPost"onclick="openmodal('modal_rmv<?= $user->id?>')">Excluir</button></td>
    
                            <!--Icons-->
                            <td class="t3th-icons">
                                <button type="button" class="btn btn-outline-light" id="openVerPostM"onclick= "openmodal('modal_ver<?= $user->id?>')">👁</button>
                                <button type="button" class="btn btn-outline-info" id="openEditPostM" onclick="openmodal('modal_edicao<?= $user->id?>')">✎</button>
                                <button type="button" class="btn btn-outline-danger" id="openRmvPostM"onclick="openmodal('modal_rmv<?= $user->id?>')"><ion-icon name="trash-outline"></ion-icon></button>
                            </td>
                        </tr>
                    <div class = "modal" id = "modal_edicao<?= $user->id?>" >

            <div class = "ModalHead">
                <h2 class = "Cadastro-Post" >Edição de Usuários </h2>
            </div>
            
            <form action = "/admin/lista_usuarios/update" method = "post" enctype = "multipart/form-data">
            
                <div class = "form-group" >
                    <label for = "nome" > Nome:</label>
                    <input type = "text" class = "form-control" id = "nome" name ="nome" value ="<?php echo $user->nome ?>" placeholder = "ediatr nome" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "autor" > Email:</label>
                    <input type = "text" class = "form-control" id = "email" name ="email" value = "<?php echo $user->email ?>" placeholder = "editar email" required>
                </div>
    
                <div class = "form-group senhaEdit" >
                    <label for = "data"> Senha </label>
                     <input type = "password" class = "form-control" id = "password" name ="senha"  value =  ""  placeholder = "editar senha" required style="width: 70%;"> 
                    <input hidden name="id" value = "<?= $user->id?>">
                </div>
    
            
                <div class = "botoes">
                    <button type = "Salvar" class = "btn btn-primary" id = "Salvar" > Salvar </button>
                    <button type = "button" class = "btn btn-primary closeEdit Cancelar"onclick="closemodal('modal_edicao<?= $user->id?>')" > Cancelar </button>
                </div>
    
            </form>
        
        
    </div>
    
    <div class = "modal" id = "modal_rmv<?= $user->id?>">

          
        <div class = "ModalHead">

            <h2 class = "text" > Excluir Usuários </h2>
        </div>
        
            <div class = "warning" >
                <h3>Atenção, uma vez que essa ação for concluida, não é possivel desfazê-la! <p>Tem certeza que deseja excluir esse Usuário?</p></h3>
            </div>
            
            <div class = "botoes">
                <button type = "excluir" class = "btn btn-primary" id = "excluir" onclick="excluir()" > Excluir </button>
                <button type = "button" class = "btn btn-primary closeRmv Cancelar"onclick="closemodal('modal_rmv<?= $user->id?>')" > Cancelar </button>
                <form id="excluirForm<?= $user->id?>" action = "/admin/lista_usuarios/delete" method = "post" enctype = "multipart/form-data">
                <input hidden name="id" value= "<?= $user->id?>">
                </form> 
                

            </div>

                    </div>

    <div class = "modal" id="modal_ver<?= $user->id?>">

    
        <div class = "ModalHead">
            <h2 class = "Cadastro-Post" > Visualizar Usuários </h2>
            
        </div>
        
        <!-- <form action = "processar_cadastro.php" method = "post" enctype = "multipart/form-data"> -->
        
            <div class = "form-group" >
                <label for = "nome" > Nome:</label>
                <p><?php echo $user->nome; ?> </p>
                
            </div>
    
            <div class = "form-group" >
                <label for = "email" > Email:</label>
                <p> <?php echo $user->email; ?> <p>
                
            </div>
    
            <div class = "botoes" >
                <button class = "btn btn-primary  bt_Visu "  id = "Salvar" > Salvar </button>
                <button type="button" class = "btn btn-primary closever Cancelar bt_Visu" onclick="closemodal('modal_ver<?= $user->id?>')"> Cancelar </button>
            </div>
    
    </div>
                        <?php $cont++; ?>
                    <?php endforeach ?>

                    </tbody>
                </table>
                
            </div>
        </div>
        
        </div>
        <div class = "modal" id="modal">
                    
            <div class = "ModalHead criacao" >
                <h2 class = "Cadastro-Post" > Criação de Usuários </h2>
                
            </div>
            
            <form action = "/admin/lista_usuarios/create" method = "post" enctype = "multipart/form-data">
            
                <div class = "form-group" >
                    <label for = "titulo" > Nome:</label>
                    <input type = "text" class = "form-control" id = "nome" name ="nome" placeholder = "Digite o seu nome" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "autor" > Email:</label>
                    <input type = "text" class = "form-control" id = "email" name = "email" placeholder = "Digite o seu email" required>
                </div>
    
                <div class = "form-group senha" >
                    <label for = "data"> Senha:</label>
                    <input type = "password" class = "form-control" id = "senha" name = "senha" placeholder = "Digite a sua senha" required>
                </div>
    
                
                <div class = "botoes " >
                    <button type = "Salvar" class = "btn btn-primary" id = "Salvar" > Salvar </button>
                    <button type = "button" class = "btn btn-primary close Cancelar"onclick="closemodal('modal')" > Cancelar </button>
                </div>
    
            </form>
          
        </div>
    

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="/public/js/modal.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script> 
        function excluir(){
            document.getElementById('excluirForm<?= $user->id?>').submit();
        }

    </script>
</html>