<!DOCTYPE html>
<html lang="en" xmlns:background-color="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edgem chrome=1" />
    <title>FBALL</title>
    <meta name="descripiton" content="Football application for rating footballers"/>
    <meta name="keywords" content="Football, Star, App, Classification"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="../../assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->
<nav class="navbar sticky-top navbar-light">
    <a class="navbar-brand"></a>
    <div class="formularz">
        <form action="?page=login" method="POST">
            <div class="messages">
            <?php
                error_reporting(0);
                if (isset($messages)) {
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <div class="form-group">
                <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="johndoe@mail.com">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="●●●●●●●">
            </div>
            <button type="submit" class="btn btn-primary"><img src="assets/arrow-right-solid.svg" alt="arrow"></button>
        </form>
    </div>
</nav>
<div class="top-bar-container">
    <div class="flex top-bar">
        <div class="col-sm-12 sign-in">
            <button onclick="myFunction()" type="button" id="ok" class="btn ">Log In</button>
        </div>
    </div>
</div>
<!-- CONTENT -->
<div class="page-wraper-container">
    <div class="flex site-bar">
        <div class="col-12 col-md-6 logo"></div>
        <div class="col-12 col-md-6 register">
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <?php

                            ?>
                            <form action="?page=register" method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Your Name" value="<?php if(isset($_POST['name']) && !preg_match('/[^A-Za-z]/', $_POST['name'])) echo $_POST['name'] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label for="surname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="surname" id="name" placeholder="Your surname" value="<?php if(isset($_POST['surname']) && !preg_match('/[^A-Za-z]/', $_POST['surname'])) echo $_POST['surname'] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" value="<?php if(isset($_POST['email']) && preg_match('/[^@]+@[^\.]+\..+/', $_POST['email'])) echo $_POST['email'] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="re_password" id="re_pass" placeholder="Repeat your password">
                                </div>
                                <div class="form-group form-button">
                                    <button type="submit" name="signup" id="signup" class="form-submit">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="social-buttons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                        </div>
                    </div>
                </div>
            </section>
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