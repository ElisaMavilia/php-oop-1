<?php

include __DIR__ . '/Views/header.php';
include __DIR__ .'/Models/Product.php';



?>
<main class="container">
   <?php 
    $Babylon = new Product('Babylon A.D.', 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg', 'en');
    echo $Babylon->showMovies();
    ?>
</main>
<?php include __DIR__ .'/Views/footer.php'; ?>