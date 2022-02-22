<?php

require_once "autoload.php";

$params = explode("/", $_GET['page']);
// var_dump($params);

if(!empty($params[0])) {

    $route = $_GET["page"];
    $viewPath = "app/view/$route.php";

    $controller=ucfirst($params[0])."Controller";
    $controllerPath = "app/controller/$controller.php";
    if(file_exists($controllerPath)){
//        require_once $controllerPath;
        $obj = new $controller();
        if(!empty($params[1])) {
            $action =$params[1];
            if(method_exists($obj, $action)){
                if(!empty($params[2])){
                    $obj->$action($params);
                }else{
                    $obj->$action();
                }
            }
            else{
               include "app/view/includes/404.php";
            }
        }else{
            include "app/view/includes/404.php";
        }
    } else if (file_exists($viewPath)){
        include $viewPath;
    }else{
        include "app/view/includes/404.php";
    }
}
else{
    include "app/view/home.php";
}

