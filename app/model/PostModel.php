<?php
require_once './app/model/DatabaseModel.php';
    class PostModel{

        static public function newPost($data){
            $db = DatabaseModel::connect()->prepare('INSERT INTO posts( title, description , picture, categorie,user) 
                                        VALUES ( :title, :description, :picture, :categorie, :user)');
            $db->bindParam(':title', $data['title']);
            $db->bindParam(':description', $data['description']);
            $db->bindParam(':picture', $data['picture']);
            $db->bindParam(':categorie', $data['categorie']);
            $db->bindParam(':user', $data['user']);
            if ($db->execute()){
                return 'ok';
            }else{
                header('location:./404');
            }
        }
    }