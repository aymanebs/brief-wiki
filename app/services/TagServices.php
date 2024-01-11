<?php

namespace app\services;

use app\config\Db_conn;
use app\dao\TagDao;
use app\entities\Tag;
use PDO;

require_once '../../vendor/autoload.php';

class TagServices implements TagDao{

    private $database;

    public function __construct()
    {
        $this->database=Db_conn ::getConnection();
    }

    public function create(Tag $tag)
    {
        $sql="INSERT INTO tags(title) VALUE(:title)";
        $stmt=$this->database->prepare($sql);
        
        $title= $tag->getTitle();

        $stmt->bindParam(':title',$title,PDO::PARAM_STR);
        $stmt->execute();

    }

    public function update(Tag $tag){
        echo"";
    }

    public function delete( $id){
        $sql="DELETE FROM tags WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

    }

    public function getTagById($id){
        $sql ="SELECT * FROM  tags WHERE id=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

        $tag=$stmt->fetch(PDO::FETCH_ASSOC);
        return $tag;
    }

    public function getAllTags(){
        $sql ="SELECT * FROM  tags";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();

        $tag=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $tag;
    }

    public function updateTitle($id,$title){

        $sql = "UPDATE tags SET title=:title WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    }

    public function count(){
        $sql ="SELECT count(id)  FROM tags";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();;
        return $count;

        }

}