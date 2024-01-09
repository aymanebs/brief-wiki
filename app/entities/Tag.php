<?php 

namespace app\entities;
require_once '../../vendor/autoload.php';

class Tag{

    private $id;
    private $title; 
    private $submissionDate; 

     // Constructor

     public function __construct($title)
     {
         
       $this->title=$title;
  
       
     }

        // get methods

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getSubmissionDate(){
        return $this->submissionDate;
    }

    
        // set methods

    public function setId($id){
         $this->id=$id;
    }

    public function setTitle($title){
         $this->title=$title;
    }

    public function setSubmissionDate($submissionDate){
         $this->submissionDate = $submissionDate;
    }





}