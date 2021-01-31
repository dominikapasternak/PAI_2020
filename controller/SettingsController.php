<?php
require_once 'AppController.php';
require_once 'SecurityController.php';
require_once __DIR__.'/../model/Rating.php';
require_once __DIR__.'/../model/RatingMapper.php';
require_once __DIR__.'/../model/Movie.php';
require_once __DIR__.'/../model/MovieMapper.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/UserMapper.php';

class SettingsController extends AppController{
   
    public function __construct()
    {
        parent::__construct();
    }

    public function settings()
    {
        $user = new UserMapper();
        $countrates = new RatingMapper();
        session_start();
        $id = $_SESSION['id'];
        $user->getDetails((int)$id);
        $max = $countrates->getBestMovie((int)$id);
        $min = $countrates->getWorstMovie((int)$id);
        $this->render('settings', ['user' => $user->getDetails((int)$id), 'countrates' => $countrates->getAllUserRatings((int)$id), 'max' => $max, 'min' => $min]);
    }

    public function httpResponse(int $response, int $code): void
    {
        http_response_code($code);
        print_r($response);
    }

    public function users(): void
    {
        $user = new UserMapper();
        header('Content-type: application/json');
        http_response_code(200);
        echo $user->getUsers() ? json_encode($user->getUsers()) : '';
    }

    public function userDelete(): void
    {
        if(!isset($_POST['id'])){
            http_response_code(404);
            return;
        }
        $user = new UserMapper();
        $user->delete((int)$_POST['id']);

        http_response_code(200);
    }
}