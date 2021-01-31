<!DOCTYPE html>
<html lang="en" xmlns:background-color="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edgem chrome=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="../../assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="public/movie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/filmwar?page=top100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if(isset($_SESSION['id']))?>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/filmwar?page=top100">TOP 100 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/filmwar?page=country">COUNTRY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MOVIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/filmwar?page=settings">SETTINGS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">LOG OUT</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--CONTENT -->
<div class="page-wraper-container">
    <div class="flex site-bar">
        <div class="col-12 col-md-4 column-top100">
            <div class="name" id="A"><span>A</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=5">American History X</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="B"><span>B</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=6">Baltic Storm</a>
                    </li>
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=7">Batman</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="C"><span>C</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="D"><span>D</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="E"><span>E</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="F"><span>F</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="G"><span>G</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=3">Godfather</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="H"><span>H</span>
                <ul class="surnames">
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-4 column-laliga">
            <div class="name" id="I"><span>I</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="J"><span>J</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="K"><span>K</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="L"><span>L</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=2">Lord of the Rings</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="M"><span>M</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="N"><span>N</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="O"><span>O</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="P"><span>P</span>
                <ul class="surnames">
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-4 column-premier">
            <div class="name" id="R"><span>R</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="S"><span>S</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=1">Star Wars</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="T"><span>T</span>
                <ul class="surnames">
                    <li class="s">
                        <a class="name-link" href="http://localhost/filmwar?page=ratingMovies&id_movie=4">The Shawshank Redemption</a>
                    </li>
                </ul>
            </div>
            <div class="name" id="Q"><span>Q</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="W"><span>W</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="X"><span>X</span>
                <ul class="surnames">
                </ul>
            </div>
            <div class="name" id="Y"><span>Y</span>
                <ul class="surnames">
                    
                </ul>
            </div>
            <div class="name" id="Z"><span>Z</span>
                <ul class="surnames">
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>