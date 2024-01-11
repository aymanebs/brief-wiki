<?php

namespace app\controllers;
require_once '../../vendor/autoload.php';
use app\entities\Category;
use app\services\CategoryServices;




class CategoryController{

    // function to insert the categories

    public function insert(){

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])){

            $title=$_POST['title'];

            $category= new Category($title);
            $categoryServices = new CategoryServices();

            $categoryServices->create($category);

        }


    }

        // view category insert page

    public function viewInsert()
    {
        require_once  "../../views/catinsert.php";
    }

        // delete categories

    public function delete(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $categoryService=new CategoryServices();
            $categoryService->delete($id);
            header('location: dashboard-categories');
        }
    }

       // list the categories

       public function listCategories(){
        
        $categoryservice = new CategoryServices();
        $categories=$categoryservice->getAllCategories();
        require_once '../../views/admin/dashboard-categories.php';

    }

         // editing Categories

    
    
        public function editTitle(){
    
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
                $id=$_POST['id'];
                $categoryService=new CategoryServices();
                $categoryService->getCategoryById($id);
                $categoryService->updateTitle($id,$_POST["title"]);
                header("Location: dashboard-categories");
                exit;
            }
    
    
        }

}
