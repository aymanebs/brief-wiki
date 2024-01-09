<?php

namespace app\services;

use app\config\Db_conn;
use app\dao\WikiDao;
use PDO;

require_once '../../vendor/autoload.php';

class WikiServices implements WikiDao{

    private $database;

    public function __construct()
    {
        $this->database= Db_conn::getConnection();
    }


    public function create($wiki){

        $sql="INSERT INTO wikis(title,content,imagePath,status,category_id,user_id) Values(:title,:content,:imagePath,:status,:category_id,:user_id)";
        
        $stmt=$this->database->prepare($sql);

        $title=$wiki->getTitle();
        $content=$wiki->getContent();
        $imagePath=$wiki->getImagePath();
        $status=$wiki->getStatus();
        $category_id=$wiki->getCategory_id();
        $user_id=$wiki->getUser_id();

        $stmt->bindParam(':title',$title,PDO::PARAM_STR);
        $stmt->bindParam(':content',$content,PDO::PARAM_STR);
        $stmt->bindParam(':imagePath',$imagePath,PDO::PARAM_STR);
        $stmt->bindParam(':status',$status,PDO::PARAM_BOOL);
        $stmt->bindParam(':category_id',$category_id,PDO::PARAM_INT);
        $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);

        $stmt->execute();
    }


    public function update( $wiki){
        
    }
    
    public function delete( $id){
        $sql="DELETE FROM wikis WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

    }

    public function getWikiById($id){
        echo"";
    }

    public function getAllWikis(){
        $sql ="SELECT * FROM  wikis";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();

        $wiki=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $wiki;
    }



}