<?php

namespace app\entities;
require_once '../../vendor/autoload.php';

class User{

    private $id;
    private $name;
    private $email;
    private $password;
    private $role_id;

     // Constructor

    public function __construct($name,$email,$password)
    {
        
      $this->name=$name;
      $this->email=$email;
      $this->password=$password;
     
    }

    // get methods

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRoleId(){
        return $this->role_id;
    }

    // set methods

    public function setId($id){
         $this->id=$id;
    }

    public function setName($name){
         $this->name=$name;
    }

    public function setEmail($email){
         $this->email=$email;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function setRoleId($role_id){
        $this->role_id=$role_id;
    }







}