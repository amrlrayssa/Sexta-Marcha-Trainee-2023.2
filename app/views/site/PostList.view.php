
<?php  
    session_start();
    if($_SESSION['logado']){
  }
else{
  return redirect('login');
  }
 ?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
    <link rel = "preconnect" href="https://fonts.googleapis.com">
    <link rel = "preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel = "stylesheet">
    <link rel = "stylesheet" href = "/public/css/PostList.css">
    <title> Sexta Marcha </title>
</head>
<body>
    <?php require('navbar.html'); ?>
    <div class = "left-side">

        <div class = "header">
        <div class = "header_plus">
            <h1>POSTS MAIS RELEVANTES</h1>
        </div>    
        <div class="Searchbar">
            <div class="icons">
                <i class = "fa-solid fa-magnifying-glass" id = "search-icon"></i>
                <form id = "search-form" action = "search" method = "GET">
                    <input type = "text" name = "search" id = "search-input" placeholder = "Search...">
                    <button type = "submit" style = "display: none;" ></button>
                </form>
            </div>
        </div>
        
        <div class = "conteinerf">
            
            <div class = "Post Post1" >
                <?php foreach($posts as $post): ?>
                    <img class = "imagem" src = "/public/assets/Ayrton-Pensativo.png" />
                    
                    <div class = "text-content">
                        <h2> <?php echo $post->titulo?> </h2>
                        <p> <?php echo substr($post->conteudo, 0, 100) . "...";?> </p>
                        <div class = "button-conteinerf">
                            <button class = "LeiaMais" >LER MAIS ></button>
                        </div>
                        
                    </div>
                    <?php endforeach; ?>    
                </div>
          
          <div class = "conteinerf">
    
              <div class = "Post Post2" >
                  <img class = "imagem" src = "/public/assets/LeClerc-Ferrari.png" id="efeito-imagem"/>
                  
                  <div class = "text-content">
                      <h2> Ferrari esperançosa após Pole Position </h2>
                      <p> Charles Leclerc leva a melhor durante treino classificatório para a corrida do Bahrein ao melhorar seu tempo... </p>
                      <div class = "button-conteinerf">
                          <button class = "LeiaMais" >LER MAIS ></button>
                      </div>
                      
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class = "right-side" >
        
        <div class = "PostFixed" id="efeito-imagem">
            <div class = "BGRedFixed" >
                <div class = "LinhaCinza" >
                    <div class = "BGWhite" >
          
                    <img class = "AyrtonPodium" src = "/public/assets/ayrton-Podium.png" />
                    
                    <div class = "text-fixed">
                        <p>Senna comemorando ao vencer heroicamente com a Sexta Marcha</p>
                        <h2> Interlagos, 24/03/1991 </h2>  
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
</div> 

<!-- Fazendo o Icone de Botão de Pesquisa -->
<script>
    document.getElementById('search-icon').addEventListener('click', function() {
        document.getElementById('search-form').submit();
    });
    </script>

<script src = "https://kit.fontawesome.com/46c6a48072.js" crossorigin = "anonymous"></script>
<?php require('footer.html'); ?>    
</body>

</html>

