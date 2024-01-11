<?php 

namespace app\controllers;

use app\entities\Wiki;
use app\services\WikiServices;
use app\services\CategoryServices;
use app\services\TagServices;

require_once '../../vendor/autoload.php';

class WikiController{

    // function to add wikis

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
            $wiki= new Wiki(null,$title,$content,$imagePath,$status,$category_id,$user_id);
            $wikiServices = new WikiServices();
            $wikiServices->create($wiki,$tagId);
        }
    }

    // Fetching categories and tags to display them in select list

    public function selectList(){
        
        $categoryservice = new CategoryServices();
        $categories=$categoryservice->getAllCategories();
        $tagservice = new TagServices();
        $tags=$tagservice->getAllTags();
        require_once  "../../views/user/wikinsert.php";
    }
 
    // Wiki insert page view 

    public function viewInsert()
    {
        require_once  "../../views/user/wikinsert.php";
    }

    // index page view

    public function viewList()
    {
        $wikiService = new WikiServices();
        $wikis = $wikiService->getDisplayWikis();
        require_once  "../../index.php";
    }

    // deleting wikis

    public function delete(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $wikiService=new WikiServices();
            $wikiService->delete($id);
            header('location: dashboard');
        }
    }


    // public function viewEdit()
    // {
       
    //     if (isset($_GET['id'])){
           
    //         $id=$_GET['id'];
    //         $wikiService=new WikiServices();
    //         $wiki=$wikiService->getWikiById($id);
            
        
    //         print_r($wiki) ;
    //         $wikiService->update($wiki);
    //         echo"here";
    //         header('location: edit-wiki');
    //     }



    // }


     // editing wikis

    //  public function viewEdit(){
    //     if (isset($_GET['id'])){
           
    //         $id=$_GET['id'];
    //         $wikiService=new WikiServices();
    //         $wiki=$wikiService->getWikiById($id);
    //         require_once "../../views/admin/edit-wiki.php";
            
      
    //     }
    // }

    public function editStatus(){

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
            $id=$_POST['id'];
            $wikiService=new WikiServices();
            $wikiService->updateStatus($id,$_POST["status"]);
            header("Location: dashboard");
            exit;
        }


    }
    


 

    // listing the wikis details

    public function listDetails(){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
            $wikiService=new WikiServices();
            $wikis=$wikiService->getWikiById($id);
            require_once "../../views/user/wikidetails.php";
    }
}

    // listing the wikis for the admin

    public function listWikis(){ 
        $wikiService = new WikiServices();
        $wikis = $wikiService->getAllWikis();
        require_once '../../views/admin/dashboard.php';
       


    }




}    