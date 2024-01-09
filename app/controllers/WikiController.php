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
    
            move_uploaded_file($temp_name,"../../public/upload/$imagePath");

            $wiki= new Wiki($title,$content,$imagePath,$status,$category_id,$user_id);
            $wikiServices = new WikiServices();

            $wikiServices->create($wiki);

        }


    }

    public function viewInsert()
    {
        require_once  "../../views/wikinsert.php";
    }

    public function viewlist()
    {
        require_once  "../../views/wikilist.php";
    }


}    