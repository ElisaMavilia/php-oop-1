<?php
include __DIR__ . "/Product.php";

class Movie extends Product
{
     public $language;
   
   public function __construct($title, $cover, $language, $rating)
   {
       $this->language = $language;
      parent::__construct($title, $cover, $rating);
   }

   public function showMovies(){
    echo $this->language;
    }
}