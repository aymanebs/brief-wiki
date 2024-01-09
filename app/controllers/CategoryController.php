<?php

namespace app\controllers;
require_once '../../vendor/autoload.php';
use app\entities\Category;
use app\services\CategoryServices;




class CategoryController{

    public function insert(){

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])){

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


    public function delete(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $categoryService=new CategoryServices();
            $categoryService->delete($id);
            header('location: dashboard');
        }
    }

}
