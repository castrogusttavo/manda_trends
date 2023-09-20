<?php
// Lê o conteúdo do arquivo JSON
$json_data = file_get_contents('assets/json/pages.json');

// Decodifica o JSON em um array associativo
$data = json_decode($json_data, true)[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style_post.css">
    <link rel="stylesheet" href="assets/css/style_index.css">
    
    <title>Manda Trends</title>
</head>
<body>

    <div class="container">
      <!-- HEADER -->
        <header class="header-banner mb-1">
          <img src="assets/img/banner_grande.png" alt="" class="banner">
        </header>

        <section class="new__post">

            <article class="card-post card-big">
              <header class="section__header section-header-link">
                <h2 class="title__header"><?php echo $data['title__header']; ?></h2>
                <a href="index.php" class="post__link">Voltar a tela inicial</a>
              </header>
          
              <div class="postagem">
                    <h3 class="subtitle__general"><?php echo $data['subtitle__general']; ?></h3>
                    <span class="subtitle"><?php echo $data['subtitle']; ?></span> <br>
          
                    <div class="information">
                      <span class="card__author-post author__post"><strong>Por</strong> <?php echo $data['author__post']; ?></span>
                      <span class="card__author-post date__post"><?php echo $data['date__post']; ?></span>
                    </div>
          
                      <p class="content_1"> 
                        <?php echo $data['content_1']; ?>
                      </p>

                      <p class="content_2">
                        <?php echo $data['content_2']; ?>
                      </p>

                      <p class="content_3">
                        <?php echo $data['content_3']; ?>
                      </p>
              </article>
            </section>

            <!-- FOOTER -->
            <footer class="footer-img mb-3">
                <img src="assets/img/footer.png" alt="" class="criadora">
            </footer>

            <p class="footer-copyright mb-3">
                Copyright ® Mandarin. Todos os direitos reservados. <br>
                Caso não deseje mais receber nossos e-mails, por favor clique aqui.
            </p>
        </div>
    </body>
</html>
