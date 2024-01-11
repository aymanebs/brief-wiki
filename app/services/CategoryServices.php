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

    public function delete( $id){
        $sql="DELETE FROM categories WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

    }

    public function getCategoryById($id){
        $sql ="SELECT * FROM  categories WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

        $category=$stmt->fetch(PDO::FETCH_ASSOC);
        return $category;
    }

    public function getAllCategories(){
        $sql ="SELECT * FROM  categories";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();

        $category=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $category;
    }


    public function updateTitle($id,$title){

        $sql = "UPDATE categories SET title=:title WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    }


}