<?php

require_once('./autoload.php');
require_once('./app/controller/home.controller.php');

$home = new HomeController();
$pages = [
   'home',
    'login',
    'profile',
    'creatAccount',
    'addComment',
    'addPost'
];

if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)){
        $page = $_GET['page'];
        $home->index($_GET['page']);
    }else{
        include('./app/view/includes/404.php');
    }
}else
    $home->index('home');

