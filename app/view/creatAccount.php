<?php
if (isset($_POST['submit'])){
    $user = new UserController();
    $user->register();
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
                            <a href="home.php" class="nav-item nav-link active">Home</a>
                            <a href="home.php#contact" class="nav-item nav-link">Contact</a>
                            <a href="home.php#gallerie" class="nav-item nav-link">Gallerie</a>
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

    <div class="d-flex justify-content-center">
        <div id="register-container">
            <h3 class="carousel-title mt-5">Creat your account</h3>
            <form action="" method="post" class="mt-5" id="register-form">
                <div class="row">
                    <div class="col mb-3">
                        <label for="First name" class="col-form-label">First name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col mb-3">
                        <label for="Last name" class="col-form-label">Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="date" class="col-form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control">
                </div>
                <div class="col mb-3">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="@" aria-label="email">
                </div>
                <div class="col mb-3">
                    <label for="inputPassword" class="col-form-label">Password</label>
                    <input type="password" name="passwrd" class="form-control" id="inputPassword">
                </div>
                <div class="d-flex w-30 justify-content-center">
                    <input type="submit" name="submit" class="btn btn-danger mx-auto" id="submit-btn" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>