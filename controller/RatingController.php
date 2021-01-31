<?php

require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Movie.php';
require_once __DIR__.'/../model/MovieMapper.php';

class RatingController extends AppController{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function countriesMovies()
    {
        if(isset($_GET['id_country'])){
            $movie = new MovieMapper();
            $movie->getMovie($_GET['id_country']);

            $this->render('countriesMovies', ['movie' => $movie->getMovie($_GET['id_country'])]);
            return;
        }
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}/filmwar?page=country");
        exit();
    }
    public function ratingMovies()
    {
        if(isset($_GET['id_movie'])) {

            $movie = array("id_movie"=>$_GET['id_movie']);
            $this->render('ratingMovies', ['movie' => $movie]);
            return;
        }
        // $this->render('login');
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=movie");
        exit();
    }

    //ODDAWANIE GŁOSU
    public function ratingMovie() 
    {
        $mapper = new RatingMapper();
        $Rating = null;
        if(isset($_GET['id_movie'])) {
            if($this->isPost()){
                if(isset($_POST['rate'])) {
                    $id = $_POST['uID'];
                    $rating = $_POST['ratedIndex'];
                    $rating++;
                    $id_movie = $_GET['id_movie'];
                    $Rating = $mapper->getRating($id_movie, $id);
                    if($Rating === null) {
                        //jeżeli null to dodajemy głos
                        $r = $mapper->addRating($id_movie, $id, $rating);
                        // return $this->render('ratingplayers', ['messages' => ['Done']]);
                        $response = array('success'=>1, ['messages' => ['Done']]);
                        http_response_code(200);
                        print_r($response);
                        return;
                    } else {
                        //jeżeli nie to zwracamy kod 201
                        http_response_code(201);
                        print_r($Rating->getRating());
                        return;
                    }

                    http_response_code(200);
                    print_r($Rating->getRating());
                    return;
                }
            }
        }
        http_response_code(400);
        print_r('Wystapil blad');
        return;
    }
}