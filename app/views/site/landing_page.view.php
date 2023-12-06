<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../../public/css/landing_page_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <title>Sexta Marcha</title>
</head>

<body>
  <?php require('navbar.html'); ?>
  <header><img id="logo" src="../../../public/assets/sexta_marcha_logo_so_que_bom.png"
      alt="imagem do logo do sexta marcha">
    <img id="mini-logo" src="../../../public/assets/logo_sem_bordas.png" alt="logo sem bordas do sexta marcha">
  </header>
  <div class="container">
    <aside></aside>
    <section>
      <div class="cardposit">
        <div class="cardpost">
          <div class="linhavermelha">
            <div class="linhacinza">
              <div class="post">
                <div class="sobre">
                  <ul>
                    <li class="sobre">
                      <div class="container-sobre">
                        <div class="text">SOBRE</div>
                      </div>
                      <div class="container-sobre">
                        <div class="text" style="color: #C60000;">NÓS</div>
                      </div>
                      <p>O site tem como foco principal o automobilismo, mas sua aparência presta homenagem a Ayrton
                        Senna,
                        o piloto brasileiro icônico, e inclui referências a outras equipes e eventos do esporte.</p>
                      <div class="retangulo-vertical"></div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="noticias">
        <?php foreach ($posts as $post): ?>
          <div class="quadrado">
            <div class="imagem"><a href='pvu?id=<?= $post->id ?>'><img src=<?php echo $post->imagem; ?>
                  class="efeito-imagem"></a>
            </div>
            <div class="titulo">
              <h1>
                <?php echo $post->titulo ?>
              </h1>
            </div>
            <div class="conteudo">
              <p>
                <?php echo substr($post->conteudo, 0, 100) . "..."; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="mais-noticias">
          <form action="/postlist" method="GET">
            <button type="submit" class="botao-noticias">MAIS NOTICIAS ></button>
          </form>
        </div>
      </div>
    </section>
  </div>
  <?php require('footer.html'); ?>
</body>

</html>