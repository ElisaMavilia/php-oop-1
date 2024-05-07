<?php

class Product {
    public string $title;
    public int $cover;
    public float $rating;

    public function __construct($title, $cover, $rating)
    {
        $this->title = $title;
        $this->image = $cover;
        $this->rating = $rating;
    }

    public function showMovies(){
       
    }
}