<?php

include __DIR__ . '/Views/header.php';
include __DIR__ .'/Models/Product.php';
$movies = [
    new Movie('Babylon A.D.', 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg', 'en'),
    new Movie('Miraculous World: Paris, Tales of Shadybug and Claw Noir', 'https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg', 'en')
];


?>
<main class="container">
   <section>
    <h2>Movies</h2>
   </section>
   <section>
    <h2>Books</h2>
   </section>
</main>
<?php include __DIR__ .'/Views/footer.php'; ?>