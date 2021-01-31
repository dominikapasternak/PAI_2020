<?php

class Rating{
    private $id_star;
    private $id_movie;
    private $id;
    private $rating;

    public function __construct($id_star, $id_movie, $id, $rating){
        $this->id_star = $id_star;
        $this->id_movie = $id_movie;
        $this->id = $id;
        $this->rating = $rating;
    }

    public function getIdStar(){
        return $this->id_star;
    }
    public function setIdMovie($id_movie): void{
        $this->id_movie = $id_movie;
    }
    public function getIdMovie(){
        return $this->id_movie;
    }
    public function setId($id): void{
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setRating($rating): void{
        $this->rating = $rating;
    }
    public function getRating(){
        return $this->rating;
    }
}
