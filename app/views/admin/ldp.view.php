<?php  

    namespace App\Controllers;
    
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
    <link rel="stylesheet" href="/public/css/ldp.css">
</head>

<body>
    <div class="filtro" id="filtro" ></div>
    <div class="page" id="page">
    <div class="container">
        <div class="cardtitle">
            <b class="p">Lista de posts</b>
            <button type="button" class="btn btn-outline-warning btnd" id="openCreatPost"><b id="alsocreat" onclick="openmodal('modal')">Criar Post</b></button>
            <button type="button" class="btn btn-outline-warning btnr" id="openCreatPostM" onclick="openmodal('modal')"><b>+</b></button>
        </div>

        <div class="tabela">
            <table class="tb">
                <thead>
                    <tr>
                        <th class="t1th">Id</th>
                        <th class="t2th">Post</th>
                        <th class="t3th">Ação</th>
                    </tr>
                </thead>
            </table>
            <table class="tbb">
                <tbody>
                    <?php foreach($post as $post): ?>
                    <tr>
                        <th class="t1th"><?php echo $post->id ?></th>
                        <td class="t2th"><?php echo $post->titulo ?></td>
                        <td class="t3th">
                            <button type="button" class="btn btn-outline-light btnd" id="openVerPost" onclick="openmodal('modal_ver<?=$post->id ?>')">Visualizar</button>
                            <button type="button" class="btn btn-outline-info btnd" id="openEditPost" onclick="openmodal('modal_edicao<?=$post->id ?>')">Editar</button>
                            <button type="button"class="btn btn-outline-danger btnd" id="openRmvPost" onclick="openmodal('modal_rmv<?=$post->id?>')">Excluir</button>
                            <button type="button" class="btn btn-outline-light btnr" id="openVerPostM" onclick="openmodal('modal_ver<?=$post->id ?>')">👁</button>
                            <button type="button" class="btn btn-outline-info btnr" id="openEditPostM" onclick="openmodal('modal_edicao<?=$post->id?>')">✎</button>
                            <button type="button"class="btn btn-outline-danger btnr" id="openRmvPostM" onclick="openmodal('modal_rmv<?=$post->id?>')"><ion-icon name="trash-outline"></ion-icon></button>
                        </td>
                    </tr>
                    
    <div class = "modal" id = "modal_edicao<?=$post->id ?>">

            <div class = "ModalHead">
                <h2 class = "Cadastro-Post" >Edição de Posts </h2>
            </div>
            
            <form action = "/admin/ldp/update" method = "post" enctype = "multipart/form-data">
            
                <div class = "form-group" >
                    <label for = "titulo" > Titulo:</label>
                    <input type = "text" class = "form-control" id = "titulo" name ="titulo" placeholder = "Digite o titulo" value="<?php echo $post->titulo ; ?>" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "autor" > Autor:</label>
                    <input type = "text" class = "form-control" id = "autor" name = "autor" placeholder = "Digite o autor" value="<?php echo $post->autor ; ?>" required>
                </div>
    
                <div class = "form-group" >
                    <label for = "data"> Data de Criação:</label>
                    <input type = "date" class = "form-control" id = "data" name = "data" placeholder = "Digite a data" value="<?php echo $post->data ; ?>" required style="width: 70%;">
                </div>
    
                <div class = "form-group">
                    <label for = "conteudo" id = "label-centered" > Conteudo:</label>
                    <textarea class = "form-control" id = "conteudo" name = "conteudo" placeholder = "Digite o post" required style = "height: 70%; width: 70%;"><?php echo $post->conteudo ; ?></textarea>
                </div>
    
                <div class = "form-group" id = "Imagem" >
                    <label for = "imagem" id = "label-centered" > Imagem:</label>
                    <input type = "file" class = "form-control-file" id = "imagem" name = "imagem" accept = "image/*" placeholder = "Escolha a Imagem" required>
                </div>
                
                <div class = "botoes" >
                    <input hidden name="id" value="<?= $post->id ?>" >
                    <button type = "Salvar" class = "btn btn-primary" id = "Salvar" > Salvar </button>
                    <button type = "button" class = "btn btn-primary closeEdit Cancelar" onclick="closemodal('modal_edicao<?=$post->id ?>')" > Cancelar </button>
                </div>
    
            </form>
        
        
    </div>
    
    <div class = "modal" id = "modal_rmv<?=$post->id ?>">
                    
        <div class = "ModalHead">
            <h2 class = "Cadastro-Post excluir_post" > Excluir post </h2>
        </div>
        
            <div class = "warning" >
                <h3>Atenção, uma vez que essa ação for concluida, não é possivel desfazê-la! <p>Tem certeza que deseja excluir esse post?</p></h3>
            </div>
            <div class = "botoes" >
                <button class = "btn btn-primary" type="submit" id = "excluir" onclick="excluir()" > Excluir </button>
                <button type = "button" class = "btn btn-primary closeRmv Cancelar" onclick="closemodal('modal_rmv<?=$post->id ?>')" > Cancelar </button>
                <form id="excluir_form<?= $post->id ?>" action = "/admin/ldp/delete" method = "post" enctype = "multipart/form-data">
                    <input hidden name="id" value="<?= $post->id ?>">
                </form>
            </div>

    </div>
    
    <div class = "modal modal_ver" id="modal_ver<?=$post->id ?>" >
        <div class = "ModalHead">
            <h2 class = "Cadastro-Post" > Visualizar Post </h2>
            
        </div>
            
            <div class = "form-group" >
                <p><?php echo $post->titulo; ?></p>
            </div>
    
            <div class = "form-group" >
                <p><?php echo $post->autor; ?></p>
            </div>
    
            <div class = "form-group" >
                <p><?php echo $post->data; ?></p>
            </div>
    
            <div class = "form-group">
                <p><?php echo $post->conteudo; ?></p>
            </div>
    
        
            
            <div class = "botoes" >
                <button type="button" class = "btn btn-primary closever Cancelar" onclick="closemodal('modal_ver<?=$post->id ?>')" > Fechar </button>
            </div>
    </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    

    <div class = "modal" id="modal">
                    
                    <div class = "ModalHead">
                        <h2 class = "Cadastro-Post" > Criação de Posts </h2>
                        
                    </div>
                    
                    <form action = "/admin/ldp/create" method = "post" enctype = "multipart/form-data">
                    
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
            
                        <div class = "form-group" id = "Imagem" >
                            <label for = "imagem" id = "label-centered" > Imagem:</label>
                            <input type = "file" class = "form-control-file" id = "imagem" name = "imagem" accept = "image/*" placeholder = "Escolha a Imagem" required>
                        </div>
                        
                        <div class = "botoes" >
                            <button class = "btn btn-primary" id = "Salvar" > Salvar </button>
                            <button type = "button" class = "btn btn-primary close Cancelar" onclick="closemodal('modal')" > Cancelar </button>
                        </div>
            
                    </form>
                
                </div>

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <script src="/public/js/modal.js"></script>
                <script>
                    function excluir(){
                        document.getElementById('excluir_form<?= $post->id ?>').submit();
                    }
                </script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>