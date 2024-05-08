<?php

include __DIR__ . '/Views/header.php';
include __DIR__ .'/Models/Movie.php';

$movies = [
    new Movie('Babylon A.D.', 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg', 'en', 5.6),
    new Movie('Miraculous World: Paris, Tales of Shadybug and Claw Noir', 'https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg', 'en', 6.9)
];


?>
<main class="container">
<section>
         <h2>Movies</h2>
        
        <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
                <img src="<?= $movie->cover ?>" class="card-img-top" alt="<?= $movie->title ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->title ?></h5>
                    <p class="card-text"><?= $movie->language ?></p>
                    <small><?= $movie->rating ?></small>
                </div>
            </div>
            </div>
            <?php } ?>
         </div>
   </section>
   
</main>
<?php include __DIR__ .'/Views/footer.php';?>