
<?php  
    
 ?>

<?php foreach($posts as $post) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexta Marcha - <?= $post->titulo ?></title>
    <link rel="stylesheet" href="/public/css/pvu.css">
    <link rel="shortcut icon" href="/public/assets/logo_sem_bordas_w1i_icon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <main>
    <?php require('navbar.html'); ?>

        <div class="cardtitle">
            <div class="square1">
                <h1><b><?= $post->titulo ?></b></h1>
            </div>
        </div>
        
        <div class="postimage">
            <img src="/<?=$post->imagem?>">
        </div> 

        <div class="cardposit">
            <div class="cardpost">
                <div class="linhavermelha">
                    <div class="linhacinza">
                        <div class="post">
                            <p>
                                <?= $post->conteudo ?>
                            </p>
                            <div class="opinfo">
                                <?php foreach($users as $user) : ?>
                                    <?php if($post->autor == $user->id): ?>
                                <p>
    
                                    <?= $user->nome ?>    
                                </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <p>
                                    <?= $post->data ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </main>
    <?php require('footer.html'); ?>
</body>
</html>