<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style_index.css">

    <title>Manda Trends</title>
</head>
<body>

    <div class="container">
        <div class="box-organize">
        <?php
            $json_file = 'assets/json/index.json';

            if (file_exists($json_file)) {
                $json_data = file_get_contents($json_file);
                $data = json_decode($json_data, true);

                echo '<div class="container">';
                
                // HEADER
                echo '<header class="header-banner">';
                echo '<img src="' . $data["header"]["banner"] . '" alt="" class="banner">';
                echo '</header>';
                
                // CAROUSEL
                echo '<div class="carousel-manda_trends rounded-9">';
                echo '<div id="carouselExampleFade" class="carousel slide carousel-fade rounded-9" data-bs-ride="carousel">';
                echo '<div class="carousel-inner">';
                
                foreach ($data["carousel"]["images"] as $index => $imageData) {
                    $active_class = ($index == 0) ? 'active' : '';
                    
                    echo '<div class="carousel-item rounded-9 ' . $active_class . '">';
                    echo '<a href="' . $imageData["link"] . '">';
                    echo '<img src="' . $imageData["url"] . '" class="d-block w-100 rounded-9" alt="...">';
                    echo '</a>';
                    echo '<div class="information-index">';
                    echo '<h1>' . $imageData["title"] . '</h1>';
                    echo '<p class="fs-5">' . $imageData["description"] . '</p>';
                    echo '<p><footer class="blockquote-footer">Fonte: <cite title="Source Title">' . $imageData["source"] . '</cite></footer></p>';
                    echo '</div>';
                    echo '</div>';
                }
                
                echo '</div>';
                echo '<button class="carousel-control-prev carousel_button" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">' . $data["carousel"]["carousel_controls"]["prev_text"] . '</span>';
                echo '</button>';
                echo '<button class="carousel-control-next carousel_button" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">' . $data["carousel"]["carousel_controls"]["next_text"] . '</span>';
                echo '</button>';
                echo '</div>';
                
                echo '<div class="line_carousel mb-5"></div>';
                echo '</div>';

                
                // CARDS
                echo '<div class="card-space mb-5">';
                
               foreach ($data["cards"] as $card) {
                    echo '<div class="card col-md-4" style="width: 27rem;">';
                    echo '<a href="' . $card["url"] . '">';
                    echo '<img src="' . $card["image"] . '" class="card-img-top" alt="...">';
                    echo '</a>';
                    echo '<div class="card-body" style="background: transparent;">';
                    echo '<p class="card-text h2">' . $card["title"] . '</p> <br>';
                    echo '<footer class="blockquote-footer">Fonte: <cite title="Source Title">' . $card["source"] . '</cite></footer>';
                    echo '</div>';
                    echo '</div>';
                }
                
                echo '</div>';
                
                // FOOTER
                echo '<footer class="footer-img mb-3">';
                echo '<img src="' . $data["footer"]["image"] . '" alt="" class="criadora">';
                echo '</footer>';
                
                echo '<p class="footer-copyright mb-3">';
                echo $data["footer"]["copyright"] . '<br>';
                echo '<a href="' . $data["footer"]["unsubscribe_link"] . '">' . $data["footer"]["unsubscribe_link"] . '</a>';
                echo '</p>';
                
                echo '</div>'; // Fechando a div do container
                
            } else {
                echo "O arquivo JSON não foi encontrado.";
            }
        ?>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>