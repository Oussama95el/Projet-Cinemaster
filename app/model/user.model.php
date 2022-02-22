<?php
require_once '../model/database.model.php';
class User
{

    static public function signUp($data)
    {
        $db = DB::connect()->prepare('INSERT INTO users (firstname, lastname, birthday, email, passwrd) 
                                            VALUES (:firstname, :lastname, :birthday, :email, :passwrd)');
        $db->execute($data);
    }

    static public function signIn($data){
        $email = $data['email'];

        try {
            $db = DB::connect()->prepare('SELECT * FROM users WHERE email = :email');
            $db->execute(array(":email"=>$email));
            return $db->fetch(PDO::FETCH_OBJ);
        }catch (PDOException $e){
            return "ERROR".$e->getMessage();

        }
    }
}



