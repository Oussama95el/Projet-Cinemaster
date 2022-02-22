<?php

class PostController{

    public function addPost(){
        if (isset($_POST['submit'])){

            $data = array(

                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'picture' => $_POST['picture'],
                'categorie' => $_POST['categorie'],
                'user' => $_POST['user']
            );
            $result = PostModel::newPost($data);
            if($result !== 'ok'){
                echo $result;
            } else{
                header('./profile');
            }
        }
    }
}