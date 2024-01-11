<?php

namespace app\controllers;
require_once '../../vendor/autoload.php';
use app\entities\Tag;
use app\services\CategoryServices;
use app\services\TagServices;
use app\services\UserServices;
use app\services\WikiServices;

class StatisticsController{

    public function count(){

        $wikiService = new WikiServices();
        $wikicount =$wikiService->count();
        $tagService =new TagServices();
        $tagcount =$tagService->count();
        $categoryService=new CategoryServices();
        $categorycount=$categoryService->count();
        $userService=new UserServices;
        $usercount=$userService->count();
        
        require_once '../../views/admin/statistics.php';



    }



}