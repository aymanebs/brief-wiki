<?php

namespace app\dao;
require_once '../../vendor/autoload.php';


Use app\entities\Wiki;

interface WikiDao{

    public function create(Wiki $wiki,$tagId);
    public function update(Wiki $wiki);
    public function delete($id);
    public function getWikiById($id);
    public function getAllWikis();
   

}