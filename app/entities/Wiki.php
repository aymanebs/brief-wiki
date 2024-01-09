<?php 

namespace app\entities;
require_once '../../vendor/autoload.php';

class Wiki{

    private $id;
    private $title;
    private $content;
    private $imagePath;
    private $submissionDate;
    private $status;
    private $category_id; 
    private $user_id;

    // Constructor
    
    public function __construct($title,$content,$imagePath,$status,$category_id,$user_id)
    {
        
      $this->title=$title;
      $this->content=$content;
      $this->imagePath=$imagePath;
      $this->status=$status;
      $this->category_id=$category_id;
      $this->user_id=$user_id;
    }

    // get methods

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getImagePath(){
        return $this->imagePath;
    }

    public function getSubmissionDate(){
        return $this->submissionDate;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getCategory_id(){
        return $this->category_id;
    }

    public function getUser_id(){
        return $this->user_id;
    }

    // set methods
    
    public function setTitle($title){
         $this->title = $title;
    }

    public function setContent($content){
         $this->content = $content;
    }

    public function setImagePath($imagePath){
          $this->imagePath = $imagePath;
    }

    public function setSubmissionDate($submissionDate){
          $this->submissionDate = $submissionDate;
    }

    public function setStatus($status){
           $this->status = $status;
    }

    public function setCategory_id($category_id){
            $this->category_id = $category_id;
    }

    public function setUser_id($user_id){
             $this->user_id = $user_id;
    }
  




}