<?php

namespace app\dao;
require_once '../../vendor/autoload.php';


Use app\entities\Category;

interface CategoryDao{

    public function create(Category $category);
    public function update(Category $category);
    public function delete(Category $category);
    public function getCategoryById($id);
    public function getAllCategories();
   

}