<?php




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEMASTER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
</head>

<body>
    <header>
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand" id="brand-logo">
                        <div id="brand">
                            CINE<span id="brandMod">MASTER</span>
                        </div>
                        <img src="./Images/Logo.png" height="28" alt="CoolBrand">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">Contact</a>
                            <a href="#" class="nav-item nav-link">Gallerie</a>
                            <a href="#" class="nav-item nav-link" tabindex="-1">Blog</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="#" class="nav-item nav-link">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./Images/movies/red_notice.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>RED NOTICE</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore soluta ad quisquam doloremque voluptatem accusantium unde laudantium nulla dolorem. Ad totam, dicta aperiam odit amet provident officia repudiandae quaerat quod!</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Read More</button>
                        <button class="btn btn-2">Sign up</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/movies/star_wars.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>STAR WARS</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore soluta ad quisquam doloremque voluptatem accusantium unde laudantium nulla dolorem. Ad totam, dicta aperiam odit amet provident officia repudiandae quaerat quod!</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Read More</button>
                        <button class="btn btn-2">Sign up</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./Images/movies/moonlight.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>moonlight</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore soluta ad quisquam doloremque voluptatem accusantium unde laudantium nulla dolorem. Ad totam, dicta aperiam odit amet provident officia repudiandae quaerat quod!</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Read More</button>
                        <button class="btn btn-2">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html> 