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

    public function delete(Tag $tag){
        echo"";
    }

    public function getTagById($id){
        echo"";
    }

    public function getAllTags(){
        echo"";
    }



}