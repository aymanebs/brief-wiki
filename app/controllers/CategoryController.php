<?php

namespace app\controllers;

use app\entities\Category;
use app\services\CategoryServices;

require_once '../../vendor/autoload.php';


class CategoryController{

    public function insert(){

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])){

            $title=$_POST['title'];

            $category= new Category($title);
            $categoryServices = new CategoryServices();

            $categoryServices->create($category);

        }


    }

    public function viewInsert()
    {
        require_once  "../../views/catinsert.php";
    }

}
