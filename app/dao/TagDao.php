<?php

namespace app\dao;
require_once '../../vendor/autoload.php';


Use app\entities\Tag;

interface TagDao{

    public function create(Tag $tag);
    public function update(Tag $tag);
    public function updateTitle($id,$title);
    public function delete($id);
    public function getTagById($id);
    public function getAllTags();
    public function count();
   

}