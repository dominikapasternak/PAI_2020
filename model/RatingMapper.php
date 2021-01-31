<?php
require_once 'Rating.php';
require_once __DIR__.'/../Database.php';

class RatingMapper{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function addRating(int $id_movie, int $id, int $rating){
        try{
            $stmt = $this->database->connect()->prepare('INSERT INTO Rating (id_movie, id, rating) VALUES (:id_movie, :id, :rating);');
            $stmt->bindParam(':id_movie', $id_movie, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $res = $stmt->execute();
            // $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res;
        } catch (PDOException $e){
            return 'Error: ' .$e->getMessage();
        }
    }
    public function getRating(int $id_movie, int $id) {
        try{
            $stmt = $this->database->connect()->prepare('SELECT id_star, rating FROM Rating INNER JOIN Users ON Users.id = Rating.id INNER JOIN Movie ON Movie.id_movie = Rating.id_movie WHERE Movie.id_movie = :id_movie AND Rating.id = :id');
            $stmt->bindParam(':id_movie', $id_movie, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            // return $Rating;
            if(isset($Rating['id_star']))
                return new Rating($Rating['id_star'], $id_movie, $id, $Rating['rating']);
            else
                return null;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getAllUserRatings(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT COUNT(id_star) FROM Rating INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getBestMovie(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT MAX(Rating.rating), Rating.id_star, Movie.name FROM Rating INNER JOIN Movie ON Movie.id_movie = Rating.id_movie INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id GROUP BY Rating.id_star ORDER BY MAX(Rating.rating) DESC LIMIT 1');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getWorstMovie(int $id){
        try{
            $stmt = $this->database->connect()->prepare('SELECT MIN(Rating.rating), Rating.id_star, Movie.name FROM Rating INNER JOIN Movie ON Movie.id_movie = Rating.id_movie INNER JOIN Users ON Rating.id = Users.id WHERE Rating.id = :id GROUP BY Rating.id_star ORDER BY MIN(Rating.rating) LIMIT 1');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            // $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->execute();

            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);
            return $Rating;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getAvgCountry(int $id_country){
        try{
            $stmt = $this->database->connect()->prepare('SELECT AVG(Rating.rating),Country.id_country, Country.name FROM Rating INNER JOIN Movie ON Rating.id_movie = Movie.id_movie INNER JOIN Country ON Country.id_country = Movie.id_country WHERE Country.id_country = :id_country GROUP BY Country.id_country, Country.name');
            $stmt->bindParam(':id_country', $id_country, PDO::PARAM_STR);
            $stmt->execute();
            $Rating = $stmt->fetch(PDO::FETCH_ASSOC);

            return $Rating;
        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
}
