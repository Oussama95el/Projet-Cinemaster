<?php

class PostController{

    public function create(){
        if (isset($_POST['submit'])){

            $data = array(
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'picture' => $_POST['picture'],
                'categorie' => $_POST['categorie'],
                'user' => $_SESSION['user_id']
            );
            $result = PostModel::newPost($data);

            if($result !== 'ok'){
                echo $result;
            } else{
                header('location: ../profile');
            }
        }
    }

    public function userPosts()
    {
        return PostModel::getUserPosts() ?? [];
    }
    public function update(){

        if(isset($_POST['submit']))
        {
            $data =array(
                'post_id'=>$_POST['post_id'],
                'title' => $_POST['title'],
                'categorie' => $_POST['categorie'],
                'description' => $_POST['description'],
                "picture" => $_POST["picture"] === "" ? $_POST["currentPicture"] : $_POST["picture"]
            );
            $result = PostModel::updateUserPost($data);
            if($result){
                header('location: ../profile');
            }
        }
    }

    public function delete()
    {
        if (isset($_POST['delete'])) {
            $data = array(
                'post_id' => $_POST['post_id']
            );

            $result = PostModel::deletePost($data);
            if ($result !== 'ok') {
                echo $result;
            } else {
                header('location: ./profile');
            }
        }
    }
}