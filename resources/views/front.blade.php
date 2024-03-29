<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           .logo_color {
               color: #fff;
               margin-left: 10%;
           }
           #logo {
               text-decoration: none;
               font-size: 30px;
               margin-left: 20%;
               color: #fff;
           }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-dark">
            <div class="row py-2">
                <div class="col-md-9">
                        <a id="logo" href="home">WELCOME TO MY BLOG</a>
                </div>
                <div class="col-md-3">
                        <a class="btn btn-success px-4"href="login">Login</a>
                        <a class="btn btn-primary px-3"href="register">Register</a>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row my-3">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Blog 1</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae dolorem rem? Non perferendis minus rem dolores odit impedit ad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Blog 2</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae dolorem rem? Non perferendis minus rem dolores odit impedit ad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Blog 3</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae dolorem rem? Non perferendis minus rem dolores odit impedit ad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Blog 4</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae dolorem rem? Non perferendis minus rem dolores odit impedit ad.</p>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
