<?php




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
    <link rel="stylesheet" href="public/style/main.css">
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
                        <img src="public/Images/movies/Logo.png" height="28" alt="CoolBrand">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="./" class="nav-item nav-link active">Home</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                            <a href="#gallerie" class="nav-item nav-link">Gallerie</a>
                            <a href="#" class="nav-item nav-link" tabindex="-1">Blog</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="./login" class="nav-item nav-link">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <h1 class="display-1 carousel-title mt-5">TOP 3 MOVIES THIS WEEK</h1>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/Images/movies/moonlight.jpg" class="d-block w-100" alt="slide carousel image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="h4">Moonlight</h4>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro nostrum perspiciatis et similique saepe cum dignissimos omnis, reprehenderit, sunt recusandae culpa temporibus vel quae est exercitationem numquam molestiae, ullam labore.</p>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-danger">View more</button>
                        <button type="button" class="btn btn-danger">login</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/Images/movies/red_notice.jpg" class="d-block w-100" alt="slide carousel image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="h4">Red notice</h4>
                    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum reiciendis expedita voluptate debitis consequuntur sed commodi dolorem minus, deserunt architecto praesentium nostrum earum ex a totam, nam culpa? Aperiam, doloremque.</p>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-danger">View more</button>
                        <button type="button" class="btn btn-danger">login</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/Images/movies/avengers.jpg" class="d-block w-100" alt="slide carousel image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="h4">Avenger : End game</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore ex dolore eaque illum, id architecto quisquam rem temporibus, dolor delectus inventore enim quas expedita tempore accusamus quae omnis et!</p>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-danger">View more</button>
                        <button type="button" class="btn btn-danger">login</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <hr>
    </div>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="card w-40">
            <h5 class="card-header bg-black">Our website</h5>
            <div class="card-body">
                <h5 class="card-title">CINEMASTER</h5>
                <p class="card-text">Welcome to the largest blog for movies database on the Internet. <br>Sign up for more utilities and join our blog for posts about movies <br> you can share it with us your self. </p>
                <a href="#" class="btn btn-danger">Sign up</a>
            </div>
        </div>
        <div>
            <img src="public/Images/movies/popcornMovie.png" style="width: 60%; border-radius:1rem; height:100%;" class="rounded mx-auto d-block" alt="popcorn movie image">
        </div>
    </div>
    <section class="head-line">
        <hr>
        <h2 class="display-3 d-flex justify-content-center" id="gallerie">Movie Collection</h2>
        <!--  collection 1 -->
        <h4 class="dispay-4">Action</h4>
        <div class="card-container d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/inception_49e5_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/interstellar_9d91_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/the-dark-knight_0042_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/the-hobbit-the-battle-of-the-five-armies_ea76_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <!--  collection 2 -->
        <h4 class="dispay-4">Comedy</h4>
        <div class="card-container d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/the-hangover-part-iii_12d5_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/neighbors_1794_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/were-the-millers_e213_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/due-date_c571_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <!-- collection 3 -->
        <h4 class="dispay-4">Animation</h4>
        <div class="card-container d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/big-hero-6_4acd_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/hotel-transylvania_69e9_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/despicable-me-3_3d0e_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="public/Images/movies/the-angry-birds-movie_3513_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </section>
    <h2 class="display-3 d-flex justify-content-center" id="contact">Contact Us</h2>
    <div class="">
        <form action="home.php" method="post" class="contact-container">
            <div class="mb-3">
                <label for="text" class="form-label">Full name</label>
                <input type="text" class="form-control" id="full-name-input" placeholder="full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email-input" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message-input" rows="3" placeholder="message"></textarea>
            </div>
            <div class="d-flex w-30 justify-content-center">
                <input type="button" class="btn btn-danger mx-auto" id="submit-btn" value="Submit">
            </div>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>