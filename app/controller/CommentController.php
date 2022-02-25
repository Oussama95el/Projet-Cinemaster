<?php

class CommentController
{
    public function creat(){

        if (isset($_POST['submit'])){

            $data = array(
                'content'=> $_POST['content'],
                'user' => $_SESSION['user_id'],
                'post' => $_POST['post']
            );

        $result = CommentModel::addComment($data);
        if ($result !== 'ok'){
            echo "$result";
        }else{
            header('location: ../profile');
        }
        }
    }
}