<?php

if (isset($_POST['submit'])){
    $newPost = new PostController();
    $newPost->addPost();
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
    <div class="">
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
                    <div class="navbar-nav ms-auto align-center">
                        <div class="dropdown" id="profil-menu">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="public/Images/profile.jpg" alt="" width="35" height="35" class="rounded-circle me-2">
                                <strong>Mr sanders</strong>
                            </a>
                            <ul class="dropdown-menu text-small light" aria-labelledby="dropdownUser2">
                               <li><a href="#" class="dropdown-item">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<section class="d-flex justify-content-between p-4">
        <div class="container-category fixed card">
            <h3 class="text-center">Categories</h3>
            <div class="card-body">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><a href="" class="link-dark" >Action</a></li>
                    <li class="list-group-item"><a href="" class="link-dark">Animation</a></li>
                    <li class="list-group-item"><a href="" class="link-dark">Comedy</a></li>
                    <li class="list-group-item"><a href="" class="link-dark">Horror</a></li>
                    <li class="list-group-item"><a href="" class="link-dark">Drama</a></li>
                </ul>
            </div>
        </div>
    <div class="bg-gey justify-content-center align-items-center" id="post-container">
        <h2 class="text-center">My Posts</h2>
    </div>
    <div class="bg-gey d-flex flex-column text-center align-items-center" id="panel-container">
        <h2 class="text-center">Control Panel</h2>
        <div class="card justify-content-around w-50" >
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Post
            </button>
        </div>
    </div>
</section>

<!--Pop up form for post-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-gey">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./profile" method="post">
                    <div class="mb-3">
                        <input class="form-control form-control-sm" name="title" type="text" placeholder="Title" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <input class="form-control form-control-sm" name="description" type="text" placeholder="Description" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <input class="form-control form-control-sm" name="picture" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                    <select name="categorie" class="form-select text-black" aria-label="Default select example">

                        <option class="text-black disable" value="Action">Action</option>
                        <option class="text-black" value="Animation">Animation</option>
                        <option class="text-black" value="Comedy">Comedy</option>
                        <option class="text-black" value="Horror">Horror</option>
                        <option class="text-black" value="Drama">Drama</option>
                        <option class="text-black" value="Sci-fi">Sci-fi</option>
                    </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
