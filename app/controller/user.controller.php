<?php
require_once '../model/user.model.php';
require_once '../controller/classes/redirect.class.php';



class UserController
{

    public function register()
    {
        $password =password_hash($_POST['email'],PASSWORD_DEFAULT);
        if(isset($_POST['submit'])) {
            $data = array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'birthday' => $_POST['birthday'],
                'email' => $_POST['email'],
                'passwrd' => $password
            );
            $result = User::signUp($data);
            if ($result !== 'ok') {
                    echo $result;
                } else{
                    header('location:'.BASE_URL.'app/view/login.php');
               }
            }
    }
    public function auth(){
            if (isset($_POST[submit])){
                $data['email'] = $_POST['email'];
                $result = User::signIn($data);
            if ($result->email === $_POST['email'] && password_verify($_POST['passwrd'],$result->passwrd) ){
                $_SESSION['email'] = $result->email;
                Redirect::to(BASE_URL.'app/view/profile.php');
            }else{
                echo "error";
            }
            }
    }
}
