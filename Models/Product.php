<?php

class Product {
    public string $title;
    public string $cover;
    public float $rating;

    public function __construct($title, $cover, $rating)
    {
        $this->title = $title;
        $this->cover = $cover;
        $this->rating = $rating;
    }

    public function showMovies(){
       
    }
}