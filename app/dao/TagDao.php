<?php

namespace app\dao;
require_once '../../vendor/autoload.php';


Use app\entities\Tag;

interface TagDao{

    public function create(Tag $tag);
    public function update(Tag $tag);
    public function delete(Tag $tag);
    public function getTagById($id);
    public function getAllTags();
   

}