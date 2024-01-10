<?php 

namespace app\controllers;

use app\entities\Wiki;
use app\services\WikiServices;
use app\services\CategoryServices;
use app\services\TagServices;

require_once '../../vendor/autoload.php';

class WikiController{

    public function insert(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])){

            $title=$_POST['title'];
            $content=$_POST['content'];
            $status=0;
            $category_id=$_POST['category_id'];
            $user_id=17;
            $tagId=$_POST['tag_id'];

            $imagePath=$_FILES['image']['name'];
            $temp_name=$_FILES['image']['tmp_name'];
            $uploadDirectory = "../../public/upload/";
            $destination = $uploadDirectory . basename($imagePath);
            move_uploaded_file($temp_name, $destination);
    
            
            

            $wiki= new Wiki($title,$content,$imagePath,$status,$category_id,$user_id);
            $wikiServices = new WikiServices();

            $wikiServices->create($wiki,$tagId);

        }


    }

    public function selectList(){
        
        $categoryservice = new CategoryServices();
        $categories=$categoryservice->getAllCategories();
        $tagservice = new TagServices();
        $tags=$tagservice->getAllTags();
        require_once  "../../views/user/wikinsert.php";

    }
 

    public function viewInsert()
    {
        require_once  "../../views/user/wikinsert.php";
    }

    public function viewList()
    {
        require_once  "../../index.php";
    }

    public function delete(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $wikiService=new WikiServices();
            $wikiService->delete($id);
            header('location: dashboard');
        }
    }

    // public function viewDetails()
    // {
    //     require_once  "../../views/user/wikidetails.php";
    // }

    public function listwiki(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $wikiService=new WikiServices();
            $wikis=$wikiService->getWikiById($id);
            require_once "../../views/user/wikidetails.php";
    }
}
}    