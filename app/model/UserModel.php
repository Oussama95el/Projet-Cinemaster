<?php
//require_once 'DatabaseModel.php';
class UserModel
{

    static public function create($data)
    {
        $db = DatabaseModel::connect()->prepare('INSERT INTO users (firstname, lastname, birthday, email, passwrd) 
                                            VALUES (:firstname, :lastname, :birthday, :email, :passwrd)');
        $db->execute($data);
    }

    static public function fetchByEmail($email){

        try {
            $db = DatabaseModel::connect()->prepare('SELECT * FROM users WHERE email = :email');
            $db->execute(array(":email"=>$email));
            return $db->fetch(PDO::FETCH_OBJ);
        }catch (PDOException $e){
            return "ERROR".$e->getMessage();

        }
    }
}



