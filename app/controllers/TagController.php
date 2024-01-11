<?php

namespace app\controllers;
require_once '../../vendor/autoload.php';
use app\entities\Tag;
use app\services\TagServices;




class TagController{

    // function to insert tags

    public function insert(){

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])){

            $title=$_POST['title'];
            $tag= new tag($title);
            $tagServices = new TagServices();
            $tagServices->create($tag);

        }
    }


 
    // view tag insert page

    public function viewInsert()
    {
        require_once  "../../views/taginsert.php";
    }

    // delete tags

    public function delete(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $tagService=new TagServices();
            $tagService->delete($id);
            header('location: dashboard');
        }
    }

    // list the tags 

    public function listTags(){
        
        $tagservice = new TagServices();
        $tags=$tagservice->getAllTags();
        require_once '../../views/admin/dashboard-tags.php';

    }
}