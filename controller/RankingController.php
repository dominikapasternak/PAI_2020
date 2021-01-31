<?php
require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Movie.php';
require_once __DIR__.'/../model/MovieMapper.php';


class RankingController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function top100(){
        $movie = new MovieMapper();
        $movie->getRankingMovies();
        //echo $movie->getRankingmovies() ? json_encode($movie->getRankingmovies()) : '';
        $this->render('top100', ['movie' => $movie->getRankingMovies(), 'horrorMovie' => $movie->getHorrorMovies(), 'thrillerMovie' => $movie->getThrillerMovies()]);
        return;
    }
}
