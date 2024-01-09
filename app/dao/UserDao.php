<?php

namespace app\dao;
require_once '../../vendor/autoload.php';


Use app\entities\User;

interface UserDao{

    public function create(User $user);
    public function update(User $user);
    public function delete($id);
    public function getUserById($id);
    public function getUserByEmail($email);


}