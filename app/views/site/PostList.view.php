
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
    <link rel = "preconnect" href="https://fonts.googleapis.com">
    <link rel = "preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel = "stylesheet" href = "/public/css/PostList.css">
    <title> Sexta Marcha - Lista de Posts </title>
</head>
<body>
    <?php require('navbar.html'); ?>
    <div class = "left-side">

        <div class = "o_header">
            <div class = "o_header_plus">
                <h1>LISTA DE POSTS</h1>
            </div>    
            <div class="Searchbar">
                <div class="icons">
                    <i class = "fa-solid fa-magnifying-glass" id = "search-icon"></i>
                    <form id = "search-form" action = "buscapost" method = "GET">
                        <input type = "text" name = "search" id = "search-input" placeholder = "Search...">
                        <button type = "submit" style = "display: none;" ></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="noticias">
        <?php
        $posts = array_reverse($posts);
        foreach($posts as $post):
          ?>
          <div class="quadrado">
            <form action="/postlist/pvu" method="post">
              <div class="imagem">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <img src="<?= $post->imagem; ?>" class="efeito-imagem">
                <button type="submit" class="LeiaMais"></button>
              </div>
              <div class="titulo">
                <h1>
                  <?php echo $post->titulo ?>
                </h1>
              </div>
              <div class="conteudo">
                <p>
                  <?php echo substr($post->conteudo, 0, 100)."..."; ?>
                </p>
              </div>
            </form>
          </div>
          <?php
        endforeach; ?>
        </div>
     

    <div class="pagi">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" aria-label="<<">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
                    <li class="page-item">
                        <a class="page-link text-dark" href="?pagina=<?= $page_number ?>">
                            <?= $page_number ?>
                        </a>
                    </li>
                    <?php endfor; ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>" aria-label=">>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
        <?php require('footer.html'); ?>  
<!-- Fazendo o Icone de Botão de Pesquisa -->
<script>
    document.getElementById('search-icon').addEventListener('click', function() {
        document.getElementById('search-form').submit();
    });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src = "https://kit.fontawesome.com/46c6a48072.js" crossorigin = "anonymous"></script>
  
</body>

</html>