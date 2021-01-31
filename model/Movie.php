<?php

class Movie{
    private $id_movie;
    private $name;
    private $id_country;

    public function __construct($id_movie, $name, $id_country){
        $this->id_movie = $id_movie;
        $this->name = $name;
        $this->id_country = $id_country;
    }
    public function setName($name): void{
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getIdMovie(){
        return $this->id_movie;
    }
    public function setIdCountry($id_country): void{
        $this->id_country = $id_country;
    }
    public function getIdCountry(){
        return $this->id_country;
    }
}
