<?php

namespace app\services;

use app\config\Db_conn;
use app\dao\CategoryDao;
use app\entities\Category;
use PDO;

require_once '../../vendor/autoload.php';

class CategoryServices implements CategoryDao{

    private $database;

    public function __construct()
    {
        $this->database=Db_conn ::getConnection();
    }

    public function create(Category $category)
    {
        $sql="INSERT INTO categories(title) VALUE(:title)";
        $stmt=$this->database->prepare($sql);
        
        $title= $category->getTitle();

        $stmt->bindParam(':title',$title,PDO::PARAM_STR);
        $stmt->execute();

    }

    public function update(Category $category){
        echo"";
    }

    public function delete(Category $category){
        echo"";
    }

    public function getCategoryById($id){
        echo"";
    }
    
    public function getAllCategories(){
        echo"";
    }



}