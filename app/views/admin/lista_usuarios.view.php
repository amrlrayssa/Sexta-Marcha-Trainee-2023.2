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
    <div class="page" id="page">
        <div class="container">
            <div class="cardtitle">
                <b class="p">Lista de Usuários</b>
                <button type="button" class="btn btn-outline-warning" id="openCreatPost"><b>Criar Usuário</b></button>
                <button type="button" class="button2" id="openCreatPostM"><b>+</b></button>
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

                        <tr>
                            <th class="t1th">1</th>
                            <td class="t1_5th">Felipe Nogueira</td>
                            <td class="t2th">felipe.nogueira@sextamarcha</td>
                            <td class="t3th"><button type="button" class="btn btn-outline-light" id="openVerPost">Visualizar</button><button
                                    type="button" class="btn btn-outline-info" id="openEditPost">Editar</button><button type="button"
                                    class="btn btn-outline-danger" id="openRmvPost">Excluir</button></td>
    
                            <!--Icons-->
                            <td class="t3th-icons"><button type="button" class="btn btn-outline-light" id="openVerPostM"><ion-icon name="eye-outline"></ion-icon></button><button
                                    type="button" class="btn btn-outline-info" id="openEditPostM"><ion-icon name="pencil-outline"></ion-icon></button><button type="button"
                                    class="btn btn-outline-danger" id="openRmvPostM"><ion-icon name="trash-outline"></ion-icon></button></td>
                        </tr>
                        <tr>
                            <th class="t1th">2</th>
                            <td class="t1_5th">Breno Furtado</td>
                            <td class="t2th">breno.furtado@sextamarcha</td>
                            <td class="t3th"><button type="button" class="btn btn-outline-light" id="view">Visualizar</button><button
                                    type="button" class="btn btn-outline-info" id="edit">Editar</button><button type="button"
                                    class="btn btn-outline-danger">Excluir</button></td>
    
                                    <!--Icons-->
                                    <td class="t3th-icons"><button type="button" class="btn btn-outline-light" id="view"><ion-icon name="eye-outline"></ion-icon></button><button
                                        type="button" class="btn btn-outline-info" id="edit"><ion-icon name="pencil-outline"></ion-icon></button><button type="button"
                                        class="btn btn-outline-danger"><ion-icon name="trash-outline"></ion-icon></button></td>
                        </tr>   
                        <tr>
                            <th class="t1th">3</th>
                            <td class="t1_5th">Davi Pacheco</td>
                            <td class="t2th">davi.pacheco@sextamarcha</td>
                            <td class="t3th"><button type="button" class="btn btn-outline-light" id="view">Visualizar</button><button
                                    type="button" class="btn btn-outline-info" id="edit">Editar</button><button type="button"
                                    class="btn btn-outline-danger">Excluir</button></td>
    
                                    <!--Icons-->
                                    <td class="t3th-icons"><button type="button" class="btn btn-outline-light" id="view"><ion-icon name="eye-outline"></ion-icon></button><button
                                        type="button" class="btn btn-outline-info" id="edit"><ion-icon name="pencil-outline"></ion-icon></button><button type="button"
                                        class="btn btn-outline-danger"><ion-icon name="trash-outline"></ion-icon></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class = "modal" id="modal">
                    
            <div class = "ModalHead">
                <h2 class = "Cadastro-Post" > Criação de Usuários </h2>
                
            </div>
            
            <form action = "processar_cadastro.php" method = "post" enctype = "multipart/form-data">
            
                <div class = "form-group" >
                    <label for = "titulo" > Titulo:</label>
                    <input type = "text" class = "form-control" id = "titulo" name ="titulo" placeholder = "Digite o titulo" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "autor" > Autor:</label>
                    <input type = "text" class = "form-control" id = "autor" name = "autor" placeholder = "Digite o autor" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "data"> Data de Criação:</label>
                    <input type = "date" class = "form-control" id = "data" name = "data" placeholder = "Digite a data" required style="width: 55%;">
                </div>
    
                <div class = "form-group">
                    <label for = "conteudo" id = "label-centered" > Conteudo:</label>
                    <textarea class = "form-control" id = "conteudo" name = "conteudo" placeholder = "Digite o post" required style = "height: 100%; width: 100%;"></textarea>
                </div>
    
                <div class = "form-group img" id = "Imagem" >
                    <label for = "imagem" id = "label-centered" > Imagem:</label>
                    <input type = "file" class = "form-control-file" id = "imagem" name = "imagem" accept = "image/*" placeholder = "Escolha a Imagem" required>
                </div>
                
                <div class = "botoes" >
                    <button type = "Salvar" class = "btn btn-primary" id = "Salvar" > Salvar </button>
                    <button type = "Cancelar" class = "btn btn-primary close Cancelar" > Cancelar </button>
                </div>
    
            </form>
        
        </div>
    <div class = "modal" id = "modal_edicao">

            <div class = "ModalHead">
                <h2 class = "Cadastro-Post" >Edição de Usuários </h2>
            </div>
            
            <form action = "processar_cadastro.php" method = "post" enctype = "multipart/form-data">
            
                <div class = "form-group" >
                    <label for = "titulo" > Titulo:</label>
                    <input type = "text" class = "form-control" id = "titulo" name ="titulo" placeholder = "Digite o titulo" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "autor" > Autor:</label>
                    <input type = "text" class = "form-control" id = "autor" name = "autor" placeholder = "Digite o autor" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "data"> Data de Criação:</label>
                    <input type = "date" class = "form-control" id = "data" name = "data" placeholder = "Digite a data" required style="width: 70%;">
                </div>
    
                <div class = "form-group">
                    <label for = "conteudo" id = "label-centered" > Conteudo:</label>
                    <textarea class = "form-control" id = "conteudo" name = "conteudo" placeholder = "Digite o post" required style = "height: 70%; width: 70%;"></textarea>
                </div>
    
                <div class = "form-group img" id = "Imagem" >
                    <label for = "imagem" id = "label-centered" > Imagem:</label>
                    <input type = "file" class = "form-control-file" id = "imagem" name = "imagem" accept = "image/*" placeholder = "Escolha a Imagem" required>
                </div>
                
                <div class = "botoes" >
                    <button type = "Salvar" class = "btn btn-primary" id = "Salvar" > Salvar </button>
                    <button type = "Cancelar" class = "btn btn-primary closeEdit Cancelar" > Cancelar </button>
                </div>
    
            </form>
        
        
    </div>
    
    <div class = "modal" id = "modal_rmv">
                    
        <div class = "ModalHead">
            <h2 class = "Cadastro-Post excluir_post" > Excluir Usuários </h2>
        </div>
        
            <div class = "warning" >
                <h3>Atenção, uma vez que essa ação for concluida, não é possivel desfazê-la! <p>Tem certeza que deseja excluir esse Usuário?</p></h3>
            </div>
            
            <div class = "botoes" >
                <button type = "excluir" class = "btn btn-primary" id = "excluir" > Excluir </button>
                <button type = "Cancelar" class = "btn btn-primary closeRmv Cancelar" > Cancelar </button>
            </div>

    </div>

    <div class = "modal" id="modal_ver">
                    
        <div class = "ModalHead">
            <h2 class = "Cadastro-Post" > Visualizar Usuários </h2>
            
        </div>
        
        <!-- <form action = "processar_cadastro.php" method = "post" enctype = "multipart/form-data"> -->
        
            <div class = "form-group" >
                <label for = "titulo" > Nome:</label>
                <input type = "text"  id = "titulo" name ="titulo" value="blue pen" readonly class = "text-view"
                >
            </div>
    
            <div class = "form-group" >
                <label for = "autor" > Email:</label>
                <input type = "text" id = "autor" name = "autor" value= "blue pen" readonly class = "text-view"
                >
            </div>
    
            <div class = "botoes" >
                <button class = "btn btn-primary  bt_Visu "  id = "Salvar" > Salvar </button>
                <button class = "btn btn-primary closever Cancelar bt_Visu" > Cancelar </button>
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

</html>