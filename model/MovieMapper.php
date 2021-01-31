<?php
require_once 'Movie.php';
require_once __DIR__.'/../Database.php';

class MovieMapper{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }

    public function getMovie(int $id_country){
        try{
            $stmt = $this->database->connect()->prepare('SELECT Movie.id_movie, Movie.name FROM Movie INNER JOIN Country ON Movie.id_country = Country.id_country WHERE Country.id_country = :id_country;');
            $stmt->bindParam(':id_country', $id_country, PDO::PARAM_STR);
            $stmt->execute();

            $movie = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $movie;
        }catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }

    public function getRankingMovies(){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating), Movie.id_movie, Movie.name FROM Movie INNER JOIN Rating ON Movie.id_movie = Rating.id_movie GROUP BY Movie.id_movie ORDER BY AVG(Rating.rating) DESC LIMIT 100;');
            $stmt->bindParam(':id_Movie', $id_Movie, PDO::PARAM_STR);
            $stmt->execute();

            $movie = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $movie;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    
    public function fetchAllParams($genreId)
    {
        try{
            $stmt = $this->database->connect()->prepare("SELECT AVG(Rating.rating), Movie.id_movie, Movie.name FROM Movie INNER JOIN Rating ON Movie.id_movie = Rating.id_movie INNER JOIN Country ON Movie.id_country = Country.id_country INNER JOIN Genre ON Country.id_genre = Genre.id_genre WHERE Genre.id_genre = '$genreId' GROUP BY Movie.id_movie, Movie.name ORDER BY AVG(Rating.rating) DESC LIMIT 100;");
            $stmt->bindParam(':id_Movie', $id_Movie, PDO::PARAM_STR);
            $stmt->execute();

            $Movie = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Movie;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }

    public function getHorrorMovies()
    {
        return $this->fetchAllParams(1);
    }
    
    public function getThrillerMovies()
    {
        return $this->fetchAllParams(2);
    }

    public function getComedyMovies()
    {
        return $this->fetchAllParams(3);
    }

    public function getAdventureMovies()
    {
        return $this->fetchAllParams(4);
    }

    public function getActionMovies()
    {
        return $this->fetchAllParams(5);
    }

    public function getAnimatedMovies()
    {
        return $this->fetchAllParams(6);
    }

    public function getRomanceMovies()
    {
        return $this->fetchAllParams(7);
    }

    public function getScienceFictionMovies()
    {
        return $this->fetchAllParams(8);
    }

    public function getDramaMovies()
    {
        return $this->fetchAllParams(9);
    }
}
