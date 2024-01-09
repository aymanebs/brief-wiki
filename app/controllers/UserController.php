<?php 

namespace app\controllers;
require_once '../../vendor/autoload.php';

use app\entities\User;
use app\services\UserServices;


class UserController{

    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])){
            
            $name=htmlspecialchars($_POST['name']);
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);
            $password_confirmation=htmlspecialchars($_POST['password_confirmation']);
            $password=password_hash($password,PASSWORD_DEFAULT);
            
            
            $user= new User($name,$email,$password,null);
            
            $userServices = new UserServices();
            $test=$userServices->create($user);
            var_dump($test);
            
        
            // header('location:../../views/authentification/register.php?welcome');
            
        }
    }

    public function viewRegister()
    {
        require_once  "../../views/authentification/register.php";
    }

    public function login(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign'])){
           
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);

            $userServices = new UserServices();
            $user = $userServices->getUserByEmail($email);

            if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];

                    $role = $user['role_id'];
                    if ($role == 1) {
                        header('Location: ');
                        exit();
                    } else if ($role == 2) {
                        header('Location: ');
                        exit();
        
                    }
                }
            }



    }

}
    }





