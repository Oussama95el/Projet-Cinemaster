<?php
//require_once '../model/UserModel.php';
//require_once '/redirectClass.php';



class UserController
{

    public function register()
    {
        $password = password_hash($_POST['passwrd'],PASSWORD_DEFAULT);
        if(isset($_POST['submit'])) {
            $data = array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'birthday' => $_POST['birthday'],
                'email' => $_POST['email'],
                'passwrd' => $password
            );
            $result = UserModel::create($data);
            if ($result !== 'ok') {
                    echo $result;
                } else{
//                    header('/login.php');
                Redirect::to("./login");
               }
            }
    }
    public function auth(){
            if (isset($_POST['submit'])){
//                echo "test";
                $email = $_POST["email"];
                $user = UserModel::fetchByEmail($email);
                if(!$user) {
                    echo "error";
                    return;
                }
            if (password_verify($_POST['passwrd'],$user->passwrd)){
                $_SESSION['user_id'] = $user->user_id;
                header("location:./profile");
            }else{
                echo "error";
            }
            }
    }
}
