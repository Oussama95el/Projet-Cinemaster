<?php
    class HomeController{
    public function index($page){
        include('app/view/'. $page .'.php');
    }
}