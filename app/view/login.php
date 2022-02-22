<?php
    require_once '../controller/user.controller.php';


    if (isset($_POST['submit'])){
        $login = new UserController();
        $login->auth();
    }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEMASTER</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/style/main.css">
</head>

<body>
    <header>
        <div class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand" id="brand-logo">
                        <div id="brand">
                            CINE<span id="brandMod">MASTER</span>
                        </div>
                        <img src="../../public/Images/movies/Logo.png" height="28" alt="CoolBrand">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="home.php" class="nav-item nav-link active">Home</a>
                            <a href="home.php#contact" class="nav-item nav-link">Contact</a>
                            <a href="home.php#gallerie" class="nav-item nav-link">Gallerie</a>
                            <a href="#" class="nav-item nav-link" tabindex="-1">Blog</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="./login.php" class="nav-item nav-link">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div id="login-container" class="d-flex justify-content-center">
        <div id="login-container1">
            <img id="login-image" src="../../public/Images/movies/popcornMovie.png" alt="">
            <div>
                <p class="text-center">Join our community for the best reviews on movies, and get full acces to our blog to view posts about the latest movies</p>
            </div>
            <div class="d-flex justify-content-center">
                <a href="./creatAccount.php" class="link-danger">
                    <button class="btn btn-danger">
                        Create account
                    </button>
                </a>
            </div>
        </div>
        <div id="login-container2">
            <h3 class="carousel-title">Login</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="text" class="form-label">Email</label>
                    <input type="text" autocomplete="on" name="email" class="form-control" id="user-input" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Password</label>
                    <input type="password"  name="passwrd" class="form-control" id="full-name-input" placeholder="password">
                </div>
                <div class="d-flex justify-content-between">
                    <input type="submit" class="btn btn-danger" id="submit-btn" value="login">
                    <a href="" class="link-light fs-6 text-decoration-none">forgot password?</a>
                </div>



            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>