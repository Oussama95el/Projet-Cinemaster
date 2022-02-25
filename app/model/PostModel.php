<?php
require_once './app/model/DatabaseModel.php';

class PostModel
{

    static public function newPost($data)
    {
        $db = DatabaseModel::connect()->prepare('INSERT INTO posts( title, description , picture, categorie,user) 
                                        VALUES ( :title, :description, :picture, :categorie, :user)');
        if ($db->execute($data)) {
            return 'ok';
        }
    }

    static public function getUserPosts()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $userId = $_SESSION['user_id'];
        $db = DatabaseModel::connect()->prepare("SELECT 
           * FROM posts where user = :user order by post_id desc 
            
");
        $db->execute(["user" => $userId]);
        $userPosts = $db->fetchAll();
        $db = null;
        return $userPosts;
    }

    static public function updateUserPost($data)
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $removed = array_remove(["post_id"], $data);
        $updates = implode(", ", array_map(function ($key) {
            return "$key = :$key";
        }, array_keys($removed)));


        $db = DatabaseModel::connect()->prepare('UPDATE posts SET title = :title, categorie = :categorie, picture = :picture, description = :description WHERE post_id = :post_id');


//        $db->execute(["title" => $data["title"], "description" => $data["description"], "categorie" => $data["categorie"], "picture" => $data["picture"], "post_id" => $data["post_id"]]);
        return $db->execute($data);
    }

    static public function deletePost($data)
    {

        $db = DatabaseModel::connect()->prepare('DELETE FROM posts WHERE post_id = :post_id');
        if ($db->execute($data)) {
            return 'ok';
        }
    }
}


function array_remove($fields, $arr)
{
    $copy = [...$arr];
    foreach ($fields as $field) {
        if (isset($copy[$field])) {
            unset($copy[$field]);
        }
    }
    return $copy;
}




