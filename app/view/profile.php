<?php

if (isset($_SESSION['user_id']) === false) {
    Redirect::to('login');
}
if (isset($_POST['submit'])) {
    $newPost = new PostController();
    $newPost->creat();
}

$user = new PostController();
$allPosts = $user->userPosts();

if (isset($_POST['delete'])) {
    $dropPost = new PostController();
    $delete=$dropPost->delete();
}
if (isset($_POST['submit'])){
    $newComment = new CommentController();
    $add = $newComment->creat();
}




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEMASTER</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                               id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="public/Images/movies/user.svg" alt="" width="35" height="35"
                                     class="rounded-circle me-2">
                                <strong><?php echo "" ?></strong>
                            </a>
                            <ul class="dropdown-menu text-small light" aria-labelledby="dropdownUser2">
                                <li><input type="submit" class="dropdown-item" name="submit" value="Log out"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<section class="d-flex justify-content-evenly p-2">
    <div class="container-category fixed card">
        <h3 class="text-center">Categories</h3>
        <div class="card-body">
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><a href="" class="link-dark">Action</a></li>
                <li class="list-group-item"><a href="" class="link-dark">Animation</a></li>
                <li class="list-group-item"><a href="" class="link-dark">Comedy</a></li>
                <li class="list-group-item"><a href="" class="link-dark">Horror</a></li>
                <li class="list-group-item"><a href="" class="link-dark">Drama</a></li>
            </ul>
        </div>
    </div>
    <!--    Display all user posts-->
    <div class="bg-gey justify-content-center align-items-center w-90" id="post-container">

        <div class="d-flex justify-content-between m-3">
            <h2 class="text-center">My Posts</h2>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add-post">
                Add Post
            </button>
        </div>

        <?php foreach ($allPosts as $post) : ?>
            <div class="card bg-gey p-4 border border-1 mt-3" style="width: 85%; margin:auto;">
                <div class="d-flex text-black justify-content-between align-items-center">
                    <div class="d-flex text-black align-items-center">
                        <img src="public/Images/movies/user.svg" alt="profile picture"
                             class="rounded-circle img-fluid me-2" width="55">
                        <h5 class="mx-2">oussama</h5>
                        <!--                -->
                        <h5>oussama</h5>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Edite
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <script type="application/json">
                                    <?= json_encode($post) ?>
                                </script>
                                <!--                                <form action="" method="post">-->
                                <button
                                        class="dropdown-item update-button-toggler" href="#" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                    Update
                                </button>
                                <!--                                </form>-->
                            </li>

                                <form action="./comment/creat" method="post">
                                    <input type="hidden" name="post_id" value="<?php echo $post['post_id']?>">
                                    <input type="submit" name="delete" value="Delete" class="dropdown-item">
                                </form>
                        </ul>
                    </div>
                </div>
                <div class="text-black m-3 active">
                    <h6> <?php echo $post['categorie'] ?></h6>
                </div>
                <div class="text-black">
                    <img class="img-fluid my-5" src="<?php echo IMG_PATH . $post['picture'] ?>" alt="Post picture">
                    <div class="text-black d-flex justify-content-center">
                        <h3 class="text-uppercase"> <?php echo $post['title'] ?></h3>
                    </div>
                    <p class="text-justify m-3"> <?php echo $post['description'] ?></p>
                </div>
                <div class="w-8 p-3 bg-light text-black">

                    <form action="./comment/creat" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="post" value="<?php echo $post['post_id']?>">
                            <label for="comment" class="form-label text-black">view comments</label>
                            <input type="text" name="content" class="form-control" id="comment" placeholder="Write Comment">
                            <div class="d-flex justify-content-end">
                                <input type="submit" class="btn btn-danger m-3 " name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>

    </div>
    <!--        User  Control panel-->
    <!--    <div class="bg-gey d-flex flex-column text-center align-items-center" id="panel-container">-->
    <!--        <h2 class="text-center">Control Panel</h2>-->
    <!--        -->
    <!--    </div>-->
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
                <form action="./post/create" method="post">
                    <input type="hidden" name="currentPicture">
                    <div class="mb-3">
                        <input class="form-control title form-control-sm" id="title" name="title" type="text"
                               placeholder="Title" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <input class="form-control description form-control-sm" id="description" name="description"
                               type="text" placeholder="Description" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <input class="form-control form-control-sm" name="picture" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                        <select name="categorie" class="form-select categorie text-black" id="categorie"
                                aria-label="Default select example">

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="public/javascript/main.js"></script>
</body>

</html>