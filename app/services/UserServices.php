<?php

namespace app\services;
require_once '../../vendor/autoload.php';
use app\config\Db_conn;
use app\dao\UserDao;
use PDO;
use PDOException;



class UserServices implements UserDao{

    private $database;

    public function __construct()
    {
        $this->database= Db_conn::getConnection();
    }

    public function create( $user){
        $sql = "INSERT INTO users(name,email,password,role_id) values(:name,:email,:password,:role_id)";
        $stmt=$this->database->prepare($sql);

        $name=$user->getName();
        $email=$user->getEmail();
        $password=$user->getPassword();
        $role_id=2;

        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->bindParam(':password',$password,PDO::PARAM_STR);
        $stmt->bindParam(':role_id',$role_id,PDO::PARAM_INT);
        $stmt->execute();
 
    }
 


    public function getUserByEmail($email)
    {
        $stmt=$this->database->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            return $row; 
        } else {
            return null; 
        }
    }
       

    public function update($user){
        echo'cc';
    }

    public function delete( $id){
        $sql="DELETE FROM users WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

    }

    public function getUserById($id)
    {
        echo'cc';
    }


    public function getAllUsers(){
        $sql ="SELECT users.id as id,users.name as name,users.email as email, users.password as password, users.role_id as role_id, roles.name as role FROM users JOIN roles ON users.role_id = roles.id";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();

        $wiki=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $wiki;
    }
    
    public function updateRole($id,$role){
        $sql = "UPDATE users SET role_id=:role_id WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':role_id', $role, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function count(){
        $sql ="SELECT count(id)  FROM users";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();;
        return $count;

        }

}
