<?php 

namespace app\controllers;

use app\entities\Wiki;
use app\services\WikiServices;

require_once '../../vendor/autoload.php';

class WikiController{

    public function insert(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])){

            $title=$_POST['title'];
            $content=$_POST['content'];
            $status=$_POST['status'];
            $category_id=$_POST['category_id'];
            $user_id=$_POST['user_id'];

            $imagePath=$_FILES['image']['name'];
            $temp_name=$_FILES['image']['tmp_name'];
            $uploadDirectory = "../../public/upload/";
            $destination = $uploadDirectory . basename($imagePath);
            move_uploaded_file($temp_name, $destination);
    
            
            

            $wiki= new Wiki($title,$content,$imagePath,$status,$category_id,$user_id);
            $wikiServices = new WikiServices();

            $wikiServices->create($wiki);

        }


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


}    