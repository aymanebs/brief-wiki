<?php

namespace app\controllers;

require_once '../../vendor/autoload.php';

use app\entities\User;
use app\services\UserServices;


class UserController
{

    // user registration function

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $password_confirmation = htmlspecialchars($_POST['password_confirmation']);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $user = new User($name, $email, $password);
            $userServices = new UserServices();
            $test = $userServices->create($user);
            header('Location:login');

        }
    }

    // view register page

    public function viewRegister()
    {
        require_once  "../../views/authentification/register.php";
    }

    // view login page

    public function viewLogin()
    {
        require_once  "../../views/authentification/login.php";
    }

    // login function 

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $userServices = new UserServices();
            $user = $userServices->getUserByEmail($email);

            if ($user) {

                if (password_verify($password, $user['password'])) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];

                    $role = $user['role_id'];
                    if ($role == 1) {
                        header('Location:dashboard');
                        exit();
                    } else if ($role == 2) {
                        header('Location:index');
                        exit();
                    }
                } else {
                    header('Location:login');
                    exit();
                }
            }
        }
    }

    // logout function

    public function logout()
    {

        session_start();

        session_destroy();

        header('Location: login');
        exit();
    }

    // user delete function 

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $userService = new UserServices();
            $userService->delete($id);
            header('location: dashboard-users');
        }
    }

     // listing the users for the admin

     public function listUsers(){

        $userServices=new UserServices();
        $users=$userServices->getAllUsers();

        require_once '../../views/admin/dashboard-users.php';

     }

     public function editRole(){

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
            $id=$_POST['id'];
            $userService=new UserServices();
            $userService->updateRole($id,$_POST["role"]);
            header("Location: dashboard-users");
            exit;
        }


    }

}
