<?php
require_once './app/model/DatabaseModel.php';
class CommentModel
{
    static public function addComment($data){
        $db = DatabaseModel::connect()->prepare('INSERT INTO comments ( content, user,post ) 
                                                VALUES ( :content,:user,:post)');
        if ($db->execute($data)){
            return 'ok';
        }
    }
    static public function displayCom($data){
        $db = DatabaseModel::connect()->prepare('SELECT 
           * FROM comments where post = :post order by comment_id desc');
        $db->execute($data);
    }
}